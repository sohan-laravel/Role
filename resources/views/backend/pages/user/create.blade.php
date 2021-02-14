@extends('backend.layouts.master')
@section('title')
    Create New User Page
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('admin-content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create New User</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">All User</a></li>
            </ol>
        </div>
        @include('backend.partials.messages')
        <form action="{{ route('admin.users.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                    placeholder="Enter user name">
            </div>
            <div class="form-group">
                <label for="email">User Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                    placeholder="Enter user email">
            </div>
            <div class="form-group">
                <label for="password">User Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp"
                    placeholder="Enter user password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">User Confirmation Email</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" aria-describedby="emailHelp"
                    placeholder="Enter user confirm password">
            </div>
            <div class="form-group">
                <label for="AssignRole">Assign Role</label>
                <select name="roles[]" id="roles" class="form-control select2" multiple>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
            </select>
            </div>

            


            {{-- <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary">User Save</button>
        </form>


    </div>

@endsection

@section('scripts')

    <!-- Page level custom scripts -->
    {{-- @include('backend.pages.user.partials.scripts') --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
    $('.select2').select2();
});
    </script>
@endsection
