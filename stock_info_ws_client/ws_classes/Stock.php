<?php

class Stock
{

  /**
   * 
   * @var int $stockId
   * @access public
   */
  public $stockId = null;

  /**
   * 
   * @var string $symbol
   * @access public
   */
  public $symbol = null;

  /**
   * 
   * @var float $open
   * @access public
   */
  public $open = null;

  /**
   * 
   * @var float $high
   * @access public
   */
  public $high = null;

  /**
   * 
   * @var float $low
   * @access public
   */
  public $low = null;

  /**
   * 
   * @var float $close
   * @access public
   */
  public $close = null;

  /**
   * 
   * @var CEO $ceo
   * @access public
   */
  public $ceo = null;

  /**
   * 
   * @var YearlyFinancial[] $lastThreeYearFinancial
   * @access public
   */
  public $lastThreeYearFinancial = null;

  /**
   * 
   * @param int $stockId
   * @param string $symbol
   * @param float $open
   * @param float $high
   * @param float $low
   * @param float $close
   * @param CEO $ceo
   * @param YearlyFinancial[] $lastThreeYearFinancial
   * @access public
   */
  public function __construct($stockId, $symbol, $open, $high, $low, $close, $ceo, $lastThreeYearFinancial)
  {
    $this->stockId = $stockId;
    $this->symbol = $symbol;
    $this->open = $open;
    $this->high = $high;
    $this->low = $low;
    $this->close = $close;
    $this->ceo = $ceo;
    $this->lastThreeYearFinancial = $lastThreeYearFinancial;
  }

}
