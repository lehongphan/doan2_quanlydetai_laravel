@extends('admin.home')

@section('sinhvien')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#themSinhVien">Thêm</button>



<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin sinh viên</div>
  <div class="card-body pd-sm-30">

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Mã sinh viên</th>
            <th class="wd-15p">Tên sinh viên</th>
            <th class="wd-20p">Email</th>
            <th class="wd-20p">Hành động</th>
          </tr>
        </thead>
        <tbody>


          <?php $no=1; ?>
          @foreach ($post as $key => $value)
          <tr>
            <td>{{$no++}}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->id}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin sinh viên</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">

                    {{ Form::model($post,['route'=>['sinhvien.update',$value->id],'method'=>'PATCH']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('name','Name') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
                              {{ Form::text('name',$value->name, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'name.....']) }}
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
                              {{ Form::text('email',$value->email, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email....']) }}
                              {{ $errors->first('email', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>
                 
                  <div class="form-group">
                      {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                  </div>

                    {{form::close() }}
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                  <button type="button" class="btn btn-primary">Cập nhật</button>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin sinh viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

          {{Form::open(['route'=>'sinhvien.store', 'method'=>'POST']) }}
          @include('admin.form')

          {{form::close() }}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-primary">Cập nhật</button>
      </div>
    </div>
  </div>
</div>




@endsection