@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                {{ $member->name }}'s Membership Details
            </h1>
            <div>
                <a href={{ route('member.show', $member->id) }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <p>
                        Type: {{ $member->membership->membership_type }}
                    </p>
                    <p>
                        Price: {{ $member->membership->membership_price }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop