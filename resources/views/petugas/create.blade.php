@extends('template.master');

@section('header', 'Tambah Data Pengguna')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Username</label>
                <input name="username" type="text" class="form-control @error('username') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Username" value="{{ @old('username') }}">
              </div>
              @error('username')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="nama">Password</label>
                <input name="password" type="text" class="form-control @error('password') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Password" value="{{ @old('password')}}">
              </div>
              @error('password')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="nama">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Nama Petugas" value="{{ @old('nama_petugas')}}">
              </div>
              @error('nama_petugas')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="nama">Level</label>
                <input name="level" type="text" class="form-control @error('level') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Level" value="{{ @old('level')}}">
              </div>
              @error('level')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
