@extends('admin.layouts.app')

@section('title', 'Konfigurasi Data Alumni')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Alumni</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <x-card>
                <x-slot name="header">
                    <button onclick="addFormDataAlumni(`{{ route('dataalumni.store') }}`)" class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </button>
                </x-slot>

                <x-table id="roleTable" class="table table-striped">
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama Alumni</th>
                        <th>Tahun Lulus</th>
                        <th>Action</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
    @include('admin.konfigurasi.dataalumni.form')
@endsection

@include('admin.konfigurasi.dataalumni.scripts')
