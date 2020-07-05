@extends('giangvien.layout')
@section('detai')

<nav>
   <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
         aria-controls="nav-home" aria-selected="true">Đề tài</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
         aria-controls="nav-profile" aria-selected="false">Đề tài học kì hiện tại</a>
   </div>
</nav>
<div class="tab-content" id="nav-tabContent">
   <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="card bd-primary mg-t-20">
         <div class="card-header bg-primary tx-white">Thông tin đề tài</div>
         <div class="ml-md-auto">
            <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">
               Thêm Đề Tài</button>
         </div>
         {{Form::open(['route'=>'detai.index', 'method'=>'GET']) }}
         <div class="row">
            <div class="col-sm-2">
               {!!
               form::label('maNK','Niên khoá')
               !!}
            </div>
            <div class="col-sm-10">
               <div class="form-group">
                  {!! Form::select('maNK', $classes2, $iclass2, ['placeholder' => 'Năm học...','class' =>
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
                  {!! Form::select('maHK', $classes, $iclass, ['placeholder' => 'Học kỳ...','class' =>
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
         {{form::close() }}



         <div class="card-body pd-sm-30">
            <div class="table-wrapper">
               <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                     <tr>
                        <th>Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th>Công nghệ</th>
                        <th>Môi trường</th>
                        <th>Loại</th>
                        <th>Thời gian</th>
                        <th>Số lượng sinh viên</th>
                        <th>Mô tả</th>
                        <th>Hành động</th>
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
                        <td>{{ $value->soSVTT }}</td>
                        <td>{{ $value->thongTinDeTai }}</td>
                        <td>
                           <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                              data-target="#suaSinhVien{{$value->maDeTai}}">Sửa</button> 
                              <div class="modal fade" id="suaSinhVien{{$value->maDeTai}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa
                                             thông đề tài
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
                                                    {!! form::label('tenDetai','Tên đề tài') !!}
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-group {{ $errors->has('tenDetai') ? 'has-error' : "" }}">
                                                        {{ Form::text('tenDetai',$value->tenDetai, ['class'=>'form-control', 'id'=>'tenDetai', 'placeholder'=>'Tên đề tài.....']) }}
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
                                                        {{ Form::text('thongTinDeTai',$value->thongTinDeTai, ['class'=>'form-control', 'id'=>'thongTinDeTai', 'placeholder'=>'Thông tin....']) }}
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
                                                        {{ Form::number('soSVTT',$value->soSVTT, ['class'=>'form-control', 'id'=>'soSVTT', 'placeholder'=>'Số sinh viên thực hiện....']) }}
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
                                                        {{ Form::text('congNghe',$value->congNghe, ['class'=>'form-control', 'id'=>'congNghe', 'placeholder'=>'Công nghệ....']) }}
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
                                                        {{ Form::text('moiTruong',$value->moiTruong, ['class'=>'form-control', 'id'=>'moiTruong', 'placeholder'=>'moiTruong....']) }}
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
                                                        {{ Form::text('loaiDT',$value->loaiDT, ['class'=>'form-control', 'id'=>'loaiDT', 'placeholder'=>'Loại đề tài....']) }}
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
                                                        {{ Form::text('thoiGian',$value->thoiGian, ['class'=>'form-control', 'id'=>'thoiGian', 'placeholder'=>'Thời gian ....']) }}
                                                        {{ $errors->first('thoiGian', '<p class="help-block">:message</p>') }}
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                {{ Form::button('Lưu' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                                             </div>
                                             {{form::close() }}
                                          </div>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>                             
                           <form action="{{route('detai.nienkhoa')}}" method="post">
                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                              
                              <input type='hidden' name="maDeTai" value={{$value->maDeTai}} />
                           <input type='hidden' name="maNK" value={{$iclass2}} />
                              <input type='hidden' name="maHK" value={{$iclass}} />
                              <input type='hidden' name="maDA" value={{$idoan}} />
                              <input type='submit' class="btn btn-primary" value="Thêm vào học kỳ" />
                           </form>
                           {{ Form::model($detai,['route'=>['detai.destroy',$value->maDeTai],'method'=>'PATCH']) }}
                  {{ Form::hidden('_method','DELETE') }}
                  {{ Form::button('Xoá' , ['class'=>'btn btn-warning', 'type'=>'submit']) }}{{form::close() }}
                        </td>
                        
                     </tr>
                     
                     
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- table-wrapper -->
         </div>
         <!-- card-body -->
      </div>
   </div><!-- card -->
   <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="card bd-primary mg-t-20">
         <div class="card-header bg-primary tx-white">Thông tin đề tài học kì hiện tại </div>
         {{Form::open(['route'=>'detai.index', 'method'=>'GET']) }}

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
         {{form::close() }}

         <div class="card-body pd-sm-30">
            <div class="table-wrapper">
               <table id="datatable2" class="table display responsive nowrap">
                  <thead>
                     <tr>
                        <th>Mã đề tài</th>
                        <th>Tên đề tài</th>
                        <th>Năm</th>
                        <th>Học kì</th>
                        <th>Đồ án</th>
                        <th>Công nghệ</th>
                        <th>Môi trường</th>
                        <th>Loại</th>
                        <th>Thời gian</th>
                        <th>Số lượng sinh viên</th>
                        <th>Mô tả</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($exams as $key => $value)
                     <tr>
                        <td>{{$value->maDeTai}}</td>
                        <td>{{ $value->tenDetai }}</td>   
                        <td>{{ $value->getNienKhoa->nienKhoa }}</td>   
                        <td>{{ $value->getHocKy->hocKy }}</td> 
                        <td>{{ $value->getDoAn->doAn }}</td>                  
                        <td>{{ $value->congNghe }}</td>
                        <td>{{ $value->moiTruong }}</td>
                        <td>{{ $value->loaiDT }}</td>
                        <td>{{ $value->thoiGian }}</td>
                        <td>{{ $value->soSVTT }}</td>
                        <td>{{ $value->thongTinDeTai }}</td>
                     </tr>
                     
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- table-wrapper -->
         </div>
         <!-- card-body -->
      </div>
   </div><!-- card -->
</div>
</div>


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
         </div>
      </div>
   </div>
</div>

@endsection
@section('script')


<script type="text/javascript">
   window.postUrl = '{{URL::Route("detai.index", 0)}}';
   $(document).ready(function () {
      var maHK = $('#maHK_id_filter').val();
           var maNK = $('#maNK_id_filter').val();
           var getUrl = window.location.href.split('?')[0].split('?')[0]; 
       $('#maHK_id_filter').on('change', function () {
                      
           if(maHK){
               getUrl +="?maNK="+maNK;
               getUrl +="?maHK="+maHK;
               
           }            
           window.location = getUrl;
           
       });
   });
</script>
<script type="text/javascript">
   //tải lại tab hiện tịa sau khi tải trang
 $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
  localStorage.setItem('activeTab', $(e.target).attr('href'));
});

// Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
var activeTab = localStorage.getItem('activeTab');

// En la consola te va a mostrar la pestaña donde hiciste el último click y lo
// guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
// el browser, va a quedar activa la última donde hiciste el click.
console.log(activeTab);

if (activeTab) {
 $('a[href="' + activeTab + '"]').tab('show');
}
</script>

@endsection