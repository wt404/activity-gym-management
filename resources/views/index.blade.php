@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div>
            <h1>
                Members
            </h1>
        </div>
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
                    <tr>
                        <th scope="row">0</th>
                        <td>Jason</td>
                        <td>jason@gmail.com</td>
                        <td>type</td>
                        <td>expiration</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop