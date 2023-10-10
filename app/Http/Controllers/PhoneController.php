<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\phone;
use App\Models\colors;

class PhoneController extends Controller
{
    //
    public function show($id)
{
    $phone = Phone::findOrFail($id);
    $colors = $phone->color;
    return view('phone', compact('phone', 'color'));
}

public function changeColor($phoneId, $colorsId)
{
    try {
        // Tìm sản phẩm điện thoại dựa trên $phoneId
        $phone = phone::findOrFail($phoneId);

        // Tìm màu sắc dựa trên $colorId
        $color = colors::findOrFail($colorsId);

        // Tạo đường dẫn ảnh mới bằng cách kết hợp đường dẫn ảnh gốc của sản phẩm và màu sắc
        $newImageUrl = $phone->image_url . '?color=' . $color->name;

        // Trả về đường dẫn ảnh mới dưới dạng JSON
        return response()->json(['image_url' => $newImageUrl]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Đã xảy ra lỗi khi thay đổi màu sắc.'], 500);
    }
}
}
