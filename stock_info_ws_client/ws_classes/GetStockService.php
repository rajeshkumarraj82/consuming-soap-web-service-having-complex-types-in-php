<?php

include_once('CEO.php');
include_once('YearlyFinancial.php');
include_once('Stock.php');
include_once('StockInfoRequest.php');


/**
 * 
 */
class GetStockService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'CEO' => '\CEO',
    'YearlyFinancial' => '\YearlyFinancial',
    'Stock' => '\Stock',
    'StockInfoRequest' => '\StockInfoRequest');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'https://thedeveloperfriend.com/stock_soap_ws/GetStockService.php?wsdl')
  {
    foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param StockInfoRequest $symbol
   * @access public
   * @return Stock
   */
  public function getStock(StockInfoRequest $symbol)
  {
    return $this->__soapCall('getStock', array($symbol));
  }

}
