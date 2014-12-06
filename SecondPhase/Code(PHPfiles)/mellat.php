<?php

class mellat  
{
        const terminalID = 1000001;
        const username = 'wssddff';
    const password = 2655;
        
        
        //const webservice = 'https://pgws.bpm.bankmellat.ir/pgwchannel/services/pgw';
        //const webservice = 'https://pgwsf.bpm.bankmellat.ir:1443/pgwchannel/services/pgw';
        const webservice = 'https://pgwsf.bpm.bankmellat.ir/pgwchannel/services/pgw';

        

                /**

        *       method send request to bank and get authority!
        *
        * @param $price int , toman تومان
        * @param $order_id int , unique id
        * @param $callback string , callback site
        * @return object , au: authority , go: bank link payment , status: the status of connection!
        **/
        public function request($price = NULL , $order_id = NULL , $callback = NULL)
        {
                $parameters = array(
                                'terminalId' => self::terminalID ,
                                'userName' => self::username ,
                                'userPassword' => self::password ,
                                'orderId' => $order_id ,
                                'amount' => $price * 10 ,
                                'localDate' => date("Ymd") ,
                                'localTime' => date("His") ,
                                'additionalData' => '' ,
                                'callBackUrl' => $callback ,
                                'payerId' => '0' ,
                );
                        
                        try
                {
                        $client = new nusoap_client(self::webservice);
                        $err = $client->getError();
                        if($err)
                                return -6;
                }
                catch(Exception $e)
                {
                        Logs::model()->add('خطا در اتصال به بانک ملت','خطا : '.strip_tags($err));
                        return -6;
                }
                                
                        $result = $client->call('bpPayRequest', $parameters, 'http://interfaces.core.sw.bps.com/');
                        //print_r($result);
                        $res = explode (',', $result);
                        if( ! isset($res[0]) or $res[0] != "0" or ! isset($res[1]))
                                return -6;

                        else
                        {
                                return strip_tags($res[1]);
                        }

                        
                return -6;
        }
        
        


                /**
        * method to check verify transaction
        *
        * @param $price int , تومان
        * @param $order_id int , unique order id 
        * @param $au string , authority code
        * @return bool true/false 
        **/
        public $SaleReferenceId = '';
        public function verify($price = NULL ,$order_id = NULL , $au = NULL)
        {

                //print_r($_POST);
                        $RefId = @$_POST['RefId']; // notNeed
                        $ResCode = @$_POST['ResCode'];
                        $SaleOrderId = (int) @$_POST['SaleOrderId'];
                        $SaleReferenceId = @$_POST['SaleReferenceId'];
                        //Logs::model()->add('SaleReferenceId',$SaleReferenceId .'-'.$RefId);
                        
                        $this->SaleReferenceId = $SaleReferenceId;
                        /**/
                        //check
                        if($SaleOrderId != $order_id or $RefId!=$au or ! isset($_POST['ResCode']))
                        {
                                Logs::model()->add('برگشت بانک ملت','خطا : ورودی نامعتبر است !');
                                return false;
                        }
                                
                        if($ResCode !=0)
                        {
                                return false;
                                #Logs::model()->add('برگشت بانک ملت','خطا : پرداخت انجام نشد .');
                        }
                        
                try
                {
                        $client = new nusoap_client(self::webservice);
                        $err = $client->getError();
                        if($err)
                                return false;
                }
                catch(Exception $e)
                {
                        Logs::model()->add('خطا در برگشت ملت ','خطا : '.strip_tags($err));
                        return false;
                }

                                  
                        $parameters = array(
                                        'terminalId' => self::terminalID ,
                                        'userName' => self::username ,
                                        'userPassword' => self::password ,
                                        'orderId' => $SaleOrderId ,
                                        'saleOrderId' => $SaleOrderId ,
                                        'saleReferenceId' => $SaleReferenceId
                                        );

                                // Call the SOAP method
                                unset($result);
                                $result = $client->call('bpVerifyRequest', $parameters,'http://interfaces.core.sw.bps.com/');

                                // Check for a fault
                                //if ($client->fault) 
                                        //Logs::model()->add('برگشت بانک ملت','_خطا در اتصال به بانک .');

                                
                                $err = $client->getError();
                                if ($err) 
                                {
                                        Logs::model()->add('برگشت بانک ملت',"__خطا : " . strip_tags($err) );
                                        return false;
                                }

                                
                                if(isset($result) and $result==0)
                                {
                                        //settel
                                        unset($result);
                                        $result = $client->call('bpSettleRequest', $parameters,'http://interfaces.core.sw.bps.com/');
                                        if ($client->fault) 
                                        {
                                        Logs::model()->add('برگشت بانک ملت','خطا در اتصال به بانک .');
                                                return false;
                                        }

                                
                                $err = $client->getError();
                                if ($err) 
                                {
                                        Logs::model()->add('برگشت بانک ملت',"خطا : " . strip_tags($err) );
                                        return false;
                                }

                                
                                        if(isset($result) and $result==0)
                                        {
                                                return true;    
                                        }
                                }
                                return false;
        }
        
        /* go to bank by au */



        public function go2bank($id='')
        {
                ?>
<html><head><meta charset='utf-8' /></head><body>
please wait ...
<form name='myform' action='https://pgw.bpm.bankmellat.ir/pgwchannel/startpay.mellat' method='POST'>
<input type='hidden'  name='RefId' value='<?php echo $id  ?>'>
</form>
<script language='javascript'>document.myform.submit()</script>
<!-- MobinPal Payment Webservice System desiged by RezaOnline.net -->
</body></html>
                         <?php
                         die;
        }
}

