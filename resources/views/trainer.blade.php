@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                {{ $member->name }}'s Trainer Details
            </h1>
            <div>
                <a href={{ route('member.show', $member->id) }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <p>
                        Name: {{ $member->trainer->name }}
                    </p>
                    <p>
                        Email: {{ $member->trainer->email }}
                    </p>
                    <p>
                        Specialization: {{ $member->trainer->specialization }}
                    </p>
                    <p>
                        Phone: {{ $member->trainer->phone }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop