<div class="row">
    <div class="col-md-6">
        {!! Form::hidden('user_id', $user_id) !!} 
        <div class="form-group">
            <label for="books">Books</label>
            {!! Form::select('book_id', $books->pluck('name', 'id')->all(), null, ['class' => 'form-control']) !!}            
        </div>
        @if(isset($model))
        <div class="form-group">
            <label for="status">Borrowed</label><br>
            {!! Form::radio('status', 'Borrow', false, ['id' => 'borrow']) !!}
            <label for="borrow">Borrow</label>
            {!! Form::radio('status', 'Return', false, ['id' => 'return']) !!}
            <label for="return">Return</label>
        </div>
        @endif
        {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>