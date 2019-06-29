@extends('layouts.app')

@section('content')
<h3>Edit pinjaman</h3>
<hr>
{!! Form::model($pinjaman, ['route' => ['pinjaman.update', $pinjaman], 'method' => 'patch', 'autocomplete' => 'off']) !!}
    @include('pinjaman._form', ['model' => $pinjaman])
{!! Form::close() !!}
@endsection