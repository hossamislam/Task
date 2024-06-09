<?php


namespace App\Helper;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Upload
{
    public static  function uploadPdf($pdf, $path)
    {
        $name = time() . '_' . rand(0, 10000) . '.' . $pdf->getClientOriginalExtension();
        Storage::disk('public')->put($path . '/' . $name, File::get($pdf));
        return  '/storage/' . $path . '/' . $name;
    }

    public static function uploadImage($image, $path)
    {
        $name = time() . '_' . rand(0, 10000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($path . '/' . $name, File::get($image));
        return  '/storage/' . $path . '/' . $name;

    }
    public static function StoreUrlImage($url ,$path)
    {
        return ;
        $name = time() . '_' . rand(0, 10000) .'jpg';
        $contents = file_get_contents($url);
        Storage::disk('public')->put($path . '/' . $name, $contents);
        return  '/storage/' . $path . '/' . $name;
    }
    public static function uploadImages($images, $path)
    {
        $imagesName = [];
        foreach ($images as $image) {
            $imagesName[] = self::uploadImage($image , $path);
        }
        return $imagesName;
    }
    public static function deleteImage($path)
    {
        if(file_exists(substr($path, 1))){
            unlink(public_path($path));
        }
    }
    public static function deleteImages($paths = [])
    {
        foreach ($paths as $path) {
            self::deleteImage($path);
        }
    }


}
