<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Productimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $brands = Brand::get();
        $categories = Category::get();
        return Inertia::render('Admin/Product/Index',[
        'products' => $products,
        'brands' => $brands,
        'categories' => $categories
     ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        //check if product has image upload
        if($request->hasFile('product_image'))
        {
            $productImages = $request->file('product_images');
            foreach($productImages as $image)
            {
                //Generate unique id for product image
                $uniqueName = time() . '-' . Str::random(10) . '-' . $image->getClientOriginalExtension();
                //store image in public storage folder
                $image->move('product_images', $uniqueName);
                //create a new product image record with the product_id and unique_name
                Productimage::create([
                    'product_id' => $product->id,
                    'image'=> 'product_images/'. $uniqueName
                ]);


            }
        }

    }
}
    