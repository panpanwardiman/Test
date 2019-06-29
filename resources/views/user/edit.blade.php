@extends('layouts.app')

@section('content')
<h3>Edit user</h3>
<hr>
{!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'patch', 'autocomplete' => 'off']) !!}
    @include('user._form', ['model' => $user])
{!! Form::close() !!}
@endsection