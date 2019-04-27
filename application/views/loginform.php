<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png');?>">

    </head>

    <body style="background-color: grey">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Login &amp; Register Forms</h1>
                            <div class="description">
                            	<!-- <p>
	                            	This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
	                            	customize and use it as you like!
                            	</p> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="col">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<button type="submit" name="login" class="btn" ><a href="<?php echo base_url('admin/overview'); ?>" style="color:white;">ADMIN</a></button>
				                        </div>
				                        <div class="form-group">
				                        	<button type="submit" name="login" class="btn" ><a href="<?php echo base_url('kasir'); ?>" style="color:white;">KASIR</a></button>
				                        </div>
				                        <button type="submit" name="login" class="btn" ><a href="<?php echo base_url('gudang'); ?>" style="color:white;">GUDANG</a></button>
                                    </form>
                                    
			                    </div>
		                    </div>
	                        
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Team <a href="http://localhost/tascust/" target="_blank"><strong>CUSTOM BAG</strong></a></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>