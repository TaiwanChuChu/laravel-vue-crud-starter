@extends('layouts.master2')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="form-group row">
            <div class="col-sm-12">
                <a href="{{ route('firm.index') }}" class="btn btn-danger">離開</a>
            </div>
        </div>
        <div class="form-group row">
            <label for="FirmName" class="col-sm-2 col-form-label text-center">廠商名稱</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="FirmName" name="FirmName" value="{{ $data->FirmName }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Address" class="col-sm-2 col-form-label text-center">廠商地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="Address" name="Address" value="{{ $data->Address }}">
            </div>
        </div>

    </div>
    </div>
</div>
@endsection