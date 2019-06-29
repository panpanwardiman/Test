@extends('layouts.app')

@section('content')
<div class="clearfix">
    <h3 class="float-left">Books</h3>
    <a href="{{ route('pinjaman.create', ['id' => $user->id]) }}" class="btn btn-primary float-right">Add books</a>
</div>
@include('layouts.partials._alert')
<hr>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach($user->books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->pivot->status }}</td>
            <td>
                <a href="{{ route('pinjaman.edit', ['id' => $book->pivot->id]) }}" class="btn btn-success">Edit</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection