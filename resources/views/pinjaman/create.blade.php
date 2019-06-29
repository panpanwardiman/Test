@extends('layouts.app')

@section('content')

<h3>Add new book</h3>
@include('layouts.partials._alert')
<hr>
{!! Form::open(['route' => 'pinjaman.store', 'autocomplete' => 'off']) !!}
    @include('pinjaman._form')
{!! Form::close() !!}
@endsection