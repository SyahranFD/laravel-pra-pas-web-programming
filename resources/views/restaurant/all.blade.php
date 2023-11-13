@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <table class="table">
      <thead class="table-success">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        @foreach ($restaurants as $key => $restaurant)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $restaurant["nama"] }}</td>
            <td>{{ $restaurant["alamat"] }}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/restaurant/detail/{{ $restaurant->id }}">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
