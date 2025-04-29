<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('frontend.profile',compact('user'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        $user = Auth::user();
    
        // اگر کاربر قبلاً تصویری داشت، حذف آن
        if ($user->profile_image) {
            // مسیر تصویر قبلی را از دیتابیس بگیریم
            $oldImagePath = storage_path('app/public/' . $user->profile_image);
    
            // چک کردن و حذف تصویر قبلی از دایرکتوری
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // حذف فایل
            }
        }
    
        // ذخیره تصویر جدید
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');
    
        // ذخیره مسیر تصویر جدید در دیتابیس
        $user->profile_image = $imagePath;
        $user->save();
    
        return response()->json(['success' => true]);
    }
    
    
    


}
