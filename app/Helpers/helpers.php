<?php
use Illuminate\Support\Facades\File as LaravelFile;
use App\Models\file;
if (!function_exists('delete_file')) {
	function delete_file($id)
	{
		$file = File::find($id);
		LaravelFile::delete(public_path('file_upload/' . $file->path));
		$file->delete();
	}
}
?>