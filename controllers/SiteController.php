<?php

namespace app\controllers;

class SiteController extends BaseController
{
	public function myRoute($request, $response)
	{
		return $this->container->myModule;
	}
}