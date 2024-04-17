<?php

namespace App\Http\Controllers\SoulAdvisor;

use App\Models\SoulAdvisor\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {
        return view('soul-advisor.index');
    }

    public function create() {
        return view('soul-advisor.create', [
            'profile' => auth()->user()->profile
        ]);
    }

    public function show() {
        return view('soul-advisor.profile.show', [
            'profile' => auth()->user()->profile
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'fullname' => 'required',
            'photo' => 'required|image',
            'email' => 'required|email',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'profession' => 'required',
            'organization' => 'required',
            'website' => 'required',
            'summary' => 'required',
            'education' => 'required',
            'work_history' => 'required',
            'service_category' => 'required',
            'service_description' => 'required',
            'hourly_rate' => 'required|integer',
            'package_prices' => 'required|integer',
            'working_hours' => 'required',
            'appointment_booking' => 'required',
            'specializations' => 'required',
            'languages' => 'required',
            'certifications' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['photo'] = request()->file('photo')->store('photos');

        Profile::create($attributes);

        return redirect()->route('list-practice.index');
    }

    public function update(Profile $profile) {
        $attributes = request()->validate([
            'fullname' => 'required',
            'photo' => 'image',
            'email' => 'required|email',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'profession' => 'required',
            'organization' => 'required',
            'website' => 'required',
            'summary' => 'required',
            'education' => 'required',
            'work_history' => 'required',
            'service_category' => 'required',
            'service_description' => 'required',
            'hourly_rate' => 'required|integer',
            'package_prices' => 'required|integer',
            'working_hours' => 'required',
            'appointment_booking' => 'required',
            'specializations' => 'required',
            'languages' => 'required',
            'certifications' => 'required'
        ]);

        if(isset($attributes['photo'])) {
            $attributes['photo'] = request()->file('photo')->store('photos');
        }

        $profile->update($attributes);

        return redirect()->route('list-practice.index')->with('success', 'Profile Updated');
    }
}
