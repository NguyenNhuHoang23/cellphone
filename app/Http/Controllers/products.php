<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product; 
use App\Models\sale;
class products extends Controller
{
    public function type1(){
       $type1 = sale::join('products as s', 's.sale_percent', '=', 'sale.id')
        -> select('s.*', 'sale.*')
        -> where('loai', '1')
        -> get();
        
        $type2 = sale::join('products as s', 's.sale_percent', '=', 'sale.id')
        -> select('s.*', 'sale.*')
        -> where('loai', '2')
        -> get();
        
        return view('product', ['type' => $type1, 'type2' => $type2]);
    }


    public function alias($alias){
        $join =  product::join('sale as s', 'products.sale_percent', '=', 's.id')
        -> select('products.*', 's.*', 'products.name as prod.name')
        -> where('alias', $alias)
        -> first();
        if ($join){
            return view('showalias', ['show' => $join]);
        }else{
            $massege = "Bạn không nhập đúng";
            return view('showalias', ['masse' => $massege]);
        }
    }
}
