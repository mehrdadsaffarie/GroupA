    <?php
		$baseUrl = Yii::app()->request->baseUrl;
	?>
    	<div class="page-header">
    		<h1>Elements<small> cool UI elements</small></h1>
        </div>
        
        <div class="row-fluid">
           <div class="span6">
           		<h3 class="header">Tables
                    <span class="header-line"></span> 
                </h3>
           		<table class="table table-striped table-bordered table-hover">
					<thead>
                        <tr>
                          <th>First name</th>
                          <th>Last name</th>
                          <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>34</td>
                        </tr>
                        <tr>
                          <td>Jane</td>
                          <td>Doe</td>
                          <td>36</td>
                        </tr>
                        <tr>
                          <td>Bill</td>
                          <td>Joe</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td>Tom</td>
                          <td>Gates</td>
                          <td>45</td>
                        </tr>
                    </tbody>
				</table>
           </div>
           <div class="span6">
           		<h3 class="header">Buttons
                    <span class="header-line"></span> 
                </h3>
           		<p>
                  <button class="btn btn-large btn-primary" type="button">Large button</button>
                  <button class="btn btn-large" type="button">Large button</button>
                </p>
                <p>
                  <button class="btn btn-primary" type="button">Default button</button>
                  <button class="btn" type="button">Default button</button>
                </p>
                <p>
                  <button class="btn btn-small btn-primary" type="button">Small button</button>
                  <button class="btn btn-small" type="button">Small button</button>
                </p>
                <p>
                  <button class="btn btn-mini" type="button">Mini button</button>
                  <button class="btn btn-mini btn-primary" type="button">Mini button</button>
                  <button class="btn btn-mini btn-info" type="button">Mini button</button>
                  <button class="btn btn-mini btn-success" type="button">Mini button</button>
                </p>
                <p>
                  <button class="btn btn-mini btn-warning" type="button">Mini button</button>
                  <button class="btn btn-mini btn-danger" type="button">Mini button</button>
                  <button class="btn btn-mini btn-inverse" type="button">Mini button</button>
                  <button class="btn btn-mini btn-link" type="button">Mini button</button>
                </p>
           </div>
          
        </div><!--/row-fluid-->
        
        <div class="row-fluid">
           <div class="span6">
           		<h3 class="header">Alerts
                    <span class="header-line"></span> 
                </h3>
                <div class="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
          		<div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Error!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Success!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Info!</strong> Best check yo self, you're not looking too good.
                </div>
           </div>
           <div class="span6">
           		<h3 class="header">Text
                    <span class="header-line"></span> 
                </h3>
                <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
                <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
           </div>
       	</div><!--/row-fluid-->
        
        <div class="row-fluid">
           <div class="span6">
           		<h3 class="header">Tabs
                    <span class="header-line"></span> 
                </h3>
           		<ul class="nav nav-tabs">
                  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                  <li><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="home"><h3>Home</h3>This is a home page, consectetur adipiscing elit. Quisque malesuada aliquam vulputate. Cras pulvinar erat ac velit eleifend porttitor at eu diam. Praesent elit mi, mattis vitae accumsan bibendum, porttitor non neque.</div>
                  <div class="tab-pane" id="profile"><h3>Profile</h3>This is a profile, consectetur adipiscing elit. Quisque malesuada aliquam vulputate. Cras pulvinar erat ac velit eleifend porttitor at eu diam. Praesent elit mi, mattis vitae accumsan bibendum, porttitor non neque.</div>
                  <div class="tab-pane" id="messages"><h3>Messages</h3>This is a message, consectetur adipiscing elit. Quisque malesuada aliquam vulputate. Cras pulvinar erat ac velit eleifend porttitor at eu diam. Praesent elit mi, mattis vitae accumsan bibendum, porttitor non neque.</div>
                  <div class="tab-pane" id="settings"><h3>Settings</h3>These are settings, consectetur adipiscing elit. Quisque malesuada aliquam vulputate. Cras pulvinar erat ac velit eleifend porttitor at eu diam. Praesent elit mi, mattis vitae accumsan bibendum, porttitor non neque.</div>
                </div>
           </div>
           <div class="span6">
           		<h3 class="header">Toggle accordion
                    <span class="header-line"></span> 
                </h3>
           		<div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
              </div>
                
           </div>
          
        </div><!--/row-fluid-->
        
        <div class="row-fluid">
           <div class="span6">
           		<h3 class="header">Round backgrounds
                    <span class="header-line"></span> 
                </h3>
           		<div class="round_background r-yellow">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-red">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-orange">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-grey-light">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-grey">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-green">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
                 <div class="round_background r-blue">
                    <img src="<?php echo $baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                 </div>
           </div>
           <div class="span6">
           		<h3 class="header">Square backgrounds
                    <span class="header-line"></span> 
                </h3>
                
                <div class="square-background clearfix">
                    <div class="square square-back pull-left">
                       <img src="<?php echo $baseUrl;?>/img/icons/smashing/60px/60px-02.png" alt="" class="">
                    </div>
                     <h4>Theme documentation</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                </div>
                    
                <div class="square-background square-colored clearfix">
                    <div class="square square-back  pull-left">
                        <img src="<?php echo $baseUrl;?>/img/icons/smashing/60px/60px-05.png" alt="" class="">
                    </div>
                     <h4>Project management</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                </div>
           </div>
        </div>
        <br />
    