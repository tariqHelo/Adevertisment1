@extends("dashboard.layouts.app")

@section("title","Create New Product")

s
@section("content")

    <div class="portlet light ">
        <div class="portlet-body form">
            <form method="post" enctype="multipart/form-data" action="{{ route('post-product') }}" role="form">
                @csrf
                <div class="form-body">
                    <div class="form-group has-success"><label for="form_control_1">Title</label>
                        <input type="text" class="form-control" id="form_control_1" name="title"
                               value="{{old('title')}}" placeholder="Enter your Title">

                    </div>
                </div>
                <div class="form-group has-success" name="category_id" id="category_id">
                    <label for="form_control_1">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="0">Select Category</option>
                        @foreach($categories as $category)
                            <option
                                {{old('category_id')== $category->id?"selected":""}} value='{{$category->id}}'>{{$category->title}}</option>
                        @endforeach
                    </select>
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


                <div class="form-group row">
                    <div class='col-sm-6'>
                        <label for="imageFile">Image</label>
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label for="price">price</label>
                    <input type="number" class="form-control" value="{{old('price')}}" id="price" name="price">
                </div>
             
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" value="{{old('description')}}"
                              name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="{{old('address')}}" name="address">
                </div>
                <div class="form-check">
                    <input type="checkbox" name='published' value="1" class="form-check-input" id="published">
                    <label class="form-check-label" for='published'>published</label>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class='btn btn-default' href='{{ route("products.index") }}'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
