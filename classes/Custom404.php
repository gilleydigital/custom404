<?php defined('SYSPATH') or die('No direct script access.');

class Custom404 extends Kohana_HTTP_Exception_404 {
	
	protected $subrequest = 'errors/404';

}