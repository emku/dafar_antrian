@extends('layout.layout')
   @section('header')
  <link href="{{ asset('css/style/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/style-antrian.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style/style-table.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('js/style-table.js') }}"></script>
  
  @endsection

@section('content')
  
<div class="row" align="center">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title" >Tabel Antrian</span>
      </div>
      <table id="datatable">
        <thead>
          <tr>
            <th>Loket</th>
            <th>Nomor Antrian</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($listAntrian as $antrian)
            <tr>
              <td>{{ $antrian->kode_loket }}</td>
              <td>{{ $antrian->nomor_antrian }}</td>
              <td><button class="buttontable">Hapus</button></td>  
            </tr>
            @empty
            <tr>
              <td colspan="4"> Tidak Ada Antrian. Libur Gan!!</td>
            </tr>
            @endforelse
        </tbody>
      </table>
    </div>
  </div>   
</div>
@endsection
<!-- </body> -->
@section('footer')

@endsection