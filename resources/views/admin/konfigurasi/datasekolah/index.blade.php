@extends('admin.layouts.app')

@section('title', 'Konfigurasi Data Sekolah')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Sekolah</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <x-card>
                <x-slot name="header">
                    <button onclick="addFormDataSekolah(`{{ route('datasekolah.store') }}`)" class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </button>
                </x-slot>

                <x-table id="roleTable" class="table table-striped">
                    <x-slot name="thead">rm
                        <th>No</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Action</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
    @include('admin.konfigurasi.datasekolah.form')
@endsection

@include('admin.konfigurasi.datasekolah.scripts')

