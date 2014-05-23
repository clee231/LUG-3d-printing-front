<?php

class DevController extends BaseController {

    public function showIndex($arg = NULL) {
	
	switch ($arg) {
		case "dbname":
			return $this->showDbName();	
		default:
			return Response::json(array('error' => true, 'message' => 'No entry used or invalid request'));
	}
		return Response::json(array('error' => true, 'message' => 'No entry used or invalid request'));
	}

	public function showDbName()
    {
		if(DB::connection()->getDatabaseName())
		{
		   return Response::json(array('error' => false, 'dbname' => DB::connection()->getDatabaseName()));
		}
    }

}
