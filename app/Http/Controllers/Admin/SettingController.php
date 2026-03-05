<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function create()
    {
        $contact = Contact::first();
        return view('admin.contact', compact('contact'));
    }

    public function updateDetails(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:30'],
            'phone_question' => ['required', Helpers::max_without_spaces(40)],
            'fax' => ['required', 'max:30'],
            'address' => ['required', Helpers::max_without_spaces(120)],
            'description' => ['required', Helpers::max_without_spaces(220)],
            'copy_right' => ['required', Helpers::max_without_spaces(70)],
            'office_start' => 'required',
            'office_end' => 'required',
            'social_links' => 'nullable|array',
        ]);



        $contact = Contact::firstOrNew();
        $contact->fill($request->except(['social_links', 'office_start', 'office_end']));
        $contact->social_links = $request->social_links;

        if ($request->office_start && $request->office_end) {
            $start = Carbon::createFromFormat('H:i', $request->office_start)->format('h:i A');
            $end = Carbon::createFromFormat('H:i', $request->office_end)->format('h:i A');
            $contact->office_hours = $start . ' - ' . $end;
        }

        $contact->save();

        return back()->with('success', 'Contact details updated successfully!');
    }


    public function updateLogos(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'white_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,ico,cur|max:1024',
        ]);

        $contact = Contact::firstOrNew();

        if ($request->hasFile('logo')) {
            $imageName = Helpers::upload('logo', $request->logo, $contact->logo, 175, 68);
            $contact->logo = $imageName;
        }

        if ($request->hasFile('white_logo')) {
            $imageName = Helpers::upload('logo', $request->white_logo, $contact->white_logo, 175, 68);
            $contact->white_logo = $imageName;
        }

        if ($request->hasFile('favicon')) {
            $imageName = Helpers::upload('logo', $request->favicon, $contact->favicon, 32, 32);
            $contact->favicon = $imageName;
        }

        $contact->save();

        return back()->with('success', 'Logos and Favicon updated successfully!');
    }

}
