<?php
session_start();
require_once('./inc/functions.inc');



// redirected here from /home via .htaccess

/*
This file is made for taking premium payments

1) Check if twitter name available

2) If name available - 



*/

top();

echo "IT IS WORKING";

bottom();






// --------------------------


function top() {
	
	

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Food Trucks Near Me - Premium</title>
    <meta name="description" content="The Dashboard of Local Food Trucks">
	<meta name="viewport" content="user-scalable=no, width=device-width">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="https://html5shim.google.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	
    <!-- Le styles -->
    <link href="https://www.foodtrucksnearme.com/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="https://www.foodtrucksnearme.com//css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://www.foodtrucksnearme.com/img/favicon.ico">


  </head>

  <body>
      <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img src="https://www.foodtrucksnearme.com/img/header/HOME.png"> Food Trucks Near Me - Premium</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/home">Home</a></li>
				</li>
            </ul>

			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  

          
         
         

    <div class="container">';
    }
	
	
	function bottom () {
	echo '  <footer><hr />
      <center>  <p>';
      echo footerText();
      echo '</p></center>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.foodtrucksnearme.com/js/jquery.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-alert.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-modal.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-dropdown.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-scrollspy.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-button.js"></script>
    <script src="https://www.foodtrucksnearme.com/js/bootstrap-collapse.js"></script>
	
  </body>
</html>

';
	}	





?>