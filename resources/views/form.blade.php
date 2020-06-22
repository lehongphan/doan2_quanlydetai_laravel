<div class="row">
    <div class="col-sm-2">
        {!! form::label('ten','Ten') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
            {{ Form::text('ten',NULL, ['class'=>'form-control', 'id'=>'ten', 'placeholder'=>'ten.....']) }}
            {{ $errors->first('ten', '<p class="help-block">:message</p>') }}
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
<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-10">
      {{Form::radio('name', 'Nam')}} Nam 
      {{Form::radio('name', 'Nữ')}} Nữ 
    </div>

  </div>
<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>