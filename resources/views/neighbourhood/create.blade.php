@php
    $isActive = true;
@endphp
@extends('layouts.layout')
@section('contents')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('village.data', $data->id) }}">Desa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah RW</li>
                </ol>
            </nav>
        </ol>
    </nav>
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah RW</h4>
                    </div>
                    <form action="{{ route('neighbourhood.store', $data->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="basicInput">Nama RW</label>
                                        <input type="text" class="form-control" id="basicInput" name="name"
                                            placeholder="Masukan Nama RW" />
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
