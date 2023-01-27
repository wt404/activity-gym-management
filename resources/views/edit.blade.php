@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Edit Member
            </h1>
            <div>
                <a href={{ route('member.show', $member->id) }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <form action={{ route('member.update', $member->id )}} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="trainer" class="form-label">
                                Trainer
                            </label>
                            <select class="form-select" name="trainer_id">
                                @foreach ($trainers as $trainer)
                                    <option {{ $member->trainer_id == $trainer->id ? 'selected' : '' }} value="{{ $trainer->id }}">{{ $trainer->name }} - {{ $trainer->specialization }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="membership_type" class="form-label">
                                Membership Type
                            </label>
                            <select class="form-select" name="membership_id">
                                @foreach ($memberships as $membership)
                                    <option {{ $member->membership_id == $membership->id ? 'selected' : '' }} value="{{ $membership->id }}">{{ $membership->membership_type }} - {{ $membership->membership_price }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop