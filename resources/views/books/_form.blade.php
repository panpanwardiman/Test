<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
            {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            {!! Form::text('author', null, ['class' => $errors->has('author') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('author'))
                <div class="invalid-feedback">{{ $errors->first('author') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="published_at">Published At</label>
            {!! Form::text('published_at', null, ['class' => $errors->has('published_at') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('published_at'))
                <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            {!! Form::select('category_id', $categories->pluck('name', 'id')->all(), null, ['class' => 'form-control']) !!}            
        </div>

        <div class="form-group">
            <label for="isbn">ISBN</label>
            {!! Form::text('isbn', null, ['class' => $errors->has('isbn') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('isbn'))
                <div class="invalid-feedback">{{ $errors->first('isbn') }}</div>
            @endif
        </div>

        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>