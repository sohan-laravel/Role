@extends('backend.layouts.master')
@section('title')
    Edit Role Page
@endsection

@section('styles')

@endsection
@section('admin-content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Role - {{ $role->name }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">All Role</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Dashboard</li>
            </ol>
        </div>
        {{-- @include('backend.partials.messages') --}}
        <form action="{{ route('admin.roles.update', $role->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" name="name" value="{{ $role->name }}" id="name"
                    aria-describedby="emailHelp" placeholder="Enter a new role">
            </div>

            <div class="form-group">
                <label for="name">Permission</label>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkPermissionAll" value="1"
                            {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="checkPermissionAll">All</label>
                    </div>
                </div>
                <hr>

                @php $i = 1; @endphp
                @foreach ($permission_groups as $group)
                    <div class="row">
                        @php
                            $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                            $j = 1;
                        @endphp
                        <div class="col-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="{{ $i }}Management"
                                    value="{{ $group->name }}"
                                    onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)"
                                    {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                            </div>
                        </div>

                        <div class="col-9 role-{{ $i }}-management-checkbox">

                            @foreach ($permissions as $permission)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="permissions[]"
                                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                        id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                    <label class="form-check-label"
                                        for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                </div>
                                @php  $j++; @endphp
                            @endforeach
                            <br>
                        </div>

                    </div>
                    @php  $i++; @endphp
                @endforeach


                {{-- @php $i = 1; @endphp

                @foreach ($permission_group as $group)
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{ $i }}Management"
                                        value="{{ $group->name }}"
                                        onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                    <label class="custom-control-label" for="checkPermission">{{ $group->name }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-9 role-{{ $i }}-management-checkbox">
                            @php
                                $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                $j = 1;
                            @endphp
                            @foreach ($permissions as $permission)
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="permissions[]"
                                            id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                        <label class="custom-control-label"
                                            for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                </div>
                                @php  $j++; @endphp
                            @endforeach
                        </div>
                    </div>
                    @php  $i++; @endphp
                @endforeach --}}



            </div>



            {{-- <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary">Save</button>
        </form>


    </div>

@endsection

@section('scripts')

    <!-- Page level custom scripts -->
    @include('backend.pages.roles.partials.scripts')
@endsection
