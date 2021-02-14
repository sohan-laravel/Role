@extends('backend.layouts.master')
@section('title')
    Roles Page
@endsection

@section('styles')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('admin-content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Roles</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> All Roles</li>
            </ol>
        </div>

        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Role List</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">Role List</li>
                </ol>

            </div>

            <div class="text-right"> <a href="{{ route('admin.roles.create') }}"
                    class="btn btn-outline-primary mb-1 btn-sm">
                    Create Role
                </a>
            </div>

            <!-- Row -->
            <div class="row">
                <!-- Datatables -->

                <!-- DataTable with Hover -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Role List</h6>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Permission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                @foreach ($role->permissions as $perm)
                                                    <span class="badge badge-info mr-1">
                                                        {{ $perm->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                {{-- <a href="#" class="btn btn-outline-danger mb-1 btn-sm">
                                                   
                                                </a> --}}

                                                <a class="btn btn-outline-danger mb-1 btn-sm"
                                                    href="{{ route('admin.roles.destroy', $role->id) }}"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                    <i class="fas fa-trash"></i>
                                                </a>

                                                <form id="delete-form-{{ $role->id }}"
                                                    action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>

                                                <a href="{{ route('admin.roles.edit', $role->id) }}"
                                                    class="btn btn-outline-success mb-1 btn-sm">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->

            <!-- Documentation Link -->


            <!-- Modal Logout -->


        </div>
        <!---Container Fluid-->


    </div>

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });

    </script>
@endsection
