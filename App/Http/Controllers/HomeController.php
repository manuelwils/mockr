<?php

namespace App\Http\Controllers;

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
		view("index", "main", ["title"=>"Homepage"]);
	}
}