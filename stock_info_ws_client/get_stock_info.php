<?php
//include the files generated by wsdl2phpgenerator tool
require_once 'ws_classes/CEO.php';
require_once 'ws_classes/Stock.php';
require_once 'ws_classes/StockInfoRequest.php';
require_once 'ws_classes/YearlyFinancial.php';
require_once 'ws_classes/GetStockService.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Stock Info SOAP Client</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
	<style>
		body{
			font-family: 'Roboto', sans-serif;
		}
	</style>
  </head>
  <body>
    <h2>Stock Info SOAP Client</h2>
    
    <form action="/stock_info_ws_client/get_stock_info.php">
 	 Enter Stock Symbol:
 	 <input type="text" name="symbol" >
	 Enter Trading Date:
	 <input type="text" name="tradingDate" >
 	 <input type="submit" value="GET STOCK INFO">
    </form>
    <BR>
<?php
//Make sure user entered value
if (!empty($_GET["symbol"])) {

  //Create service object
  $service = new GetStockService();

  //Create request object
  $request = new StockInfoRequest($_GET["symbol"], $_GET["tradingDate"]);

  //Call Web Service and get response
  $stock = $service->getStock($request);
  
  //Get CEO nested object from Stock
  $ceo = $stock->ceo;
  
  //Get the array of YearlyFinancial from Stock
  $lastThreeYearFinancial = $stock->lastThreeYearFinancial;
  

  echo '<h3>Daily Price : </h3>';
  echo 'Stock ID =' . $stock->stockId . '<BR>';
  echo 'Stock Symbol =' . $stock->symbol . '<BR>';
  echo 'Open =' . $stock->open . '<BR>';
  echo 'High =' . $stock->high . '<BR>';
  echo 'Low =' . $stock->low . '<BR>';
  echo 'Close =' . $stock->close . '<BR>';
  
  echo '<h3>About CEO : </h3>';
  echo 'CEO ID =' . $ceo->ceoId . '<BR>';
  echo 'CEO Name =' . $ceo->name . '<BR>';
  echo 'CEO Salary =' . $ceo->salary . '<BR>';
  echo 'CEO Age =' . $ceo->age . '<BR>';
  
  echo '<h3>Last Three Year Financials : </h3>';
  echo '<ul>';
  
  foreach($lastThreeYearFinancial as $yearlyFinancial) {
	  echo '<li>';
	  echo 'Year : ' . $yearlyFinancial->year;
	  
	  echo '<ul>';
		echo '<li>Gross Revenue : ' . $yearlyFinancial->grossRevenue .'</li>';
		echo '<li>Net Revenue : ' . $yearlyFinancial->netRevenue .'</li>';
	  echo '</ul>';
	  
	  echo '</li>';
  }
  
  echo '</ul>';
  

}

?>
  </body>
</html>