<?php

namespace app\controllers;

class SiteController
{
	private $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	public function myRoute($request, $response)
	{
		return $this->container->myModule;
	}
}