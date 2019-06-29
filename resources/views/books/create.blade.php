@extends('layouts.app')

@section('content')
<h3>Add new book</h3>
<hr>
{!! Form::open(['route' => 'book.store', 'autocomplete' => 'off']) !!}
    @include('books._form')
{!! Form::close() !!}
@endsection