<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactPage;
use App\CentralLogics\Helpers;

class ContactPageController extends Controller
{
    public function create()
    {
        $contact = ContactPage::first();
        return view('admin.contact', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner' => 'nullable|image|max:5000',
            'banner_heading' => ['required', Helpers::max_without_spaces(60)],
            'banner_sub_heading' => ['required', Helpers::max_without_spaces(60)],
            'support_heading' => ['required', Helpers::max_without_spaces(40)],
            'support_text' => ['required', Helpers::max_without_spaces(150)],
            'support_image' => 'nullable|image|max:5000',
            'contact_page_heading' => ['required', Helpers::max_without_spaces(60)],
            'contact_page_message' => ['required', Helpers::max_without_spaces(500)],
        ]);

        $contact = ContactPage::firstOrNew();

        $contact->banner_heading = $request->banner_heading;
        $contact->banner_sub_heading = $request->banner_sub_heading;
        $contact->support_heading = $request->support_heading;
        $contact->support_text = $request->support_text;
        $contact->contact_page_heading = $request->contact_page_heading;
        $contact->contact_page_message = $request->contact_page_message;

        if ($request->hasFile('banner')) {
            $imageName = Helpers::upload('contact', $request->banner, $contact->getAttributes()['banner'] ?? null, 2440, 1578);
            $contact->banner = $imageName;
        }

        if ($request->hasFile('support_image')) {
            $imageName = Helpers::upload('contact', $request->support_image, $contact->getAttributes()['support_image'] ?? null, 800, 800);
            $contact->support_image = $imageName;
        }

        $contact->save();

        return back()->with('success', 'Contact page updated successfully!');
    }
}
