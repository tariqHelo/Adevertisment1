@extends("dashboard.layouts.app")
@section("title", "Manage Menu")


@section("content")
    <a href="{{route('about.create')}}" class="btn btn-success pull-right">Create New menu item</a>
    <table class="table mt-3 table-striped table-bordered" align="center">
        <thead>
        <tr class="success">

            <th>why us </th>
            <th>moreInfo</th>
            <th>Image</th>
            <th>active</th>
            <th>edit|delete</th>
        </tr>
        </thead>

      <tbody>
            @foreach($abouts as $about)
                <tr>
                    <td>{!!  $about->whyUs  !!} </td>
                     <td>{!!  $about->moreInfo  !!} </td>
                     <td><img width="100" src='{{ asset("storage/".$about->image)}}' ></td>

{{--                    <td><img width='100' src='{{ asset('storage/'.$about->image) }}' /></td>--}}
                    <td> <input {{$about->published?"checked":""}} disabled type="checkbox"> </td>
                    <td width="20%">
                        <form method="post" action="{{ route('about.destroy', $about->id) }}">
                            <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary btn-sm"><i
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
@endsection
