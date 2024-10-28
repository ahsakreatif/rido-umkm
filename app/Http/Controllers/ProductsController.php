<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductsController extends Controller {
    public function __invoke(){
        $products = Product::all();
        return view("products", compact('products'));
    }
}

?>
