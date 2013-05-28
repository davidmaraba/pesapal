<?php

function headers()
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
        padding-bottom: 30px;
      }
    </style>
    <link href="../../docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.amount.value == "" )
   {
     alert( "Please provide the amount!" );
     document.myForm.amount.focus() ;
     return false;
   }
   if( isNaN(document.myForm.amount.value))
   {
     alert( "The amount must be in numeric!" );
     document.myForm.amount.focus() ;
     return false;
   }
   if( document.myForm.description.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.description.focus() ;
     return false;
   }
   if( document.myForm.reference.value == "" ||
           isNaN( document.myForm.reference.value ) ||
           document.myForm.reference.value.length != 5 )
   {
     alert( "Please provide a zip in the format #####." );
     document.myForm.reference.focus() ;
     return false;
   }
   if( document.myForm.first_name.value == "-1" )
   {
     alert( "Please provide your country!" );
     return false;
   }
   return( true );
}
//-->
</script>
    
  
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand">Yellow Fiber Networks Bill Payment</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              
             
            </ul>
            <ul class="nav pull-right">
              <li><a ></a></li>
              <li><a ></a></li>
              <li><a >For Support +254</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <?php
}
function footer()
{
?>
   
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
          <h3><font color="blue">Yellow Fiber Bill Payment</font></h3>
          <form action="pesapal-iframe.php" method="post"  name="myForm" onsubmit="return(validate());"  >
	<table>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="amount" value="5000" />
			(in Kshs)
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
			(leave as default - MERCHANT)
			</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="Order Description" /></td>
		</tr>
		<tr>
			<td>Reference:</td>
			<td><input type="text" name="reference" value="001" />
			(the Order ID )
			</td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="first_name" value="John" /></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input type="text" name="last_name" value="Doe" /></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><input type="text" name="email" value="john@yahoo.com" /></td>
		</tr>
		<tr>
                   <td colspan="2"> <button class="btn btn-large btn-primary" type="submit">Make Payment</button></td>
			<!--<td colspan="2"><input type="submit" value="Make Payment" /></td>-->
		</tr>
	</table>
</form>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap-transition.js"></script>
    <script src="public/js/bootstrap-alert.js"></script>
    <script src="public/js/bootstrap-modal.js"></script>
    <script src="public/js/bootstrap-dropdown.js"></script>
    <script src="public/js/bootstrap-scrollspy.js"></script>
    <script src="public/js/bootstrap-tab.js"></script>
    <script src="public/js/bootstrap-tooltip.js"></script>
    <script src="public/js/bootstrap-popover.js"></script>
    <script src="public/js/bootstrap-button.js"></script>
    <script src="public/js/bootstrap-collapse.js"></script>
    <script src="public/js/bootstrap-carousel.js"></script>
    <script src="public/js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php
}

?>