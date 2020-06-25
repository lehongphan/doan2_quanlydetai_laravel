<div class="row">
    <div class="col-sm-2">
        {!! form::label('hoLot','Họ lót') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('hoLot') ? 'has-error' : "" }}">
            {{ Form::text('hoLot',NULL, ['class'=>'form-control', 'id'=>'hoLot', 'placeholder'=>'Nguyễn văn.....']) }}
            {{ $errors->first('hoLot', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('ten','Tên') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
            {{ Form::text('ten',NULL, ['class'=>'form-control', 'id'=>'ten', 'placeholder'=>'Tên.....']) }}
            {{ $errors->first('ten', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('password','Ngày Sinh: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::date('ngaySinh', \Carbon\Carbon::now())}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-10">
        {{Form::radio('gioiTinh', 'Nam')}} Nam
        {{Form::radio('gioiTinh', 'Nữ')}} Nữ
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('queQuan','Quê quán: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
            {{ Form::text('queQuan',NULL, ['class'=>'form-control', 'id'=>'queQuan', 'placeholder'=>'ten.....']) }}
            {{ $errors->first('queQuan', '<p class="help-block">:message</p>') }}
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
        {!! form::label('maLop','Lớp: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maLop') ? 'has-error' : "" }}">
            {!! Form::select('maLop', $classes ?? '', $iclass , ['placeholder' => 'Pick a class...','maLop' =>
            'form-control select2','required' => 'true']) !!}
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