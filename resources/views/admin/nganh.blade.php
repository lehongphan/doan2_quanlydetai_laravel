@extends('admin.layout')

@section('nganh')
<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin ngành đào tạo</div>
  <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">Thêm ngành mới</button>
      </div>
  <div class="card-body pd-sm-30">
    
    

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-5p">Mã Ngành</th>
            <th class="wd-30p">Khoa</th>
            <th class="wd-30p">Tên Ngành</th>
            <th class="wd-30p">Số năm đào tạo</th>
            <th class="wd-15p">Hành động</th>
          </tr>
        </thead>
        <tbody>


          
          @foreach ($nganh as $key => $value)
          <tr>
            <td>{{$value->maNganh}}</td>
            <td>{{$value->getKhoa->tenKhoa}}</td>
            <td>{{ $value->tenNganh }}</td>
            <td>{{$value->soNamDT}}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->maNganh}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->maNganh}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin ngành</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    {{ Form::model($nganh,['route'=>['nganh.update',$value->maNganh],'method'=>'PATCH']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenNganh','Tên Ngành') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenNganh') ? 'has-error' : "" }}">
                              {{ Form::text('tenNganh',$value->tenNganh, ['class'=>'form-control', 'id'=>'tenNganh']) }}
                              {{ $errors->first('tenNganh', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>  
                        <div class="row">
    <div class="col-sm-2">
        {!! form::label('maKhoa','Khoa: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maKhoa') ? 'has-error' : "" }}">
           {!! Form::select('maKhoa', $khoa ?? '', $tenkhoa ,['maKhoa' =>
                    'form-control select2','required' => 'true']) !!}
        </div>
    </div>
</div>
                   <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('soNamDT','Số năm đào tạo') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('soNamDT') ? 'has-error' : "" }}">
                              {{ Form::text('soNamDT',$value->soNamDT, ['class'=>'form-control', 'id'=>'soNamDT']) }}
                              {{ $errors->first('soNamDT', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>  
                 <div class="modal-footer">
                  <div class="form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                      {{ Form::button('Sửa' , ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                  </div></div>

                    {{form::close() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </tbody>
      </table>
    </div><!-- table-wrapper -->
  </div><!-- card-body -->
</div><!-- card -->


<!-- Modal -->
<div class="modal fade" id="themSinhVien" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm ngành mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

            {{ Form::model($nganh,['route'=>['nganh.store'],'method'=>'post']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenNganh','Tên Ngành') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenKhoa') ? 'has-error' : "" }}">
                              {{ Form::text('tenNganh',null, ['class'=>'form-control', 'id'=>'tenNganh', 'placeholder'=>'Tên ngành.....']) }}
                              {{ $errors->first('tenNganh', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>   
                  <div class="row">
    <div class="col-sm-2">
        {!! form::label('maKhoa','Khoa: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maKhoa') ? 'has-error' : "" }}">
           {!! Form::select('maKhoa', $khoa ?? '', $tenkhoa , ['placeholder' => 'Pick a class...','maKhoa' =>
                    'form-control select2','required' => 'true']) !!}
        </div>
    </div>
</div>
                   <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('soNamDT','Số năm đào tạo') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('soNamDT') ? 'has-error' : "" }}">
                              {{ Form::text('soNamDT','4', ['class'=>'form-control', 'id'=>'soNamDT', 'placeholder'=>'Số năm đào tạo.....']) }}
                              {{ $errors->first('soNamDT', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>   
                  <div class="modal-footer">
                  <div class="form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                      {{ Form::button( 'Thêm' , ['class'=>'btn btn-primary', 'type'=>'submit']) }}
                  </div>
                  </div>

                    {{form::close() }}
        </div>
      </div>
     
      </div>
    </div>
  </div>
</div>




@endsection