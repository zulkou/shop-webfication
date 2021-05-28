<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>List Member</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="mr-auto">Tabel Mahasiswa</h2>
      <a href="{{ route('membership.form') }}" class="btn btn-primary">Tambah Member</a>
    </div>
    @if (session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan')}}
        </div>
    @endif
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>No HP</th>
          <th>Password</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($memberships as $membership)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$membership->username}}</td>
          <td>{{$membership->nama}}</td>
          <td>{{$membership->nohp}}</td>
          <td>{{$membership->password}}</td>
          <td>{{$membership->alamat}}</td>
        </tr>
        <form action="{{ route('mahasiswas.destroy',['mahasiswa'=>$mahasiswa->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
    </div>
  </div>
</div>
<a href="{{ url('/logout') }}">logout</a>
</body>
</html>
