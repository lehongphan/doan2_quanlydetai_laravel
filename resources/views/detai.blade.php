@extends('layout')

@section('detai')
<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Đăng ký đề tài</div>


  {{Form::open(['route'=>'detaisv.store', 'method'=>'POST']) }}
  <div class="row">
    <div class="col-sm-2">
      {!!
      form::label('maNK','Niên khoá')
      !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        {!! Form::select('maNK', $classes2, $iclass2 , ['placeholder' => 'Năm học...','class' =>
        'form-control select2', 'required' => 'true', 'name' => 'maNK']) !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      {!!
      form::label('maHK','Học kỳ')
      !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        {!! Form::select('maHK', $classes, $iclass , ['placeholder' => 'Học kỳ...','class' =>
        'form-control select2', 'required' => 'true', 'name' => 'maHK']) !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      {!!
      form::label('maDA','Đồ án')
      !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        {!! Form::select('maDA', $doan, $idoan , ['placeholder' => 'Đồ án...','class' =>
        'form-control select2', 'name' => 'maDA']) !!}
      </div>
    </div>
  </div>
  <div class="form-group">
    {{ Form::button('Hiển thị' , ['class'=>'btn btn-outline-info', 'type'=>'submit']) }}
  </div>
  <div class="card-body pd-sm-30">
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="width=1%">Mã đề tài</th>
            <th class="width=1%">Tên đề tài</th>
            <th class="width=1%">Công nghệ</th>
            <th class="width=1%">Môi trường</th>
            <th class="width=1%">Loại</th>
            <th class="width=1%">Thời gian</th>
            <th class="width=1%">Số lượng đăng ký</th>
            <th class="width=1%">Tên giảng viên</th>
            <th class="width=1%">Mô tả</th>
            <th class="width=1%">Hành động</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($detai as $key => $value)
          
          <tr>
            <td>{{$value->maDeTai}}</td>
            <td>{{ $value->tenDetai }}</td>
            <td>{{ $value->congNghe }}</td>
            <td>{{ $value->moiTruong }}</td>
            <td>{{ $value->loaiDT }}</td>
            <td>{{ $value->thoiGian }}</td>
            <td>{{ $value->soSVDK }}/{{ $value->soSVTT }}</td>
            <td><a href="#">{{ $value->giangVien->hoLot }} {{ $value->giangVien->ten }}</a></td>
            <td> <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#xemchitiet{{ $value->maDeTai }}">Xem thêm</button>



            </td>
            <div class="modal fade" id="xemchitiet{{$value->maDeTai}}" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mô tả đề tài</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div style="display: inline-block;">
                      <p>{{ $value->thongTinDeTai }}</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
            </div>
            <td>




              {{ Form::text('maDeTai',$value->maDeTai, ['class'=>'form-control', 'id'=>'maDeTai', 'type="hidden"']) }}
              {{ Form::text('maGV',$value->maGV, ['class'=>'form-control', 'id'=>'maGV', 'type="hidden"']) }}
              {{ Form::text('maSV',Auth::user()->maSV, ['class'=>'form-control', 'id'=>'maSV', 'type="hidden"']) }}
              {{ $errors->first('maSV', '<p class="help-block">:message</p>') }}
              <div class="form-group">

                @if(Auth::user()->hasDangKy(Auth::user()))
                <button type="button" class="btn">Đã đăng ký</button>
                @else
                {{ Form::button('Đăng ký' , ['class'=>'btn btn-success', 'type'=>'submit']) }}

                @endif
                <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                  data-target="#suaSinhVien{{$value->maGV}}">Thông tin giảng viên</button>
              </div>



              <div class="modal fade" id="suaSinhVien{{$value->maGV}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Thông tin giảng viên</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card-body">
                        <p><a class="font-weight-bolder">Tên giảng viên:</a><a class="font-weight-normal">
                            {{ $value->giangVien->hoLot }} {{ $value->giangVien->ten }}</a></p>
                        <p><a class="font-weight-bolder">Email liên hệ:</a><a class="font-weight-normal">
                            {{ $value->giangVien->email }}</a></p>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>

          </tr>


          @endforeach


        </tbody>
      </table>
    </div><!-- table-wrapper -->
    {{form::close() }}
  </div><!-- card-body -->


  @endsection