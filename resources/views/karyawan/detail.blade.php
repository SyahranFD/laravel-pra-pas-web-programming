@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/karyawan/all">back</a>
    <h1>Detail Karyawan {{ $karyawan->nama }}</h1>
    <table class="table ">
      <thead class="table-success">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Gaji</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        <tr>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->tanggal_lahir }}</td>
            <td>{{ $karyawan->gaji }}</td>
        </tr>
      </tbody>
    </table>
@endsection
