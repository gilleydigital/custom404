<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Errors extends Controller {

	public function action_404()
	{
		$this->response->body('Page not found');
	}

}