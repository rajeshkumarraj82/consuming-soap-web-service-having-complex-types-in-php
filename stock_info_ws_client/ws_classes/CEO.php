<?php

class CEO
{

  /**
   * 
   * @var int $ceoId
   * @access public
   */
  public $ceoId = null;

  /**
   * 
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var float $salary
   * @access public
   */
  public $salary = null;

  /**
   * 
   * @var int $age
   * @access public
   */
  public $age = null;

  /**
   * 
   * @param int $ceoId
   * @param string $name
   * @param float $salary
   * @param int $age
   * @access public
   */
  public function __construct($ceoId, $name, $salary, $age)
  {
    $this->ceoId = $ceoId;
    $this->name = $name;
    $this->salary = $salary;
    $this->age = $age;
  }

}
