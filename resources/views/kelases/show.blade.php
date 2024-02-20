@extends('template.master');

@section('header', 'Show data cast')

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
                <label for="nama">Nama Kelas</label>
                <input name="nama_kelas" type="text" class="form-control" id="nama" value="{{ $kelase->nama_kelas }}" @disabled(true)>
              </div>
              <div class="form-group">
                <label for="nama">Kompetisi keahlian</label>
                <input name="kompetisi_keahlian" type="text" class="form-control" id="nama" value="{{ $kelase->kompetisi_keahlian }}" @disabled(true)>
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
