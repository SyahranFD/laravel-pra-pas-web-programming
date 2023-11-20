@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <table class="table">
      <thead class="table-success">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-group-divider table-light">
        @foreach ($bahans as $key => $bahan)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $bahan["nama"] }}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/bahan/detail/{{ $bahan->id }}">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
