<?php

class Request
{
	public static function uri()
	{
		// trim will remove the '/', parse_url process the server requested
		// uri, and since PHP_URL_PATH is passed, it only returns the
		// uri and not anything passed along with the request, for example
		// if it were a GET search request, that would be not be passed
		// REQUEST_URI returns the uri
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}