@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">{{ $title }}</h4>
                @if (session('failed'))
                    <div class="alert alert-danger mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('failed') }}
                    </div>
                @endif

            </div>
            <div class="card-body">

                <div class="card-body pt-0">
                    <form class="form-horizontal"
                        action="{{ $data->type == 'create' ? route('majors.store') : route('majors.update', $data->id) }}"
                        method="POST" enctype="multipart/form-data" data-parsley-validate="">
                        @csrf
                        @if ($data->type != 'create')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Program Studi <span class="tx-danger">*</span></label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') parsley-error @enderror" placeholder="Program Studi/Jurusan"
                                        value="{{ $data->name == '' ? old('name') : $data->name }}">
                                    @error('name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Akronim <span class="tx-danger">*</span></label>
                                    <input type="text" name="akronim"
                                        class="form-control @error('akronim') parsley-error @enderror" placeholder="akronim"
                                        value="{{ $data->akronim == '' ? old('akronim') : $data->akronim }}">
                                    @error('akronim')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Logo <span class="tx-danger">*</span></label>
                                    <input type="file" name="logo"
                                        class="form-control @error('logo') parsley-error @enderror" placeholder="logo"
                                        value="{{ $data->logo == '' ? old('logo') : $data->logo }}">
                                    @error('logo')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Video <span class="tx-danger">*</span></label>
                                    <input type="link" name="video"
                                        class="form-control @error('video') parsley-error @enderror" placeholder="https://www.example.com"
                                        value="{{ $data->video == '' ? old('video') : $data->video }}">
                                        <i><span>*</span>Gunakan format http://.www.example.com</i>
                                    @error('video')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Deskripsi <span class="tx-danger">*</span></label>
                                    <textarea name="description" class="form-control @error('description') parsley-error @enderror" rows="5">{{ $data->description == '' ? old('description') : $data->description }}</textarea>
                                    @error('description')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>



                        </div>
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                                <a href="{{ route('majors.index') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
