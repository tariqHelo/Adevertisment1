@extends("dashboard.layouts.app")

@section("title","Create New Comment")


@section("content")


    <form method="post" enctype="multipart/form-data" action="{{ route('post.store') }}" role="form">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">name</label>
                <input  type="text"  class="form-control" id="name" name="title" placeholder="Enter comment Name">
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <input  type="text"  class="form-control" id="description" name="description" placeholder="Enter description">
            </div>
            <div class="form-group">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
            </div>
            <div class="form-group">
                <input  type="checkbox"   id="published" name="published" >
                <label for="published">published</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class='btn btn-danger' href='{{route('post.index')}}'>Cancel</a>
            </div>
        </div>
    </form>
@endsection
