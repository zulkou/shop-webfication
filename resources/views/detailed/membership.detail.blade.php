<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>{{$membership->username}}</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3 d-flex judtify-content-end align-items-center">
      <h1 class="h2 mr-auto">{{$membership->nama}}</h1>
      <a href="{{ route('membership.edit',['membership' => $membership->id]) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('membership.delete',['membership' => $membership->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
      </form>
    </div>
    <hr>
    @if(session()->has('pesan'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('pesan') }}
      </div>
    @endif

    <ul>
      <li>Username      : {{$membership->username}} </li>
      <li>Nama          : {{$membership->nama}} </li>
      <li>No Handphone  : {{$membership->nohp}}</li>
      <li>Password      : {{$membership->password}} </li>
      <li>Alamat        : {{$membership->alamat}}</li>
    </ul>

    </div>
  </div>
</div>

</body>
</html>
