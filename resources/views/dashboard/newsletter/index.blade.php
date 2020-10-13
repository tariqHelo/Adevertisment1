@extends('dashboard.layouts.app')
@section("title", "Newsletter Page")
@section("content")
    <div class="portlet light ">


        <div class="portlet-body">
            <div class='row'>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <button class='btn btn-primary'><i class='fa fa-search'></i> Search</button>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr class="col">
                        <th class="col-2"> Email </th>
                         <th class="col-5"> Actions </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $Newsletter)
                        <tr>
                            <td> {{$Newsletter->email}}</td>
                            <td>
                                <div class="btn-group">
                                    <form method="post" action="{{ route('newsletter_.destroy', $Newsletter->id) }}">
{{--                                        <a href="{{route('offers.edit',$offer->id)}}" type="button" class="btn btn-success">Edit</a>--}}
                                        <button onclick='return confirm("Are you sure delete ?")' type="submit" class="btn btn-danger">Delele</button>
                                    @csrf
                                    @method("DELETE")
                                    {{--                                                            <button href={{route("offers.destroy")}} type="button" class="btn btn-danger">Delete</buttonhref>--}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
