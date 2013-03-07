<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_404 extends Custom404 {

	protected $subrequest = 'errors/404';
	
}