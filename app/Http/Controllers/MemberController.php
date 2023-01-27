<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Membership;
use App\Models\Trainer;
use DateTime;
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
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('create')
            ->with('trainers', $trainers)
            ->with('memberships', $memberships);
    }

    public function store(Request $request)
    {
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = new DateTime();
        $member->trainer_id = $request->trainer_id;
        $member->save();
        return redirect()->route('member.index')->with('success', 'New member added');
    }

    public function show(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('show')->with('member', $member);
    }

    public function edit(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('edit')->with('member', $member);
    }

    public function update(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->save();
        return redirect()->route('member.show', $member->id)->with('success', 'Updated member successfully');
    }

    public function destroy(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->delete();
        return redirect()->route('member.index', $member->id)->with('success', 'Member deleted successfully');
    }

    public function showTrainer(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('trainer')->with('member', $member);
    }

    public function showMembership(Request $request)
    {
        $member = Member::findOrFail($request->id);
        return view('membership')->with('member', $member);
    }
}
