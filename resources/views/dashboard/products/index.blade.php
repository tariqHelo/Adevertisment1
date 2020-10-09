@extends("dashboard.layouts.app")
@section("title", "Manage Products")
@section("content")
    {{--{{dd($products)}}--}}
    <form class='row'>
        <div class='col-sm-2'>
            <input type='text' class="form-control" placeholder="enter product name" name="name"/></div>

        <div class='col-sm-2'>
            <select name="category" class="form-control">
                <option value="">Any Category</option>
                @foreach($categories as $category)
                    <option
                        {{request()->get('category')== $category->id?"selected":""}} value='{{$category->id}}'>{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div class='col-sm-2'>
            <select name='published' class='form-control'>
                <option value=''>Any status</option>
                <option {{request()->get("published")?"selected":""}} value='1'>Active</option>
                <option {{request()->get("published")=='0'?"selected":""}} value='0'>InActive</option>
            </select></div>
        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>
        </div>
        <div class="col-2">

            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </form>
<br/>
    @if($products->count()>0)
        <table align="center" class="table mt-6 table-striped table-bordered">
            <thead>
            <tr class="success">
                <th>title</th>
                <th>category</th>
                <th>image</th>
                <th> description</th>
                <th>price</th>
                <th> address</th>
                <th>published</th>
                <th>Edit / Delete</th>

            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr>
                    <td><a href="{{ route('products.show' , $product->id) }}">{{ $product->title }}</a></td>
                    <td>{{ $product->category->title?? "other category" }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Popup
                            image
                        </button>

                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{asset("storage/".$product->image)}}" class="img-responsive"
                                             alt="No Image Found" width="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->address }}</td>
                    <td>
                        <input type="checkbox" disabled {{ $product->published == 1 ?"checked" : "" }}>
                    </td>
                    <td width="20%">
                        <form method="post" action="{{ route('products.destroy', $product->id) }}">

                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i
                                    class='fa fa-edit'></i></a>
                            <button onclick='return confirm("Are you sure??")' type="submit"
                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>
                            @csrf
                            @method("DELETE")
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{ $products->links("pagination::bootstrap-4") }}

    @else
        <div class='alert alert-warning'>Sorry, there is no results to your search</div>

    @endif
@endsection
