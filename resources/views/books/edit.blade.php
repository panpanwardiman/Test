@extends('layouts.app')

@section('content')
<h3>Edit book</h3>
<hr>
{!! Form::model($book, ['route' => ['book.update', $book], 'method' => 'patch', 'autocomplete' => 'off']) !!}
    @include('books._form', ['model' => $book])
{!! Form::close() !!}
@endsection