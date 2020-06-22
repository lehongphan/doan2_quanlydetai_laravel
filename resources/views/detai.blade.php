@extends('layout')

@section('detai')
                    <div class="card bd-primary mg-t-20">
                        <div class="card-header bg-primary tx-white">Thông tin sinh viên</div>
                        
                        <div class="card-body pd-sm-30">
                            <div class="table-wrapper">
                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="wd-5p">Mã đề tài</th>
                                            <th class="wd-15p">Tên đề tài</th>
                                            <th class="wd-15p">Tên giảng viên</th>
                                            <th class="wd-15p">Mô tả</th>
                                            <th class="wd-20p">Trạng thái</th>
                                            <th class="wd-20p">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detai as $key => $value)
                                        <tr>
                                            <td>{{$value->maDeTai}}</td>
                                            <td>{{ $value->tenDetai }}</td>
                                            <td><a href="#">{{ $value->giangVien->hoLot }} {{ $value->giangVien->ten }}</td></a>
                                            <td>{{ $value->thongTinDeTai }}</td>
                                            <td>{{ $value->trangThai }}</td>
                                            <td>
                                               

                                                 
 {{Form::open(['route'=>'detaisv.store', 'method'=>'POST']) }}
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
                data-target="#suaSinhVien{{$value->maGV}}">Xem thông tin giảng viên</button>
</div>

          {{form::close() }}
           
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
                  <p><a class="font-weight-bolder">Tên giảng viên:</a><a class="font-weight-normal"> {{ $value->giangVien->hoLot }} {{ $value->giangVien->ten }}</a></p>
                  <p><a class="font-weight-bolder">Email liên hệ:</a><a class="font-weight-normal"> {{ $value->giangVien->email }}</a></p>

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
                        </div><!-- card-body -->
              

@endsection