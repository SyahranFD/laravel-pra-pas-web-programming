@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/bahan/all">back</a>
    <h1>Detail bahan {{ $bahan->nama }}</h1>
    <table class="table ">
      <thead class="table-success">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Merek</th>
          <th scope="col">Stok</th>
          <th scope="col">Berat</th>
          <th scope="col">Tanggal kadaluwarsa</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        <tr>
            <td>{{ $bahan->nama }}</td>
            <td>{{ $bahan->merek }}</td>
            <td>{{ $bahan->stok }}</td>
            <td>{{ $bahan->berat }}</td>
            <td>{{ $bahan->tanggal_kadaluwarsa }}</td>
        </tr>
      </tbody>
    </table>
@endsection
