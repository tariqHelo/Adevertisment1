@extends("dashboard.layouts.app")

@section("title","Edit New Post")


@section("content")


    <form method="post" enctype="multipart/form-data" action="{{ route('post.update' , $post->id) }}" role="form">
           @method('PATCH')
                @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">title</label>
                <input  type="text"  class="form-control" value='{{old('name')??$post->title}}' id="title" name="title" placeholder="Enter comment Name">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input  type="text"  class="form-control"value='{{old('description')??$post->description}}' id="description" name="description" placeholder="Enter description">
            </div>
              <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
                    <div>
                        <img src="{{asset("storage/".$post->image)}}" width='240' class='img-thumbnail'>
                    </div>
                </div>
              <div class="md-checkbox-inline">
                    <div class="md-checkbox">
                        <input type="checkbox" id="checkbox6" class="md-check" name="published" value="1" {{ (old('published')?? $post->published)?"checked":"" }}>
                        <label for="checkbox6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Published </label>
                    </div>
                </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class='btn btn-danger' href='{{route('post.index')}}'>Cancel</a>
            </div>
        </div>
    </form>
@endsection
