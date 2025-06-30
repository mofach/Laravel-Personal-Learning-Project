<!DOCTYPE html>
<html>

<head>
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <h1 class="mb-4">Data Mahasiswa</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($mahasiswas as $mhs)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button onclick="return confirm('Yakin hapus?')" type="submit"
          class="btn btn-sm btn-danger">Hapus</button>
        </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="5" class="text-center">Belum ada data.</td>
      </tr>
    @endforelse
      </tbody>
    </table>
  </div>
</body>

</html>