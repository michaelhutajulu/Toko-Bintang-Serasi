@extends('admin.layouts.app')

@section('title', 'Konfigurasi Fasilitas')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Fasilitas</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <x-card>
                <x-slot name="header">
                    <button onclick="addFormFasilitas(`{{ route('fasilitas.store') }}`)" class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </button>
                </x-slot>

                <x-table id="primaryTable" class="table table-striped">
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Gambar Fasilitas</th>
                            <th>Nama Fasilitas</th>
                            <th>Deskripsi Fasilitas</th>
                            <th>Action</th>
                        </tr>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
    @include('admin.konfigurasi.fasilitas.form')
@endsection

@include('admin.konfigurasi.fasilitas.scripts')
