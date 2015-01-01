function setCookie (name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}
function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
        offset = cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            if (end == -1) {
                end = cookie.length;
            }
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    return(setStr);

    //return unescape((RegExp(n + '=([^;]+)').exec(document.cookie) || [1, ''])[1]);

}

var _C = {
    set : function (name, val){
        try{
            setCookie(name, val.join('+'));
        }catch(err){
            //vc.log('ERROR: _C.set' + err.name + '; ' + err.message);
        }
    },
    get : function (name){
        try{
            var tempList = getCookie(name);
            var result = '';
            if(!tempList){
                result = null;
            }else{
                result = tempList.split('+');
            }
            return result;
        }catch(err){
            //vc.log('ERROR: _C.get' + err.name + '; ' + err.message);
        }
    }
}



    var _MA = { // malware action
        started : false,
        html : '<p>Malware is blocked  <br />by <b>Hotspot Shield</b></p>',
        i : 1,
        init : function(){
            this.maBody = document.getElementById('malware_action');
        },
        show : function(){
            if(!this.started) this.init();
            this.maBody.innerHTML = _MA.html;
            setTimeout(function(){_MA.hide();}, 2000);
        },
        hide : function(){
            this.maBody.innerHTML = '';
            if(this.i == 0){
                this.i = 1;
            }else{
                this.i--;
                setTimeout(function(){_MA.show();}, 200);
            }
        }
    }

    var hss_malware = {
        top : 90,
        timout : null,
        started : false,
        init : function(){
            this.started = true;
            this.a = document.getElementById('hss_m');
            this.close();
        },
        open : function(){
            this.action(80, 'top');
        },
        close : function(){
            if(!this.started) return;
            if(this.timout != null){
                return;
            }
            this.timout = setTimeout(function(){hss_malware.action(40, 'bottom');}, 500);
        },
        stopHide : function (){
            clearTimeout(this.timout);
            this.timout = null;
        },
        action : function(px, direction){
            var val = direction == 'top' ? px - 5 : px + 6;
            if(val <= 37){
                val = 37;
                this.a.style.top = '37px';
            }else if(val >= 90){
                val = 90;
                this.a.style.top = '90px';
            }else{
                this.a.style.top = val + 'px';
                setTimeout(function(){hss_malware.action(val,direction);},8);
            }
        }
    }

    var _UP = {
        formatByteCount : function(numStr) {
            if (numStr != "") {
                var num = parseFloat(numStr);
                if (!isNaN(num)) {
                    if (num >= 1000000000.0) {
                        num /= 1073741824.0;
                        return num.toPrecision(3) + "&nbsp;GB";
                    } else if (num >= 1000000.0) {
                        num /= 1048576.0;
                        return num.toPrecision(3) + "&nbsp;MB";
                    } else if (num >= 1000.0) {
                        num /= 1024.0;
                        return num.toPrecision(3) + "&nbsp;KB";
                    } else {
                        return num.toFixed(0) + "&nbsp;B";
                    }
                }
            }
            return "0";
        }
    }

    var _D = { // diagram
        started : false,
        list : [],
        f_data : null,
        currentMalwares : 0,
        malwareList : [],
        title : 'Hotspot Shield blocked MALWARE item(s) malicious software',
        init : function(data){
            //vc.log('_D.init();');
            this.f_data = data;
            this.disconnectBox = document.getElementById('disconnectAlert');
            this.disconnectTimer = null;
            this.disconnected = false;


            this.diagram = document.getElementById('list');
            this.LIs = this.diagram.getElementsByTagName('li');
            for(var i=0; i<_D.LIs.length; i++){
                _D.LIs[i].id = 'li_'+i;
                //_D.LIs[i].style.height = _D.list[i]+'px';
                _D.LIs[i].style.left = i*8+'px';
            }

            // create links
            this.d_date = document.getElementById('d_date');
            this.d_malw = document.getElementById('d_malw');

            this.d_speed = document.getElementById('speed');
            this.scale = 0;
            this.averageSpeed = 0;

            this.started = true;
            ////vc.log('3');


            // get Cookies
            var diagramList = _C.get('diagramList');
            if(diagramList == null){
                return;
            }else{
                _D.list = diagramList;
                for(var i=0; i<_D.list.length; i++){
                    _D.list[i] = _D.list[i]*1;
                }

                //
                clearTimeout(malwareSlide);
                malwareSlide = null;
                setTimeout(function(){hss_malware.init();},100);

            }
            //console.log(diagramList);

            var malwareList = _C.get('malwareList');
            if(malwareList == null){
                return;
            }else{
                _D.malwareList = malwareList;
                for(var i=0; i<_D.malwareList.length; i++){
                    _D.malwareList[i] = _D.malwareList[i]*1;
                }
            }
            //console.log(malwareList);

            /*
            var arrayLargest = 0;
            // Write your code below!
            for (var i=0; i < _D.list.length;i++) {
                if (_D.list[i] > arrayLargest) {
                    arrayLargest = _D.list[i];
                }
            }
            this.scale = arrayLargest*1.3;
            */

            this.f_data = getCookie('dataTotal');

        },
        up : function(data, malwar){
            try{

                if(!this.started) this.init(data);
                // show malwares report in bottom
                if(malwar>0){
                document.getElementById('data').style.display = 'block';
                this.d_malw.innerHTML = malwar;
                }
                // show malwares label
                if(this.currentMalwares != malwar){
                    this.currentMalwares = malwar;
                    this.malwareList.push(1);
                    _MA.show();
                }else{
                    this.malwareList.push(0);
                }

                // push new element
                if(this.f_data == null) {
                    this.f_data = data;
                }

                this.list.push(Math.round(data - this.f_data + 1));
                this.f_data = data;
                setCookie('dataTotal', this.f_data);

                // update diagram
                var arrayLargest = 0;
                // Write your code below!
                for (var i=0; i < this.list.length;i++) {
                    if (this.list[i] > arrayLargest) {
                        arrayLargest = this.list[i];
                    }
                }

                if(this.scale < arrayLargest) {
                    this.scale = arrayLargest*1.3;
                    this.averageSpeed = arrayLargest*1.3*0.52;
                } else if (this.scale > arrayLargest * 2) {
                    this.scale = arrayLargest*1.2;
                    this.averageSpeed = arrayLargest*1.2*0.52;
                } else {
                    this.averageSpeed = arrayLargest*1.3*0.52;
                }

                var ind = 28/this.scale;
                //var ind = this.scale*1.5;
                //var ind = 30/arrayLargest;

                if(arrayLargest == 0) ind = 25;
                if(this.list.length > 21) {
                    this.list.shift();
                    this.malwareList.shift();
                }
                // add cookis
                _C.set('malwareList', this.malwareList);
                _C.set('diagramList', this.list);
                //vc.log('_D.LIs.length = '+ _D.LIs.length, 3)

                this.d_speed.innerHTML = _UP.formatByteCount(data);

                for(var i=0; i<_D.LIs.length; i++){
                    if(typeof(_D.list[i]) != 'undefined'){
                        _D.LIs[i].style.height = _D.list[i]*ind + 'px';
                        _D.LIs[i].className = _D.malwareList[i] == 1 ? 'mal' : '';
                        _D.LIs[i].title = _D.malwareList[i] == 1 ?'Malware is blocked  by Hotspot Shield' : '';
                    }
                }

                // update static elements
                //this.d_time.innerHTML = _UP.formatByteCount(data);

                // update speed
                //var lastSpeed_te = (this.list[this.list.length-1])/5;


                //var lastSpeed = (this.averageSpeed)/5;
                //vc.log('lastSpeed = ' + lastSpeed);
                this.d_speed.innerHTML = _UP.formatByteCount(data);

                // malware title
                if(this.currentMalwares > 0){
                    this.d_malw.title = this.title.replace('MALWARE', _D.currentMalwares);
                }

            }catch(err){
                //console.log('ERROR: ' + err.name + '; ' + err.message);
            }

        }
    }

    /*
    window.onload = function(){
        setTimeout(function(){hss_malware.init();},5000);

        // temp
        var b = 1234567;
        var i = 800;
        setInterval(function(){
            var d = 0;
            var m = 0;
            if(b > 1283722){
                if(i<400) i = 800;
                d = i*1.03;
                m = 4;
                if(i>830) m = 5;
            }else if(b > 1273722){
                i = 250;
                d = i;
                m = 4;
            }else if(b > 1250852){
                if(i<200) i = 400;
                d = i*1.07;
                m = 4;
            }else if(b > 1248000){
                d = i*0.7;
                m = 1;
            }else if(b > 1245000){
                d = i*1.2;
                m = 1;
            }else if(b > 1240000){
                d = i*0.95;
            }else{
                d = i*1.05;
            }
            i = d;
            b = b+d;
            //console.log(b);
            //console.log(d);

            _D.up(b, m);
        },5000);
        // temp
    }
    */


    function response(jobj) {

        try {
            if(typeof(jobj) != 'undefined'){
                var cs='', sn='';
                cs = jobj['connect_state'];


                var newObj = jobj['daemon_state'];
                newObj['connect_state'] = jobj['connect_state'];

                jobj = newObj;
                delete newObj;

                sn = (typeof(jobj['state_name']) != "undefined") ? jobj['state_name'] : '';
                //vc.log('cs = ' + cs + ', sn = '+ sn, 3);
                if (
                    (cs == 'PRE_CONNECT' || cs == 'UNINITIALIZED' || cs == 'POST_CONNECT' || (cs == 'SIGTERM_SENT' && sn != 'WAIT') || (cs == 'CONNECTED' && sn == ''))
                    ||
                    (cs == 'DAEMON_START_ERROR' || cs == 'CONFIG_NOT_FOUND' || cs == 'VERIFICATION_ERROR' || cs == 'NO_NETWORK_ERROR')
                ){
                    //vc.log('Diconn', 3);
                    // disconnect
                    // errors
                    if(!_D.disconnected){
                        _D.disconnectTimer = setTimeout(function(){
                            _D.disconnectBox.style.display = 'block';
                            //vc.log('Diconn ON', 3);
                        }, 7000);
                        _D.disconnected = true;
                    }
                }else{
                    //vc.log('Conn', 3);
                    if(_D.disconnected){
                        this.disconnectTimer = setTimeout(function(){
                            _D.disconnectBox.style.display = 'none';
                            //vc.log('Conn ON', 3);
                        }, 100);
                        _D.disconnected = false;
                    }
                }





                //var lastConnect = (typeof(jobj['timestamp']) != "undefined") ? parseInt(jobj['timestamp']) : 0;
                var bi = (typeof(jobj['bytes_in']) != "undefined") ? parseInt(jobj['bytes_in']) : 0;
                var bo = (typeof(jobj['bytes_out']) != "undefined") ? parseInt(jobj['bytes_out']) : 0;
                var mw = (typeof(jobj['proxy_req_malware_count']) != "undefined") ? parseInt(jobj['proxy_req_malware_count']) : 0;
                var requests = (typeof(jobj['proxy_req_count']) != "undefined") ? parseInt(jobj['proxy_req_count']) : 0;


                _D.up(bi+bo, mw);

            }
        } catch (err) {}
        delete jobj;
        jobj = null;
    }

    var ajaxTimeout = null;
    var json_state = function(){
        var old = document.getElementById('json_state');
        var head = document.getElementsByTagName("head")[0];
        var script = document.createElement('script');
        var tm=new Date().getTime();
        if(old!=null){
            old.parentNode.removeChild(old);
            delete old;
            old = null;
        }
        script.id = 'json_state';
        script.type = 'text/javascript';
        script.src = 'http://127.0.0.1:895/config/status.js?tm='+tm;
        head.appendChild(script);
        delete script;
        ajaxTimeout = setTimeout(json_state, 5000);
    };
