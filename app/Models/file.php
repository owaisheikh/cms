<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as LaravelFile;


class file extends Model
{
    use HasFactory;

	protected $guarded = ['id'];
	protected $appends = ['url'];

	//Remove old Image
	public function removeImage($model, $old_dps)
	{
		if (count($old_dps) > 0) {
			foreach ($old_dps as $old_dp) {
				$model->files()->detach($old_dp->id);
				delete_file($old_dp->id);
                // $file = File::find($old_dp->id);
                // LaravelFile::delete(public_path('file_upload/' . $file->path));
                // $file->delete();
			}
		}
	}
	
	//Add New Image
	public function createImage($request, $type)
	{
		$ext = strtolower($request->image->extension());
		$name = explode('.', $request->image->getClientOriginalName())[0];
		$imageName = strtolower(Str::random(16)) . '.' . $request->image->extension();  
		$request->image->move(public_path('file_upload'), $imageName);
		
		$file = File::create([
			'name' => $name,
			'path' => $imageName,
			'extension' => $ext,
			'type' => $type,
			'status' => 1
		]);
		return $file;
	}
	
	//Relations
	// public function users()
	// {
	// 	return $this->morphedByMany(User::class, 'fileable');
	// }
	
	public function getUrlAttribute()
	{
		return url('/').'/public/file_upload/'.$this->path;
	}
}
