<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(Product $product, Category $category){

        $this->product = $product;
        $this->category = $category;
        }

    public function categories($idProduct){
      
        if(!$product = $this->product->find($idProduct)) {
            return redirect()->back();
        }

        $categories =  $product->categories()->paginate();

        return view('pages.products.categories.categories', [
            'categories' => $categories,
            'product' => $product,
        ]);

    }

    public function products($idCategory){
        $category = $this->category->find($idCategory);

        if(!$category) {
            return redirect()->back();
        }

        $products =  $category->products()->paginate();

        return view('pages.categories.products.products', [
            'category' => $category,
            'products' => $products,
        ]);

    }
    public function categoriesAvailable(Request $request, $idProduct){

        if(!$product = $this->product->find($idProduct)) {
            return redirect()->back();
        }

        $filters =$request->except('_token');
       

        $categories =  $product->categoriesAvailable($request->filter);

        return view('pages.products.categories.available', [
            'categories' => $categories,
            'product' => $product,
            'filters' => $filters,
        ]);

    }

    public function attachCategoriesProduct(Request $request, $idProduct){

        if(!$product = $this->product->find($idProduct)) {
            return redirect()->back();
        }

        if(!$request->categories || count($request->categories) == 0){
            return redirect()
                    ->back()
                    ->with('info', 'Você precisa escolher pelo menos uma permissão');
        }

        $product->categories()->attach($request->categories);

        return redirect()->route('products.categories', $product->id);

    }

    public function filterCategorysAvailable(){

    }


    public function detachCategorysProduct($idProduct, $idCategory){
        

        $product = $this->product->find($idProduct);
        $category = $this->category->find($idCategory);
        if(!$product || !$category) {
            return redirect()
                    ->back()
                    ->with('info', 'Permissão ou perfil não encontrado');
        }

        $product->categories()->detach ($category);

        return redirect()->route('products.categories', $product->id);

    }
}
