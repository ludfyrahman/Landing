@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">{{$title}}</h4>
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
                        action="{{ $data->type == 'create' ? route('teachers.store') : route('teachers.update', $data->id) }}"
                        method="POST" enctype="multipart/form-data" data-parsley-validate="">
                        @csrf
                        @if ($data->type != 'create')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">NIP <span class="tx-danger">*</span></label>
                                    <input type="text" name="nip"
                                        class="form-control @error('nip') parsley-error @enderror"
                                        placeholder="NIP Guru" value="{{ $data->nip }}">
                                    @error('nip')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Guru <span class="tx-danger">*</span></label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') parsley-error @enderror"
                                        placeholder="Nama Guru" value="{{ $data->name }}">
                                    @error('name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Hp <span class="tx-danger">*</span></label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') parsley-error @enderror"
                                        placeholder="No Hp" value="{{ $data->phone }}">
                                    @error('phone')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Foto </label>
                                    @if ($data->type != 'create')
                                    <a href="{{ url('storage/teachers/'.$data->photo) }}">Lihat Foto Guru</a>
                                    @endif
                                    <input type="file" class="form-control @error('photo') parsley-error @enderror" name='photo'>
                                    @error('photo')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat <span class="tx-danger">*</span></label>
                                    <textarea name="address" class="form-control @error('address') parsley-error @enderror" rows="5">{{ $data->address }}</textarea>
                                    @error('address')
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
                                @if ($data->type == 'create')
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                @endif
                                <a href="{{ route('teachers.index') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
