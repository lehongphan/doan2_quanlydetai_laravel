@extends('admin.layout')

@section('khoa')
<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin khoa</div>
  <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">Thêm khoa mới</button>
      </div>
  <div class="card-body pd-sm-30">
    
    

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-5p">Mã Khoa</th>
            <th class="wd-30p">Tên khoa</th>
            <th class="wd-15p">Hành động</th>
          </tr>
        </thead>
        <tbody>


          
          @foreach ($khoa as $key => $value)
          <tr>
            <td>{{$value->maKhoa}}</td>
            <td>{{ $value->tenKhoa }}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->maKhoa}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->maKhoa}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin khoa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    {{ Form::model($khoa,['route'=>['khoa.update',$value->maKhoa],'method'=>'PATCH']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenKhoa','TenKhoa') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenKhoa') ? 'has-error' : "" }}">
                              {{ Form::text('tenKhoa',$value->tenKhoa, ['class'=>'form-control', 'id'=>'tenKhoa']) }}
                              {{ $errors->first('tenKhoa', '<p class="help-block">:message</p>') }}
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
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm khoa mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

            {{ Form::model($khoa,['route'=>['khoa.store'],'method'=>'post']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenKhoa','Tên Khoa') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenKhoa') ? 'has-error' : "" }}">
                              {{ Form::text('tenKhoa',$value->ten, ['class'=>'form-control', 'id'=>'tenKhoa', 'placeholder'=>'Khoa.....']) }}
                              {{ $errors->first('tenKhoa', '<p class="help-block">:message</p>') }}
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