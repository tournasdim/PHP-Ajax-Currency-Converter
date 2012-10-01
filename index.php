<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Curreny Converter</title>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.animate-shadow.min.js"></script>
<script type="text/javascript" src="js/custom.jquery.js"></script>
</head>
<body>
<div id="container">
	<div id="wb_currencyExtension1" >
	<div id="page"  >
   <div class="block-rounded"> <br>Currency Converter<br><br> </div>
   <div   class="block_main rounded">      
		<label for="amount" class="form-fields">Amount:</label><br>
        <input class="form-filelds padding-left" type="text" name="amount" id="amount" value="1" /><br><br>
		<label for="from" class="form-fields ">From:</label><br>
        <select name="from" id="from"><br><br>
		<?php 	require_once 'selectBoxData.php'; selectBox($currencies) ; ?>
        </select>		
		<br><br>
        <label for="to" class="form-fields">To:</label><br>
        <select name="to" id="to"><br><br>
		 <?php selectBox($currencies) ;  ?>	
    <br></select><br><br>
	<input type="button" name="submit" id="submit" value="Convert" /><br><br>
	<label for="to" class="form-fields">Value:</label>
	<div id="converted_value">No results yet </div>
    </div><!-- End of  class="block_main rounded" -->    
	<br>
	</div><!--  End of id="page"  -->  
	</div><!--  End of id="wb_currencyExtension1"  -->   
<div id="wb_currencyText1" >
Currency converter with PHP, Ajax and Google calculator API</div>
</div> <!--   End of id="container"  -->    
</body>
</html>
   