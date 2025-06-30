<!DOCTYPE html>
<html>

<head>
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <h1 class="mb-4">Edit Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Jurusan</label>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>

</html>