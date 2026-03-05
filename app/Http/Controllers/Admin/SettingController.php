<?php

namespace App\Http\Controllers\Admin;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SettingController extends Controller
{
    public function create()
    {
        $setting = Setting::first();
        return view('admin.setting', compact('setting'));
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



        $setting = Setting::firstOrNew();
        $setting->fill($request->except(['social_links', 'office_start', 'office_end']));
        $setting->social_links = $request->social_links;

        if ($request->office_start && $request->office_end) {
            $start = Carbon::createFromFormat('H:i', $request->office_start)->format('h:i A');
            $end = Carbon::createFromFormat('H:i', $request->office_end)->format('h:i A');
            $setting->office_hours = $start . ' - ' . $end;
        }

        $setting->save();

        return back()->with('success', 'Settings updated successfully!');
    }


    public function updateLogos(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'white_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,ico,cur|max:2048',
        ]);

        $setting = Setting::firstOrNew();

        if ($request->hasFile('logo')) {
            $imageName = Helpers::upload('logo', $request->logo, $setting->logo, 175, 68);
            $setting->logo = $imageName;
        }

        if ($request->hasFile('white_logo')) {
            $imageName = Helpers::upload('logo', $request->white_logo, $setting->white_logo, 175, 68);
            $setting->white_logo = $imageName;
        }

        if ($request->hasFile('favicon')) {
            $imageName = Helpers::upload('logo', $request->favicon, $setting->favicon, 32, 32);
            $setting->favicon = $imageName;
        }

        $setting->save();

        return back()->with('success', 'Logos and Favicon updated successfully!');
    }

}
