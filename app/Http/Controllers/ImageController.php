<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller {
    
    public function compressImage(Request $request) {
        
        $this->validate($request, [
            'image' => 'required|images|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        $image = $request->file['image'];
        $image_name = time().'.'.$image->getClientOriginalExtension();
    }
}