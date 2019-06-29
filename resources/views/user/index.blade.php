@extends('layouts.app')

@section('content')
<div class="clearfix">
    <h3 class="float-left">Users</h3>
    <a href="{{ route('user.create') }}" class="btn btn-primary float-right">Add new users</a>
</div>
@include('layouts.partials._alert')
<hr>
<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php $no = ($users->currentPage() - 1) * $users->perPage() + 0 ?>
    @if(count($users) > 0)
        @foreach($users as $user)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    {!! Form::model($user, ['route' => ['user.destroy', $user], 'method' => 'delete']) !!}
                        <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-warning">Show Books</a>
                        <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-success">Edit</a>
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Anda yakin ?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="3">Tidak ada data kategori !</td>
        </tr>
    @endif
</table>
{{ $users->links() }}
@endsection