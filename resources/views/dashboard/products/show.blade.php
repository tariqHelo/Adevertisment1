@extends("dashboard.layouts.app")
@section("title", "Show Product")
@section("content")

    <form  role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input  type="text" disabled class="form-control" id="title" name="title" value="{{$products->title}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" disabled id="description" name="description" >{{$products->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="comment"> Price</label>
                <input  type="text" disabled class="form-control" id="price" name="price" value="{{$products->price}}">            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <br>
                @if($products->image)
                    <img src='{{ asset("storage/".$products->image) }}' width='280' class='img-thumbnail' />
                @endif
            </div>
            <div class="form-group" >
                <select class="form-control  {{$errors->has('category_id')?'is-invalid':''}}"disabled id="exampleFormControlSelect1" name="category_id" id="category_id"  >
                    <option value="">Select The Category..</option>
                    @foreach($categories as $category )
                        <option {{old('category_id')?"selected":""}} value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
               </div>
                    <div class="form-group has-success" name="rating_id" id="rating_id">
                    <label for="form_control_1">subcategory</label>
                    <select name="rating_id" class="form-control" disabled>
                        <option value="0">Select subcategory</option>
                        @if(\App\Models\Rating::get() != null)
                            @foreach(\App\Models\Rating::get() as $rating)
                                <option
                                    {{old('rating_id')== $rating->id?"selected":""}} value='{{$rating->id}}'>{{$rating->title}}</option>
                            @endforeach
                         @endif
                    </select>
                </div>
               <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" disabled  id="address" value="{{old('address')??$products->address}}" name="address" >
                </div>
                 <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control"disabled  id="phone" value="{{old('phone')??$products->phone}}" name="phone" >
                </div>
            <div class="form-group">
                <input  type="checkbox" disabled  id="published" name="published" {{$products->published?'checked' : ''}} >
                <label for="published">Active</label>

            </div>
            <div>

                <a class='btn btn-danger' href='{{ route('products.index') }}'>Back</a>
            </div>
        </div>
    </form>
@endsection
