@extends('giangvien.layout')

@section('detai')
   <div class="card bd-primary mg-t-20">
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
                     @if($value->trangThai==0)
                     {
                        <td>Chờ duyệt</td>
                         <td>
            {{ Form::model($detai,['route'=>['detaiddk.update',$value->maDangKyDT],'method'=>'PATCH']) }}
            {{ Form::text('trangThai','1', ['class'=>'form-control', 'id'=>'trangThai', 'type="hidden"']) }}
        {{ Form::button('Đồng ý' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
          {{form::close() }}
                     </td>
                     }@else
                     
                       <td>Đã duyệt</td>
                       <td>{{ Form::button('Đã duyệt' , ['class'=>'btn btn-secondary',]) }}</td>
                     
                     @endif
                    
                  </tr>
                @endforeach
            </tbody>
      </table>
   </div>
   <!-- table-wrapper -->
        </div>
<!-- card-body -->
    </div><!-- card -->

@endsection