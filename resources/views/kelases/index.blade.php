@extends('template.master')

@push('css')
  <link rel="stylesheet" href="{{ asset('starttemplate/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('starttemplate/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('starttemplate/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('header', 'Data Kelas')

@section('content')

@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('kelases.create') }}" class="btn btn-sm btn-outline-primary">
            <i class="fa fa-plus">Kelas</i>
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($kelases as $key => $value)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <td>
                  {{ $value->nama_kelas }}
                </td>
                <td>
                    {{ $value->kompetisi_keahlian }}
                </td>
                <td>
                  <form action="{{route('kelases.destroy', $value->id_kelas)}}" method="POST">
                  <a href="{{route('kelases.show', $value->id_kelas)}}" class="btn btn-sm btn-warning">
                    Show
                  </a>
                  <a href="{{route('kelases.edit', $value->id_kelas)}}" class="btn btn-sm btn-info">
                    Edit
                  </a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" style="display: inline;" value="Hapus">
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@push('js')
<script src="{{ asset('starttemplate/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('starttemplate/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $("#table").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
@endpush
