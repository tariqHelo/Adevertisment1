@extends('dashboard.layouts.app')
@section("title", "Contact Us")
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
                        <th class="col-2"> First Name </th>
                        <th class="col-2"> Last Name </th>
                        <th class="col-2"> Email </th>
                        <th class="col-2"> Subject </th>
                        <th class="col-2"> Message </th>
                        <th class="col-5"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $contact)

                        <tr>
                            <td> {{$contact->fname}} </td>
                            <td> {{$contact->lname}} </td>
                            <td> {{$contact->email}} </td>
                            <td> {{$contact->subject}} </td>
                            <td> {{$contact->message}} </td>

                            <td>
                                <div class="btn-group">
                                    <form method="post" action="{{ route('contact_.destroy', $contact->id) }}">
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
