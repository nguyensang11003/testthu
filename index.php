
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>ATN COMPANY - Main Menu</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

 </head>
  <body>
  <!--You need to type in the structure of a single page hybrid apps-->
  <!--by using attribute data-role, value "page" in jQuery-->
  	<div data-role="page" id="home">
  		<div data-role="header">
  			<h1>ATN COMPANY</h1>
      </div><!-- /header -->
    	<div data-role="main" class="ui-content">
        <a id="btnProduct" href="product.html" class="ui-btn">Product</a>
        <a id="btnCustomer" href="customer.html" class="ui-btn">Customer</a>
        <a id="btnInvoice"href="invoice.html" class="ui-btn">Invoice</a>
  		<div data-role="footer" data-position="fixed">
			</div>
		</div><!-- /footer -->
	 </div><!-- /page -->
  </body>
</html>
