@extends("dashboard.layouts.app")

@section("title","Edit Product")


@section("content")

    <div class="portlet light ">
        <div class="portlet-body form">
            <form method="post" enctype="multipart/form-data" action="{{url('/admin/products/'.$product->id)}}"
                  role="form">
                @csrf
                @method("PUT")

                <div class="form-body">
                    <div class="form-group has-success"><label for="form_control_1">Title</label>
                        <input type="text" class="form-control" id="form_control_1" name="title"
                               value="{{old('title')??$product->title}}" placeholder="Enter your Title">

                    </div>
                </div>
                <div class="form-group has-success">
                    <label for="form_control_1">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="0">Select Category</option>
                        @foreach($categories as $category)
                            <option
                                {{old('category_id')== $category->id?"selected":""}} value='{{$category->id}}'>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                    </div>
                    <div class="form-group has-success" name="rating_id" id="rating_id">
                    <label for="form_control_1">subcategory</label>
                    <select name="rating_id" class="form-control">
                        <option value="0">Select subcategory</option>
                        @if(\App\Models\Rating::get() != null)
                            @foreach(\App\Models\Rating::get() as $rating)
                                <option
                                    {{old('rating_id')== $rating->id?"selected":""}} value='{{$rating->id}}'>{{$rating->title}}</option>
                            @endforeach
                         @endif
                    </select>
                </div>

                  <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
                    <div>
                        <img src="{{asset("storage/".$product->image)}}" width='240' class='img-thumbnail'>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="price">new price</label>
                    <input   type="number" class="form-control" value="{{old('price')??$product->price}}" id="price" name="price">
                </div>
                {{-- <div class="form-group ">
                    <label for="model">Model</label>
                    <input   type="text" class="form-control" value="{{old('model')??$product->model}}" id="model" name="model">
                </div> --}}

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control"  id="description" value="{{old('description')??$product->description}}" name="description" >{{old('description')??$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  id="address" value="{{old('address')??$product->address}}" name="address" >
                </div>
                 <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control"  id="phone" value="{{old('phone')??$product->phone}}" name="phone" >
                </div>
               <div class="md-checkbox-inline">
                    <div class="md-checkbox">
                        <input type="checkbox" id="checkbox6" class="md-check" name="published" value="1" {{ (old('published')?? $product->published)?"checked":"" }}>
                        <label for="checkbox6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Published </label>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class='btn btn-default' href='{{ route("products.index") }}'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
