@extends('admin.layout')

@section('sinhvien')



<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin sinh viên</div>
  <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">Thêm Sinh Viên</button>
      </div>

  <div class="card-body pd-sm-30">



    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Mã sinh viên</th>
            <th class="wd-15p">Tên sinh viên</th>
            <th class="wd-15p">Tên Lớp</th>
            <th class="wd-20p">Email</th>
            <th class="wd-20p">Hành động</th>
          </tr>
        </thead>
        <tbody>



          @foreach ($sinhvien as $key => $value)
          <tr>
            <td>{{$value->maSV}}</td>
            <td>{{ $value->ten }}</td>
            <td>{{ $value->getLopChuyenNganh->tenLop }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->maSV}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->maSV}}" tabindex="-1" role="dialog"
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

                    {{ Form::model($sinhvien,['route'=>['sinhvien.update',$value->maSV],'method'=>'PATCH']) }}
                    <div class="row">
                      <div class="col-sm-2">
                        {!! form::label('ten','Ten') !!}
                      </div>
                      <div class="col-sm-10">
                        <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
                          {{ Form::text('ten',$value->ten, ['class'=>'form-control', 'id'=>'ten', 'placeholder'=>'ten.....']) }}
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
                          {{ Form::text('email',$value->email, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email....']) }}
                          {{ $errors->first('email', '<p class="help-block">:message</p>') }}
                        </div>
                      </div>
                    </div>
                    {!! Form::select('maLop', $classes, $iclass , ['placeholder' => 'Pick a class...','maLop' =>
                    'form-control select2','required' => 'true']) !!}



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
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm sinh viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

          {{Form::open(['route'=>'sinhvien.store', 'method'=>'post']) }}
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