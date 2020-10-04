@extends("dashboard.layouts.app")
@section("title", "Manage Menu")


@section("content")
<div class="col-2">
    <div>
        <a href="{{route('testimonial.create')}}" class="btn btn-success pull-right">Create New menu item</a>
    </div>
</div>
    @if($testimonials->count()>0)
    <table align="center" class="table table-striped mt-3 table-bordered table-hover">
        <thead>
            <tr>
                <th>name</th>
                <th>Image</th>
                <th>description</th>
                <th>Published</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($testimonials as $testimonial)
        <tr>

            <td><a href="{{ route("testimonial.show", $testimonial->id) }}">{{ $testimonial->name }}</a></td>

            <td><img width="100" src='{{ asset("storage/".$testimonial->image)}}' ></td>


            <td>{{$testimonial->description}}</td>

            <td><input type="checkbox" disabled {{$testimonial->published?"checked":"" }}/></td>

            <td width="20%">
               <form method="post" action="{{ route('testimonial.destroy', $testimonial->id) }}">

                            <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-primary btn-sm"><i
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
    {{ $testimonials->links("pagination::bootstrap-4") }}

    @else
        <div class='alert alert-warning'>Sorry, there is no results to your search</div>

    @endif
@endsection

