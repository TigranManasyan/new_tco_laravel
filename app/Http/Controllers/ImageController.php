<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request) {
        $request->validate([
            'image' => 'required|file|mimes:jpg,jpeg,png,gif,svg'
        ]);
        $image_name = 'image_' . time() . '.' . $request->image->extension();
        $uploaded = $request->image->move(public_path('images'), $image_name);
        if($uploaded) {
            $image = new Image();
            $image->image_path = 'images/' . $image_name;
            $image->created_at = NOW();
            $image->updated_at = NOW();
            $image->save();
            return redirect()->back()->with('success', 'Image successfully uploaded');
        }
    }
}
