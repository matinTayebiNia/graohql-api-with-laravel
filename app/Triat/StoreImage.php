<?php


namespace App\Triat;


use Illuminate\Support\Str;

trait StoreImage
{
    private function storeImg($image)
    {
        $file = $image;
        $path = '/img/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $name = Str::random();
        $file->move(public_path($path), $name . '.' . $file->getClientOriginalExtension());
        return $path . $name . '.' . $file->getClientOriginalExtension();
    }
}
