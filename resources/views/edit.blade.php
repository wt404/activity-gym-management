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
                            <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="membership_type" class="form-label">
                                Membership Type
                            </label>
                            <input type="text" class="form-control" id="membership_type" name="membership_type" value="{{ $member->membership_type }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop