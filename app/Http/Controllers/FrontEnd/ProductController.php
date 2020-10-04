<?php


namespace App\Http\Controllers\FrontEnd;


use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(CreateRequest $request)
    {
//        dd($request->all());
        $request['published'] = $request['published'] ? 1 : 0;
        $imageName = basename($request->imageFile->store("public"));
        $request['image'] = $imageName;
        $request['user_id'] = auth()->id();
        Product::create($request->all());
        session()->flash('msg', "s: product create successfully");
        return redirect('/');
    }
}
