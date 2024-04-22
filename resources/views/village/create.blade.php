@php
    $isActive = true;
@endphp
@extends('layouts.layout')
@section('contents')
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Desa</h4>
                    </div>
                    <form action="{{ route('village.store', $subdistrict->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row align-items-center">
                                {{-- <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="basicInput">Pilih Kecamatan</label>
                                        <select name="subdistrict" id="" class="form-select">
                                            @foreach ($subdistrict as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="basicInput">Nama Desa</label>
                                        <input type="text" class="form-control" id="basicInput" name="name"
                                            placeholder="Masukan Nama Desa" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div>
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
