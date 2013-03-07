<?php defined('SYSPATH') or die('No direct script access.');

class Custom404 extends Kohana_HTTP_Exception_404 {
 
	public function get_response()
	{
		$request = Request::factory($this->subrequest);
		$response = $request->execute();
		
		$response->status(404);
		
		return $response;
	}
}