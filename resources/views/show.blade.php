@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Member Details
            </h1>
            <div>
                <a href={{ route('member.index') }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        @if (session('success'))
            <div class="mb-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <p>
                        Name: {{ $member->name }}
                    </p>
                    <p>
                        Email: {{ $member->email }}
                    </p>
                    <p>
                        Membership Type: {{ $member->membership_type }}
                    </p>
                    <p>
                        Membership Expiration: {{ $member->membership_expiration }}
                    </p>
                    <p>
                        Trainer: <a href={{ route('member.trainer', $member->id) }}>{{ $member->trainer->name }}</a>
                    </p>
                    <p>
                        Membership Type: <a href={{ route('member.membership', $member->id) }}>{{ $member->membership->membership_type }}</a>
                    </p>
                    <a href={{ route('member.edit', $member->id) }} class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
@stop