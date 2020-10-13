<?php

namespace App\Http\Controllers\Admin;
use App\Models\Rating;


use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;


use App\Http\Requests\Product\EditRequest;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\CreateProductRequest;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::orderBy('id');

        $this->search = [
            'name' =>\request()->get('name') ,
            'category' => \request()->get('category') ,
            'published' => \request()->get('published')
        ];

//        $category_id = Category::where('title' , 'like' , "%{$search['category']}%")->first('id')->id ?? "";
//        $brand_id = Category::where('title' , 'like' , "%{$search['brand']}%")->first('id')->id ?? "";

        if ($this->search['name']){
            $products->where('title' , 'like' , "%{$this->search['name']}%");
        }
        if ($this->search['category']){
            /*$products->whereHas('category' ,function ($query ){
                $query->where('title' , 'like' , "%{$this->search['category']}%");
            });*/
            $products->where('category_id' , $this->search['category']);
        }

        if ($this->search['published'] != null){
            $products->where('published' , $this->search['published']);
        }
        $categories = Category::get();
        
        $products = $products->paginate(9)->appends($this->search);
//        dd($products);
        return view('dashboard.products.index')
        ->with('products', $products)
        ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('dashboard.products.create')->with('categories', $categories);

    }

    public function store(CreateRequest $request)
    {
 //      dd($request->all());
        $request['published'] = $request['published'] ? 1 : 0;
        $imageName = basename($request->imageFile->store("public"));
        $request['image'] = $imageName;
        $request['user_id'] = auth()->id();
        Product::create($request->all());
        session()->flash('msg', "s: product create successfully");
        return redirect(route('products.index'));
    }
    public function show($id)
    {

        $products = Product::find($id);
        $categories = Category::get();
        if($products == null) {
            session()->flash('msg', 'w: this product not exist');
            return redirect(route('products.index'));
        }else{

            return view('dashboard.products.show')->with("products", $products)->with("categories", $categories);
        }
    }

    public function edit($id)
    {

        $product = Product::find($id);
        $categories = Category::all();
        $ratings = Rating::all();
        if($product==null){
            session()->flash("msg", "The Product was not found");
            return redirect(route("product.index"));
        }
        return view("dashboard.products.edit")
        ->withProduct($product)
        ->withCategories($categories)
        ->withRating($ratings);
    }

    public function update(EditRequest $request,  $id)
    {
//        dd("hellp");
        if (!$request->active) {
            $request['active'] = 0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }
        Product::find($id)->update($request->all());
        session()->flash("msg", "The Product was updated");
        return redirect(route("products.index"));
    }

    public function destroy($product)
    {
        Product::destroy($product);
        session()->flash("msg", "w:The Product Deleted");
        return redirect(route('products.index'));
    }
}
