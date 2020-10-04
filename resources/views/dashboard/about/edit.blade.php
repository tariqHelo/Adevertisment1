@extends("dashboard.layouts.app")

@section("title", "Create About")

@section("css")
<link href="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section("content")
<div class="portlet light ">
        <div class="portlet-body form">
<form method="post" enctype="multipart/form-data" action="{{ route('about.update' , $abouts->id) }}" role="form">
    @csrf
@method('PUT')
     <div class="form-body">
            <div class="form-group has-success">
               <label for="whyUs">whyUs</label>
             <textarea class="form-control" id="whyUs" name="whyUs">{{ $abouts->whyUs }}</textarea>
            </div>
    </div>
      <div class="form-body">
            <div class="form-group has-success">
               <label for="moreInfo">moreInfo</label>
             <textarea class="form-control" id="moreInfo" name="moreInfo">{{ $abouts->moreInfo }}</textarea>
            </div>
     </div>
     <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">Image</label>
                    </div>
                    <div>
                        <img src="{{asset("storage/".$abouts->image)}}" width='240' class='img-thumbnail'>
                    </div>
    </div>


      <div class="md-checkbox-inline">
                    <div class="md-checkbox">
                        <input type="checkbox" id="checkbox6" class="md-check" name="published" value="1" {{ (old('published')?? $abouts->published)?"checked":"" }}>
                        <label for="checkbox6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Published </label>
                    </div>
                </div>
    <div class="card-footer mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class='btn btn-default' href='{{ route("about.index") }}'>Cancel</a>
    </div>
</form>
</div>
    </div>
@endsection

@section("js")
<!-- <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script> -->
    <script type="text/javascript">
    /*$(document).ready(function () {
      bsCustomFileInput.init();
    });*/
    </script>

{{-- <script src="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script>
        $("#whyUs").summernote({height:300});
    </script> --}}

@endsection
