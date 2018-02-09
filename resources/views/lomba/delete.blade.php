@extends ('layouts.app')

@section('content')

<div class="jumbotron">
  <h3>Apakah anda yakin menghapus Lomba"{{$lomba->nama}}" ?</h3>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="/lomba/{{$lomba->id}}/confirmDelete" role="button">Hapus</a>
    <a class="btn btn-info btn-lg" href="/lomba" role="button">TIDAK</a>
  </p>
</div>

@endsection