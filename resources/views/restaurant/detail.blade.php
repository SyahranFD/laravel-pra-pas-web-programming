@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <a href="/restaurant/all">back</a>
    <h1>Detail restaurant {{ $restaurant->nama }}</h1>
    <table class="table ">
      <thead class="table-success">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor Telepon</th>
          <th scope="col">Tanggal Dibuka</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        <tr>
            <td>{{ $restaurant->nama }}</td>
            <td>{{ $restaurant->alamat }}</td>
            <td>{{ $restaurant->nomor_telepon }}</td>
            <td>{{ $restaurant->tanggal_dibuka }}</td>
        </tr>
      </tbody>
    </table>
@endsection
