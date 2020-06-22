@extends('admin.layout')

@section('sinhvien')



<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin giảng viên</div>
  <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">Thêm giảng viên</button>
      </div>

  <div class="card-body pd-sm-30">



    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-15p">Mã giảng viên</th>
            <th class="wd-15p">Tên giảng viên</th>
            <th class="wd-15p">Ngày Sinh</th>
            <th class="wd-15p">Quê quán</th>
            <th class="wd-15p">Giới tính</th>
            <th class="wd-15p">Học hàm\Học Vị</th>
            <th class="wd-20p">Email</th>
            <th class="wd-20p">Hành động</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($giangvien as $key => $value)
          <tr>
            <td>{{$value->maGV}}</td>
            <td>{{ $value->hoLot }} {{ $value->ten }}</td>
            <td>{{$value->ngaySinh}}</td>
            <td>{{$value->queQuan}}</td>
            <td>{{$value->gioiTinh}}</td>
            <td>{{ $value->getHocHam->tenHH }}\{{ $value->getHocVi->tenHV }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->maGV}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->maGV}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin giảng viên</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    {{ Form::model($giangvien,['route'=>['giangvien.update',$value->maGV],'method'=>'PATCH']) }}
                    <div class="row">
    <div class="col-sm-2">
        {!! form::label('hoLot','Họ lót') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('hoLot') ? 'has-error' : "" }}">
            {{ Form::text('hoLot',$value->hoLot, ['class'=>'form-control', 'id'=>'hoLot']) }}
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
            {{ Form::text('ten',$value->ten, ['class'=>'form-control', 'id'=>'ten']) }}
            {{ $errors->first('ten', '<p class="help-block">:message</p>') }}
        </div>
    </div></div>
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
      @if($value->gioiTinh=='Nam')
        {{Form::radio('gioiTinh', 'Nam',true)}} Nam 
        {{Form::radio('gioiTinh', 'Nữ')}} Nữ
      @elseif($value->gioiTinh=='Nữ')
      {{Form::radio('gioiTinh', 'Nam')}} Nam
         {{Form::radio('gioiTinh', 'Nữ',true)}} Nữ
      
      
      @endif
      
    </div>  
</div>
               
    
    <div class="row">
    <div class="col-sm-2">
        {!! form::label('queQuan','Quê quán: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
            {{ Form::text('queQuan',$value->queQuan, ['class'=>'form-control', 'id'=>'queQuan']) }}
            {{ $errors->first('queQuan', '<p class="help-block">:message</p>') }}
        </div>
    </div></div>

    <div class="row">
    <div class="col-sm-2">
        {!! form::label('email','Email') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
            {{ Form::text('email',$value->email, ['class'=>'form-control', 'id'=>'email']) }}
            {{ $errors->first('email', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('maHH','Học hàm: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maHH') ? 'has-error' : "" }}">
           {!! Form::select('maHH', $hocham ?? $value->maHH, $tenhh ,['maHH' =>
                    'form-control select2','required' => 'true']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('maHV','Học vị: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maHV') ? 'has-error' : "" }}">
           {!! Form::select('maHV', $hocvi ?? $value->maHV, $tenhv , ['maHV' =>
                    'form-control select2','required' => 'true']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('maKhoa','Khoa: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maKhoa') ? 'has-error' : "" }}">
           {!! Form::select('maKhoa', $khoa ?? $value->maKhoa, $tenkhoa ,['maKhoa' =>
                    'form-control select2','required' => 'true']) !!}
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
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm giảng viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

          {{Form::open(['route'=>'giangvien.store', 'method'=>'post']) }}
          @include('admin.form_gv')
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