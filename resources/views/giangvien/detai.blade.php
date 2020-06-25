@extends('giangvien.layout')
@section('detai')
<div class="card bd-primary mg-t-20">
   <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Đề tài</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đề tài học kì hiện tại</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         <div class="card-header bg-primary tx-white">Thông tin sinh viên</div>
   <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">
         Thêm Đề Tài</button>
   </div>
   <div class="card-body pd-sm-30">
      <div class="table-wrapper">
         <table id="datatable1" class="table display responsive nowrap">
            <thead>
               <tr>
                  <th class="wd-15p">Mã đề tài</th>
                  <th class="wd-15p">Tên đề tài</th>
                  <th class="wd-15p">Mô tả</th>
                  <th class="wd-20p">Hành động</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($detai as $key => $value)
               <tr>
                  <td>{{$value->maDeTai}}</td>
                  <td>{{ $value->tenDetai }}</td>
                  <td>{{ $value->thongTinDeTai }}</td>
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
                           <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa
                              thông tin sinh viên
                           </h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="card-body">
                              {{ Form::model($detai,['route'=>['detai.update',$value->maDeTai],'method'=>'PATCH']) }}
                              <div class="row">
                                 <div class="col-sm-2">
                                    {!!
                                    form::label('ten','Ten')
                                    !!}
                                 </div>
                                 <div class="col-sm-10">
                                    <div class="form-group {{ $errors->has('ten') ? 'has-error' : "" }}">
                                       {{ Form::text('ten',$value->tenDetai, ['class'=>'form-control', 'id'=>'ten', 'placeholder'=>'ten.....']) }}
                                       {{ $errors->first('ten', '
                                       <p class="help-block">:message</p>
                                       ') }}
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-2">
                                    {!!
                                    form::label('email','Email')
                                    !!}
                                 </div>
                                 <div class="col-sm-10">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
                                       {{ Form::text('email',$value->thongTinDeTai, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email....']) }}
                                       {{ $errors->first('email', '
                                    <p class="help-block">:message</p>
                                    ') }}
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
                           <button type="button" class="btn btn-primary">Cập
                              nhật</button>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </tbody>
         </table>
      </div>
      <!-- table-wrapper -->
   </div>
   <!-- card-body -->
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    </div>
   
</div><!-- card -->
<!-- Modal -->
<div class="modal fade" id="themSinhVien" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Thêm đề tài</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               {{Form::open(['route'=>'detai.store', 'method'=>'POST']) }}
               @include('giangvien.form')
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