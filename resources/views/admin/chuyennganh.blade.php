@extends('admin.layout')

@section('chuyennganh')
<div class="card bd-primary mg-t-20">
  <div class="card-header bg-primary tx-white">Thông tin chuyên ngành đào tạo</div>
  <div class="ml-md-auto">
      <button type="button" class="btn btn-primary mt-4 mr-4" data-toggle="modal" data-target="#themSinhVien">Thêm chuyên ngành</button>
      </div>
  <div class="card-body pd-sm-30">
    
    

    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-5p">Mã chuyên ngành</th>
            <th class="wd-30p">Ngành</th>
            <th class="wd-30p">Tên Chuyên Ngành</th>
            <th class="wd-30p">Số năm đào tạo</th>
            <th class="wd-15p">Hành động</th>
          </tr>
        </thead>
        <tbody>


          
          @foreach ($chuyennganh as $key => $value)
          <tr>
            <td>{{$value->maCN}}</td>
            <td>{{$value->getChuyenNganh->tenNganh}}</td>
            <td>{{ $value->tenCN }}</td>
            <td>{{$value->getChuyenNganh->soNamDT}}</td>
            <td>
              <button type="button" class="btn btn-primary edit-model" data-toggle="modal"
                data-target="#suaSinhVien{{$value->maCN}}">Sửa</button>
            </td>

          </tr>
          <div class="modal fade" id="suaSinhVien{{$value->maCN}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thông tin chuyên ngành</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card-body">
                    {{ Form::model($chuyennganh,['route'=>['chuyennganh.update',$value->maCN],'method'=>'PATCH']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenCN','Tên Chuyên ngành') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenCN') ? 'has-error' : "" }}">
                              {{ Form::text('tenCN',$value->tenCN, ['class'=>'form-control', 'id'=>'tenCN']) }}
                              {{ $errors->first('tenCN', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>  
                        <div class="row">
    <div class="col-sm-2">
        {!! form::label('maNganh','Ngành: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maNganh') ? 'has-error' : "" }}">
          
           {!! Form::select('maNganh', $nganh ?? $value->nganh, $tennganh , ['maNganh' =>
                    'form-control select2','required' => 'true']) !!}
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
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm chuyên ngành</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">

            {{ Form::model($chuyennganh,['route'=>['chuyennganh.store'],'method'=>'post']) }}
                    <div class="row">
                      <div class="col-sm-2">
                          {!! form::label('tenCN','Tên Chuyên Ngành') !!}
                      </div>
                      <div class="col-sm-10">
                          <div class="form-group {{ $errors->has('tenCN') ? 'has-error' : "" }}">
                              {{ Form::text('tenCN',null, ['class'=>'form-control', 'id'=>'tenCN', 'placeholder'=>'Tên chuyên ngành.....']) }}
                              {{ $errors->first('tenCN', '<p class="help-block">:message</p>') }}
                          </div>
                      </div>
                  </div>   
                  <div class="row">
    <div class="col-sm-2">
        {!! form::label('maNganh','Ngành: ') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('maNganh') ? 'has-error' : "" }}">
           {!! Form::select('maNganh', $nganh ?? '', $tennganh , ['placeholder' => 'Chọn ngành...','maNganh' =>
                    'form-control select2','required' => 'true']) !!}
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