<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cellphone;
use App\Models\product_attributes;
use App\Models\cart;
use App\Models\user_cellphone;
class IphoneController extends Controller
{
    //
    public function view(){
        return view('cellphone');
    }

    public function insert(){
        return view('insertcellphone');
    }
    public function store(Request $request)
    {
        $cellphone = new cellphone;
        $cellphone->image = $request->input('image');
        $cellphone->name = $request->input('name');
        $cellphone->original_price = $request->input('original_price');
        $cellphone->discount_price = $request->input('discount_price');
        $cellphone->sticky = $request->input('sticky');
        $cellphone->type_name = $request->input('type_name');
        $cellphone->sale = $request->input('sale');
        $cellphone->special_offer = $request->input('special_offer');
        $cellphone->save();
        // Chuyển hướng sau khi lưu thành công

        $color = [
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'image_color' => $request->input('image_color'),
            'gb' => $request->input('gb'),
            'ram' => $request->input('ram')
        ];
        $color1 = [
            'color' => $request->input('color1'),
            'size' => $request->input('size1'),
            'image_color' => $request->input('image_color1'),
            'gb' => $request->input('gb1'),
            'ram' => $request->input('ram1')
        ];
        $color2 = [
            'color' => $request->input('color2'),
            'size' => $request->input('size2'),
            'image_color' => $request->input('image_color2'),
            'gb' => $request->input('gb2'),
            'ram' => $request->input('ram2')
        ];

        $data = [
            $request->input('color') => $color,
            $request->input('color1') => $color1,
            $request->input('color2') => $color2
        ];

       $typeJson = json_encode($data);

        $product_attributes = new product_attributes;
        $product_attributes->product_id = $cellphone->id;
        $product_attributes->type = $typeJson;
        $product_attributes->save();

        return redirect('/insertcellphone');
    }
    public function type(){
        $typeiphone =cellphone::where('type_name', 'dien-thoai')
        ->get();
        $typelaptop = cellphone::where('type_name', 'may-tinh')
        ->get();
        $typeipad = cellphone::where('type_name', 'lap-top')
        ->get();
        $typesale = cellphone::where('type_name', 'sa-le')
        ->get();
        $specialOffer = cellphone::where('special_offer', 1)
        ->get();
        return view('cellphone', ['typeiphone' => $typeiphone, 'typelaptop' => $typelaptop, 'typeipad' => $typeipad, 'typesale' => $typesale, 'specialOffer'=>$specialOffer]);
}

    public function detailsProduct($id)
        {
              // Truy vấn thông tin sản phẩm từ bảng 'cellphone'
    $cellphone = cellphone::find($id);
    // Truy vấn thông tin sản phẩm từ bảng 'product_attributes' dựa trên 'product_id'

    $productAttributes = product_attributes::where('product_id', $id)->first();
    $attributes = json_decode($productAttributes->type, true);

    return view('details', ['details' => $cellphone, 'attributes' => $attributes]);
    }


    public function pay()
    {
        $cartItems = cart::getContent();
        return view('cart', ['cartItems' => $cartItems]);
    }

        // public function cartCellphone(Request $request){




        //     $user = new user_cellphone;
        //     $user->name = $request->input('user-name');
        //     $user->telephone = $request->input('telephone');
        //     $user->address = $request->input('address');
        //     $user->email = $request->input('email');
        //     $user->save();

        //     $cellphone = new cellphone;

        //     $cart = new cart;
        //     $cart->product_id = $cellphone->id;
        //     $cart->user_id = $user->id;
        //     $cart->quantity = $request->input('quantity');
        //     $cart->price = $request->input('price');
        //     $cart->save();

        //     return redirect('/cart');
        // }


    //     public function showCart($id)
    //     {
    //           // Truy vấn thông tin sản phẩm từ bảng 'cellphone'
    //     $showCart = cellphone::find($id);
    //     return view('cart', ['showCart' => $showCart]);
    // }

}
