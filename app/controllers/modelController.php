<?php

class modelController extends BaseController {

    public function previewColors($arg = NULL) {
		return false;	
	}

	public function uploadNewModel($arg = NULL) {
		$file = Input::file('file');
		$destinationPath = public_path() . '/models/1/';
		$filename = $file->getClientOriginalName();
		$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
		return json_encode($destinationPath . $filename);
	}

}
