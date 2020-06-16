<?php

class YearlyFinancial
{

  /**
   * 
   * @var int $year
   * @access public
   */
  public $year = null;

  /**
   * 
   * @var float $grossRevenue
   * @access public
   */
  public $grossRevenue = null;

  /**
   * 
   * @var float $netRevenue
   * @access public
   */
  public $netRevenue = null;

  /**
   * 
   * @param int $year
   * @param float $grossRevenue
   * @param float $netRevenue
   * @access public
   */
  public function __construct($year, $grossRevenue, $netRevenue)
  {
    $this->year = $year;
    $this->grossRevenue = $grossRevenue;
    $this->netRevenue = $netRevenue;
  }

}
