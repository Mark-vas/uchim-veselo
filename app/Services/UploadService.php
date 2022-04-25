<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Lesson;
use App\Models\Slider;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadService
{
	/**
	 * @param UploadedFile $file
	 * @return string
	 * @throws \Exception
	 */
   public function start(UploadedFile $file): string
   {
	   $completedFile = $file->storeAs('img',$file->hashName());
//dd($file,$completedFile);
       if(!$completedFile) {
		   throw new \Exception("Файл не был загружен");
	   }

	   return $completedFile;
   }

   public function start_slider_img(UploadedFile $file,$lesson_id): string
   {
        $last_slider_id = Slider::latest()->first()->id;
        $last_slider_id=(int)$last_slider_id+1;
        $newName= explode('.',(string)$file->getClientOriginalName());
        $newName=end($newName);
        $newName=   $lesson_id.'_'.$last_slider_id.'.'.$newName;

        $completedFile = $file->storeAs('slider/slider_img',$newName);

       if(!$completedFile) {
		   throw new \Exception("Файл не был загружен");
	   }

	   return $completedFile;
   }

   public function start_music(UploadedFile $file,$lesson_id): string
   {
        $last_slider_id = Slider::latest()->first()->id;
        $last_slider_id=(int)$last_slider_id+1;
        $newName= explode('.',(string)$file->getClientOriginalName());
        $newName=end($newName);
        $newName=   $lesson_id.'_'.$last_slider_id.'.'.$newName;

	   $completedFile = $file->storeAs('slider/music',$newName);

       if(!$completedFile) {
		   throw new \Exception("Файл не был загружен");
	   }

	   return $completedFile;
   }
}
