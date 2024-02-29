<?php

namespace Zero\Mypackagist;

class MyPackagist
{
	public static function show(string $message): void
	{
		echo 'This is your message: ' . $message
	}

	public static function user(string $name): void
	{
		echo 'His name is: ' . $name;
	}
}
