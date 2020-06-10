<div class="row">
    <div class="col-sm-2">
        {!! form::label('name','Name') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
            {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'name.....']) }}
            {{ $errors->first('name', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('email','Email') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
            {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email....']) }}
            {{ $errors->first('email', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('password','Password') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('password',NULL, ['class'=>'form-control', 'id'=>'password', 'placeholder'=>'password....']) }}
            {{ $errors->first('password', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>