@extends('voyager::master')

@section('page_title', 'Парсер новостей')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-down-circled"></i> Парсер новостей
        </h1>
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@elseif (session()->has('error'))
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
@if (isset($success))
<div class="alert alert-success">{{ $success }}</div>
@endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        {{-- @include('inc.message') --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Url</th>
                            <th>Описание</th>
                            <th width="2%">Управление</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Url</th>
                            <th>Описание</th>
                            <th width="2%">Управление</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($resources as $resource)
                            <tr>
                                <td>{{ $resource->id }}</td>
                                <td>{{ $resource->url }}</td>
                                <td>{{ $resource->description }}</td>
                                <td>
                                    <a href="{{ route('voyager.resources.parce', ['resource' => $resource->id]) }}"
                                        class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>Запустить
                                    </a>
                                    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Ресурсов нет</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('javascript')
    <!-- DataTables -->

    <script src="{{ asset('vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('vendors/datatables/datatables-demo.js') }}"></script>

@stop
