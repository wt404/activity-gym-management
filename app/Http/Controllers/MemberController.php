<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = Member::all();
        return view('index')->with('members', $members);
    }

    public function create(Request $request)
    {
        // TODO: Return view -> create
    }

    public function store(Request $request)
    {
        // TODO: Store new member
    }

    public function show(Request $request)
    {
        // TODO: Return member by id
    }

    public function update(Request $request)
    {
        // TODO: Update member by id
    }

    public function destroy(Request $request)
    {
        // TODO: Delete member by id
    }
}
