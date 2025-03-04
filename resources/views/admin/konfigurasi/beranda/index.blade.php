@extends('admin.layouts.app')

@section('title', 'Konfigurasi Beranda')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Beranda</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <x-card>
                <x-slot name="header">
                    <button onclick="addFormBeranda(`{{ route('beranda.store') }}`)" class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </button>
                </x-slot>

                <x-table id="roleTable" class="table table-striped">
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama Ketua Yayasan</th>
                        <th>Kata Sambutan Ketua Yayasan</th>
                        <th>Gambar Ketua Yayasan</th>
                        <th>Nama Kepala Sekolah</th>
                        <th>Kata Sambutan Kepala Sekolah</th>
                        <th>Gambar Kepala Sekolah</th>
                        <th>Aksi</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
    @include('admin.konfigurasi.beranda.form')
@endsection

@include('admin.konfigurasi.beranda.scripts')
