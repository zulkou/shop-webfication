<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Data Membership</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit Data Membership</h1>
      <hr>

      <form action="{{ route('membership.update',['membership' => $membership->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text"
          class="form-control @error('username') is-invalid @enderror"
          id="username" name="username" value="{{ old('username') ?? $membership->username }}">
          @error('username')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text"
          class="form-control @error('nama') is-invalid @enderror"
          id="nama" name="nama" value="{{ old('nama') ?? $membership->nama }}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="nohp">Nomor Handphone</label>
            <input type="string"
            class="form-control @error('nohp') is-invalid @enderror"
            id="nohp" name="nohp" value="{{ old('nohp') ?? $membership->nohp }}">
            @error('nohp')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"
            class="form-control @error('password') is-invalid @enderror"
            id="password" name="password" value="{{ old('password') ?? $membership->password }}">
            @error('password')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="5"
          name="alamat">{{ old('alamat') ?? $membership->alamat}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
