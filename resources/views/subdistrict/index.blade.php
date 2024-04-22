@extends('layouts.layout')
@section('contents')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Kecamatan</li>
        </ol>
    </nav>
    @if (Session::get('success'))
        <div class="alert alert-success py-1 text-center" role="alert">
            <p style="font-size: 20px">
                {{ Session::get('success') }}
            </p>
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger py-1 text-center" role="alert">
            <p style="font-size:  20px">
                {{ Session::get('fail') }}
            </p>
        </div>
    @endif
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Data Kecamatan</h1>
                    <a href="/subdistrict/create" class="btn btn-primary">Tambah Kecamatan</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kecamatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('subdistrict.details', $item['id']) }}"
                                            class="btn btn-success">See Details</a>
                                        <a href="{{ route('subdistrict.edit', $item->id) }}"
                                            class="btn btn-warning ms-1">Edit</a>
                                        <form action="{{ route('subdistrict.delete', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger ms-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @foreach ($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td class="d-flex">
                                        <a href="/product/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                        <form action="/product/delete/{{ $item->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger ms-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
