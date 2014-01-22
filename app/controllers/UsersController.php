<?php

class UsersController extends BaseController {

	//testing controller

	public function getIndex()
	{
		return View::make("users");
	}

}