@extends('template.master');

@section('header', 'Show data petugas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Username</label>
                <input name="username" type="text" class="form-control" id="nama" value="{{ $petuga->username }}" @disabled(true)>
              </div>
              <div class="form-group">
                <label for="nama">Password</label>
                <input name="password" type="text" class="form-control" id="nama" value="{{ $petuga->password }}" @disabled(true)>
              </div>
              <div class="form-group">
                <label for="nama">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control" id="nama" value="{{ $petuga->nama_petugas }}" @disabled(true)>
              </div>
              <div class="form-group">
                <label for="nama">Level</label>
                <input name="level" type="text" class="form-control" id="nama" value="{{ $petuga->level }}" @disabled(true)>
              </div>
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
            <a href="{{route('kelases.index')}}" class="btn btn-info">Back</a>
        </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
