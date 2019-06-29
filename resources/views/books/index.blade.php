@extends('layouts.app')

@section('content')
<div class="clearfix">
    <h3 class="float-left">Books</h3>
    <a href="{{ route('book.create') }}" class="btn btn-primary float-right">Add new book</a>
</div>
@include('layouts.partials._alert')
<hr>
<div class="row mb-2">
    <div class="col-3">
        <form action="{{ route('search') }}" method="GET">    
            <div class="input-group">
                <input type="text" name="q" placeholder="Search" class="form-control">
                <button class="btn btn-primary mr-1">Search</button>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Author</th>
        <th>Published At</th>
        <th>ISBN</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
    <?php $no = ($books->currentPage() - 1) * $books->perPage() + 0 ?>
    @if(count($books) > 0)
        @foreach($books as $book)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_at }}</td>
                <td>{{ $book->isbn }}</td>
                <td>
                    @if($book->category_id != null)
                        {{ $book->category->name }}
                    @else 
                        -
                    @endif
                </td>
                <td>
                    {!! Form::model($book, ['route' => ['book.destroy', $book], 'method' => 'delete']) !!}
                        <a href="{{ route('book.edit', ['id' => $book->id]) }}" class="btn btn-success">Edit</a>
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Anda yakin ?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="7">Tidak ada data kategori !</td>
        </tr>
    @endif
</table>
{{ $books->links() }}
@endsection