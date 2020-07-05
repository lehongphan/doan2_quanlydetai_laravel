<div class="row">
    <div class="col-sm-2">
        {!! form::label('tenDeTai','Tên đề tài') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('tenDetai') ? 'has-error' : "" }}">
            {{ Form::text('tenDetai',NULL, ['class'=>'form-control', 'id'=>'tenDetai', 'placeholder'=>'Tên đề tài.....']) }}
            {{ $errors->first('tenDetai', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
{{ Form::text('maGV',Auth::user()->maGV, ['class'=>'form-control', 'id'=>'maGV', 'type="hidden"']) }}
<div class="row">
    <div class="col-sm-2">
        {!! form::label('thongTinDeTai','Thông tin') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('thongTinDeTai',NULL, ['class'=>'form-control', 'id'=>'thongTinDeTai', 'placeholder'=>'Thông tin....']) }}
            {{ $errors->first('thongTinDeTai', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('soSVTT','Số sinh viên thực hiện') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('soSVTT') ? 'has-error' : "" }}">
            {{ Form::number('soSVTT',NULL, ['class'=>'form-control', 'id'=>'soSVTT', 'placeholder'=>'Số sinh viên thực hiện....']) }}
            {{ $errors->first('soSVTT', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('congNghe','Công nghệ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('congNghe') ? 'has-error' : "" }}">
            {{ Form::text('congNghe',NULL, ['class'=>'form-control', 'id'=>'congNghe', 'placeholder'=>'Công nghệ....']) }}
            {{ $errors->first('congNghe', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('moiTruong','Môi trường') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('moiTruong',NULL, ['class'=>'form-control', 'id'=>'moiTruong', 'placeholder'=>'Môi trường....']) }}
            {{ $errors->first('moiTruong', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('loaiDT','Loại đề tài') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('loaiDT',NULL, ['class'=>'form-control', 'id'=>'loaiDT', 'placeholder'=>'Loại đề tài....']) }}
            {{ $errors->first('loaiDT', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('thoiGian','Thời gian') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
            {{ Form::text('thoiGian',NULL, ['class'=>'form-control', 'id'=>'thoiGian', 'placeholder'=>'Thời gian ....']) }}
            {{ $errors->first('thoiGian', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="form-group">
    {{ Form::button('Thêm' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>