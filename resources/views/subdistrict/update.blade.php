@extends('layouts.layout')
@section('contents')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('subdistrict.data') }}">Kecamatan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit</li>
                </ol>
            </nav>
        </ol>
    </nav>
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">

                @if (Session::get('fail'))
                    <div class="alert alert-danger py-1 text-center" role="alert">
                        <p style="font-size:  20px">
                            {{ Session::get('fail') }}
                        </p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Kecamatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subdistrict.update', $data->id) }}" method="POST">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-2">
                                        <label class="form-label" for="basicInput">Nama Kecamatan</label>
                                        <input type="text" class="form-control" id="basicInput" name="name"
                                            value="{{ $data->name }}" placeholder="Masukan Nama Kecamatan" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div>
                                        <button class="btn btn-success">Submit</button>
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
