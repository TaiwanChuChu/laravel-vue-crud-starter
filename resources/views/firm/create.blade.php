@extends('layouts.master2')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="{{ route('firm.store') }}">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-success" value="儲存">
                    <a href="{{ route('firm.index') }}" class="btn btn-danger">離開</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="FirmName" class="col-sm-2 col-form-label text-center">廠商名稱</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="FirmName" name="FirmName" value="{{ old('FirmName') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="Address" class="col-sm-2 col-form-label text-center">廠商地址</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Address" name="Address" value="{{ old('Address') }}">
                </div>
            </div>
        </form>

    </div>
    </div>
</div>
@endsection