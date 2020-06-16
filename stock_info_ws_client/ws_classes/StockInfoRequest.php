<?php

class StockInfoRequest
{

  /**
   * 
   * @var string $symbol
   * @access public
   */
  public $symbol = null;

  /**
   * 
   * @var string $tradingDate
   * @access public
   */
  public $tradingDate = null;

  /**
   * 
   * @param string $symbol
   * @param string $tradingDate
   * @access public
   */
  public function __construct($symbol, $tradingDate)
  {
    $this->symbol = $symbol;
    $this->tradingDate = $tradingDate;
  }

}
