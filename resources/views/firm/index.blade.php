@extends('layouts.master2')

@section('content')
<div class="container-fluid">
    <div class="row">

      <div class="col-12">
    
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">廠商基本資料清冊</h3>

            <div class="card-tools">
              
              <a type="button" href="{{ route('firm.create') }}" class="btn btn-sm btn-primary">
                  <i class="fa fa-plus-square"></i>
                  新增
              </a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>廠商ID</th>
                  <th>廠商名稱</th>
                  <th>廠商地址</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($data as $firm)
                    <tr>
                    <td>{{ $firm->id }}</td>
                    <td>{{ $firm->FirmName }}</td>
                    <td>{{ $firm->Address }}</td>
                    <td>
                        <form method="POST" action="{{ route('firm.destroy', [$firm->id]) }}" class="form-inline">
                            <a href="{{ route('firm.show', [$firm->id]) }}" class="btn">
                                <i class="fa fa-eye"></i>
                            </a>
                             /
                            <a href="{{ route('firm.edit', [$firm->id]) }}" class="btn">
                                <i class="fa fa-edit blue"></i>
                            </a>
                             /
                            @csrf
                            @method('DELETE')
                    
                            <div class="form-group">
                                <button type="submit" class="btn" onclick="return confirm('是否刪除?'); ">
                                    <i class="fa fa-trash red"></i>
                                </button>
                            </div>
                        </form>
                        
                    </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            {{ $data->links() }}
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
@endsection