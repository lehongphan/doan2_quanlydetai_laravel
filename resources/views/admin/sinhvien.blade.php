@extends('admin.home')

@section('sinhvien')


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    @isset($url)
                    <form method="POST" action='{{ url("admin/sinhvien/register") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register.sinhvien') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                      
                       
                    </form>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-primary">Cập nhật</button>
      </div>
    </div>
  </div>
</div>


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
                 @foreach($something as $data)
                 <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                    <button type="button" class="btn btn-primary edit-model" data-info="{{$data->id}},{{$data->name}},{{$data->email}}" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                    
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div><!-- card-body -->
        </div><!-- card -->
         
@endsection