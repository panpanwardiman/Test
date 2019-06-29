@extends('layouts.app')

@section('content')
<h3>Add new user</h3>
<hr>
{!! Form::open(['route' => 'user.store', 'autocomplete' => 'off']) !!}
    @include('user._form')
{!! Form::close() !!}
@endsection