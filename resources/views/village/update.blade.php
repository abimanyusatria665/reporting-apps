@extends('layouts.layout')
@section('contents')
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Kecamatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('village.update', $village->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="basicInput">Pilih Kecamatan</label>
                                            <select name="subdistrict" id="" class="form-select">
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id = $subdistrict->id) selected @endif>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="basicInput">Nama Desa</label>
                                            <input type="text" class="form-control" id="basicInput" name="name"
                                                value="{{ $village->name }}" placeholder="Masukan Nama Desa" />
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
        </div>
    </section>
@endsection
