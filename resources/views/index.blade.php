@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Members
            </h1>
            <div>
                <a href={{ route('member.create') }} class="btn btn-primary">Create Member</a>
            </div>
        </div>
        @if (session('success'))
            <div class="mb-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Membership Type</th>
                        <th scope="col">Membership Expiration</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                    <tr>
                        <th scope="row">{{ $member->id }}</th>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->membership_type }}</td>
                        <td>{{ $member->membership_expiration }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href={{ route('member.show', $member->id) }} class="btn btn-primary">View</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop