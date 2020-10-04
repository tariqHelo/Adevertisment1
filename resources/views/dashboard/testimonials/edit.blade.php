@extends("dashboard.layouts.app")

@section("title", "Create About")



@section("content")
<div class="portlet light ">
<div class="portlet-body form">
<form method="post" enctype="multipart/form-data" action="{{ route('testimonial.update' , $testimonials->id) }}" role="form">
    @method('PUT')
    @csrf
         <div class="card-body">
            <div class="form-group">
                <label for="title">name</label>
                <input  type="text"  class="form-control" value='{{old('name')??$testimonials->name}}' id="name" name="name" placeholder="Enter comment Name">
            </div>
       <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
                    <div>
                        <img src="{{asset("storage/".$testimonials->image)}}" width='240' class='img-thumbnail'>
                    </div>
                </div>
           <div class="md-checkbox-inline">
                    <div class="md-checkbox">
                        <input type="checkbox" id="checkbox6" class="md-check" name="published" value="1" {{ (old('published')?? $testimonials->published)?"checked":"" }}>
                        <label for="checkbox6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Published </label>
                    </div>
                </div>
            <div>
    <div class="card-footer mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
         <a class='btn btn-default' href='{{ route("x1") }}'>Cancel</a>
    </div>
</form>
</div>
    </div>
@endsection
