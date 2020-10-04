@extends('dashboard.layouts.app')
@section("title", "Comments")
@section("content")

    <form class='row'>
        <div class='col-md-4'>
            <input type='text' value="" id="name" class="form-control" placeholder="name to search" name="name"/></div>
        <div class='col-md-4'>
            <input type='text' value="" id="blog" class="form-control" placeholder="blog name to search " name="blog"/></div>

        <div class='col-md-2 '>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>
        </div>
    </form>
    @if($comments->count()>0)
        <table align="center" class="table mt-3 table-striped table-bordered">
            <thead>
            <tr>
                <th>name</th>
                <th>Email</th>
                <th>Comments</th>
                <th>published</th>
                <th>show|edit|delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->name }}</td>
                    <td>{{ $comment->email }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>
                        {{ $comment->published }}
                    </td>
                    <td>
                        {{-- <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary btn-sm"><i
                                class='fa fa-eye'></i></a>

                        <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary btn-sm"><i
                                class='fa fa-edit'></i></a>
                        <a href="{{ route('delete-comment', $comment->id) }}">
                            <button onclick='return confirm("Are you sure??")' type="submit" class="btn btn-danger btn-sm">
                                <i class='fa fa-trash'></i></button>
                        </a> --}}


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $comments->links() }}
    @else
        <div class='alert alert-warning'>Sorry, there is no results to your search</div>

    @endif
@endsection
