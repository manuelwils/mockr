<?php

namespace Mockr\Http\Controllers;

use Electrify\Core\View;

class HomeController
{

	public static function index()
	{
		/*
		| -------------------------------------------------------------|
		| rendering index.php inside the main.php(optional) layout and |
		| passing array of data(optional) to the index.php webpage     |
		| -------------------------------------------------------------|
		*/
		View::render("index", "main", ["title"=>"Homepage"]);
	}
}