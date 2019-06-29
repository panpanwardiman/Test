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
            <label for="name">Email</label>
            {!! Form::text('email', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            {!! Form::text('address', null, ['class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('address'))
                <div class="invalid-feedback">{{ $errors->first('address') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            {!! Form::text('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control']) !!}
            @if($errors->has('phone'))
                <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
            @endif
        </div>

        {!! Form::submit(isset($model) ? 'Update' : 'Next', ['class' => 'btn btn-primary']) !!}
    </div>
</div>