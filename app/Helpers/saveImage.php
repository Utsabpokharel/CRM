<?php

use App\Classes\ImageHelper;
use Symfony\Component\HttpFoundation\File\UploadedFile;


if(!function_exists('save_image'))
{
	function save_image(UploadedFile $file,$width=null,$height=null,$path,Closure $callback = null)
	{

		return (new ImageHelper)->uploadImage($file,$width,$height,$path);
	}
}