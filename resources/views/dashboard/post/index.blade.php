@extends("dashboard.layouts.app")
@section("title", "Manage Posts")


@section("content")

<form class="row mb-3">
    <div class="col-sm-4">
        <input autofocus value="{{ request()->get("q") }}" type="text" class="form-control"
                    placeholder="Enter Your Search" name="q"  />
    </div>

    <div class="col-sm-2">
        <select name="published" class="form-control">
        <option value='' > Anystatus</option>
        <option {{ request()->get("published")?"selected":""}} value='1' >active</option>
        <option {{ request()->get("published") == '0'?"selected":""}} value='0'>Inactive</option>
        </select>
    </div>

    <div class="col-sm-4">
        <button class='btn btn-primary'><i class='fa fa-search'></i> Search</button>
        <a href="{{ route("post.create") }}" class='btn btn-success'><i class='fa fa-plus'></i>Create post</a>
    </div>
</form>

<div class="table-scrollable">

@if($posts->count()>0)

    <table align="center" class="table table-striped mt-3 table-bordered table-hover">
        <thead>
            <tr>
                <th>userID</th>
                <th>title</th>
                <th>Image</th>
                <th>description</th>
                <th>Published</th>
                <th width="20%"></th>
            </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
        <tr>
            <td>{{ $post->user_id}}</td>

            <td><a href="{{ route("post.show", $post->id) }}">{{ $post->title }}</a></td>

            <td><img width="100" src='{{ asset("storage/".$post->image)}}' ></td>


            <td>{{$post->description}}</td>

            <td><input type="checkbox" disabled {{$post->published?"checked":"" }}/></td>

            <td width="20%">
               <form method="post" action="{{ route('post.destroy', $post->id) }}">

                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm"><i
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
{{ $posts->links() }}

@else

    <div class="alert alert-warning"> Sorry there is no result to your search </div>

@endif


@endsection


