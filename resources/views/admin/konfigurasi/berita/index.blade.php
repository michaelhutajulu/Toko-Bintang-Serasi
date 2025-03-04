@extends('admin.layouts.app')

@section('title', 'Konfigurasi Berita')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Berita</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <x-card>
                <x-slot name="header">
                    <button onclick="addFormBerita(`{{ route('berita.store') }}`)" class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </button>
                </x-slot>

                <x-table id="roleTable" class="table table-striped">
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
    @include('admin.konfigurasi.berita.form')
@endsection

@include('admin.konfigurasi.berita.scripts')
