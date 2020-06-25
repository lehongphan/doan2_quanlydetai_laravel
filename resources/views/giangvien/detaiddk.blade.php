@extends('giangvien.layout')

@section('detai')
<div class="card bd-primary mg-t-20">
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
        aria-controls="nav-home" aria-selected="true">Home</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
        aria-controls="nav-profile" aria-selected="false">Profile</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
        aria-controls="nav-contact" aria-selected="false">Contact</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="card-header bg-primary tx-white">Thông tin sinh viên</div>
      <div class="ml-md-auto">
      </div>
      <div class="card-body pd-sm-30">
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Mã đề tài</th>
                <th class="wd-15p">Tên đề tài</th>
                <th class="wd-15p">Mô tả</th>
                <th class="wd-20p">Sinh viên đăng ký</th>
                <th class="wd-20p">Trạng thái</th>
                <th class="wd-20p">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($detai as $key => $value)
              <tr>
                <td>{{$value->maDeTai}}</td>
                <td>{{ $value->tenDetai }}</td>
                <td>{{ $value->thongTinDeTai }}</td>
                <td>{{ $value->hoLot }} {{ $value->ten }}</a></td>
                @if($value->trangThai==0)
                <td>Chờ duyệt</td>
                <td>
                  {{ Form::model($detai,['route'=>['detaiddk.update',$value->maDangKyDT],'method'=>'PATCH']) }}
                  {{ Form::text('trangThai','1', ['class'=>'form-control', 'id'=>'trangThai', 'type="hidden"']) }}
                  {{ Form::button('Đồng ý' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                  {{form::close() }}

                  {{ Form::model($detai,['route'=>['detaiddk.destroy',$value->maDangKyDT],'method'=>'PATCH']) }}
                  {{ Form::hidden('_method','DELETE') }}
                  {{ Form::button('Khônng duyệt' , ['class'=>'btn btn-warning', 'type'=>'submit']) }}
                  <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                    data-target="#suaSinhVien{{$value->maSV}}">Xem thông tin sinh viên</button>
                  <div class="modal fade" id="suaSinhVien{{$value->maSV}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Thông tin sinh viên</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <p><a class="font-weight-bolder">Tên sinh viên:</a><a class="font-weight-normal">
                                {{ $value->hoLot }} {{ $value->ten }}</a></p>
                            <p><a class="font-weight-bolder">Email liên hệ:</a><a class="font-weight-normal">
                                {{ $value->email }}</a></p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{form::close() }}
                </td>
                @else
                <td>Đã duyệt</td>
                <td>{{ Form::button('Đã duyệt' , ['class'=>'btn btn-secondary',]) }}
                  <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                    data-target="#suaSinhVien{{$value->maSV}}">Xem thông tin sinh viên</button></td>
                <div class="modal fade" id="suaSinhVien{{$value->maSV}}" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div cl ass="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thông tin sinh viên</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card-body">
                          <p><a class="font-weight-bolder">Tên sinh viên:</a><a class="font-weight-normal">
                              {{ $value->hoLot }} {{ $value->ten }}</a></p>
                          <p><a class="font-weight-bolder">Email liên hệ:</a><a class="font-weight-normal">
                              {{ $value->email }}</a></p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        @endif
        </tr>
        @endforeach
        </tbody>
        </table>
      </div>
      <!-- table-wrapper -->
    </div>
    <!-- card-body -->
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">..</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>

</div><!-- card -->

@endsection