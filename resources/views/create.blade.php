@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div>
            <h1>
                Create Member
            </h1>
        </div>
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <form action={{ route('member.store' )}} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="membership_type" class="form-label">
                                Membership Type
                            </label>
                            <input type="text" class="form-control" id="membership_type" name="membership_type">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop