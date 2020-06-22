<div class="row">
    <div class="col-sm-2">
        {!! form::label('tenDeTai','tenDeTai') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('tenDeTai') ? 'has-error' : "" }}">
            {{ Form::text('tenDeTai',NULL, ['class'=>'form-control', 'id'=>'tenDeTai', 'placeholder'=>'tenDeTai.....']) }}
            {{ $errors->first('tenDeTai', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
{{ Form::text('maGV',Auth::user()->maGV, ['class'=>'form-control', 'id'=>'maGV', 'type="hidden"']) }}
<div class="row">
    <div class="col-sm-2">
        {!! form::label('thongTinDeTai','thongTinDeTai') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('thongTinDeTai',NULL, ['class'=>'form-control', 'id'=>'thongTinDeTai', 'placeholder'=>'thongTinDeTai....']) }}
            {{ $errors->first('thongTinDeTai', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
  </div>
<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>