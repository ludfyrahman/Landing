@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{$title}}</h4>
                    <a href="{{ route('agenda.create') }}" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i> Tambah
                        </a>

                </div>
                <p class="tx-12 tx-gray-500 mb-2">{{$title}}</p>
                @if (session('success'))
                    <div class="alert alert-success mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-bs-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-20p border-bottom-0">Agenda</th>
                                <th class="wd-20p border-bottom-0">Tanggal</th>
                                <th class="wd-20p border-bottom-0">Lokasi</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->start_date)->format('d / M / Y') }} - {{Carbon\Carbon::parse($item->end_date)->format('d / M / Y')}}</td>
                                    <td>{{$item->location}}</td>
                                    <td><span class="badge bg-primary">{{ $item->status }}</span></td>
                                    <td class="d-flex"><a href="{{ route('agenda.edit', $item->id)}}" class="btn btn-sm btn-info me-2"> <i class="mdi mdi-pencil"></i>
                                            Ubah</a>
                                        <form method="POST" action="{{route('agenda.destroy', $item->id)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus data ??')" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i>
                                            Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
