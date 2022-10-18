@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-1">Tambah Data User</h4>
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
                    <form class="form-horizontal" action="{{ $data->type == 'create' ? route('customer.store') : route('customer.update',$data->id) }}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate="">
                        @csrf
                        @if($data->type != 'create')
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan <span class="tx-danger">*</span></label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') parsley-error @enderror"
                                        placeholder="Nama" value="{{$data->nama}}">
                                    @error('nama')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telepon <span class="tx-danger">*</span></label>
                                    <input type="text" name="telepon"
                                        class="form-control @error('telepon') parsley-error @enderror"
                                        placeholder="telepon" value="{{$data->telepon}}">
                                    @error('telepon')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Instasi</label>
                                    <input type="text" name="instansi"
                                        class="form-control @error('instansi') parsley-error @enderror"
                                        placeholder="Instansi(Opsional)" value="{{$data->instansi}}">
                                    @error('instansi')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telepon Instansi </label>
                                    <input type="text" name="telepon_instansi"
                                        class="form-control @error('telepon_instansi') parsley-error @enderror"
                                        placeholder="Telepon Instansi(Opsional)" value="{{$data->telepon_instansi}}">
                                    @error('telepon_instansi')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat <span class="tx-danger">*</span></label>
                                    <input type="text" name="alamat"
                                        class="form-control @error('alamat') parsley-error @enderror"
                                        placeholder="alamat" value="{{$data->alamat}}">
                                    @error('alamat')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status <span class="tx-danger">*</span></label>

                                    @php $status = $data->status; @endphp
                                    <select name="status" id="" class="form-control" required>
                                        <option value="">Pilih Status</option>
                                        <option {{$status == 'Aktif' ? 'selected' : ''}} value="Aktif">Aktif</option>
                                        <option {{$status == 'Nonaktif' ? 'selected' : ''}} value="Nonaktif">Nonaktif</option>
                                    </select>
                                    @error('status')
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
                                <a href="{{ route('supplier.index') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection