<?php

namespace app\controllers;

class BaseController
{
  protected $container;
  
  public function __construct($container)
  {
    $this->container = $container;
  }
}