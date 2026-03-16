<?php

namespace App\Http\Controllers\Admin;

use App\CentralLogics\Helpers;
use App\Http\Controllers\Controller;
use App\Models\BusinessVertical;
use Illuminate\Http\Request;

class BusinessVerticalController extends Controller
{
    public function create()
    {
        $bv = BusinessVertical::first();
        return view('admin.business-vertical', compact('bv'));
    }

    public function update(Request $request)
    {
        $request->validate([
            // Banner
            'banner' => ['nullable', 'image', 'max:5000'],
            'banner_heading' => ['required', Helpers::max_without_spaces(60)],
            'banner_sub_heading' => ['required', Helpers::max_without_spaces(60)],
            // About
            'about_image_1' => ['nullable', 'image', 'max:5000'],
            'about_image_2' => ['nullable', 'image', 'max:5000'],
            'about_heading' => ['required', Helpers::max_without_spaces(100)],
            // Feature 1
            'feature_1_class' => ['required'],
            'feature_1_title' => ['required', Helpers::max_without_spaces(50)],
            'feature_1_text' => ['required', Helpers::max_without_spaces(150)],
            // Feature 2
            'feature_2_class' => ['required'],
            'feature_2_title' => ['required', Helpers::max_without_spaces(60)],
            'feature_2_text' => ['required', Helpers::max_without_spaces(150)],
            // BV Section
            'business_verticals_heading' => ['required', Helpers::max_without_spaces(50)],
            'business_verticals_sub_heading' => ['required', Helpers::max_without_spaces(60)],
            'business_verticals_text' => ['required'],
            // Bottom section
            'video_image' => ['nullable', 'image', 'max:5000'],
            'video_url' => ['required'],
            'video_label' => ['required', Helpers::max_without_spaces(40)],
            'bottom_tag' => ['required', Helpers::max_without_spaces(50)],
            'bottom_heading' => ['required', Helpers::max_without_spaces(80)],
            'bottom_description' => ['required', Helpers::max_without_spaces(500)],
            'bottom_bullets' => ['sometimes', 'array'],
            'bottom_bullets.*' => ['required', Helpers::max_without_spaces(60)],
        ]);

        $bv = BusinessVertical::firstOrNew();

        $bv->banner_heading = $request->banner_heading;
        $bv->banner_sub_heading = $request->banner_sub_heading;
        $bv->about_heading = $request->about_heading;
        $bv->feature_1_class = $request->feature_1_class;
        $bv->feature_1_title = $request->feature_1_title;
        $bv->feature_1_text = $request->feature_1_text;
        $bv->feature_2_class = $request->feature_2_class;
        $bv->feature_2_title = $request->feature_2_title;
        $bv->feature_2_text = $request->feature_2_text;
        $bv->business_verticals_heading = $request->business_verticals_heading;
        $bv->business_verticals_sub_heading = $request->business_verticals_sub_heading;
        $bv->business_verticals_text = $request->business_verticals_text;
        $bv->video_url = Helpers::extractYouTubeId($request->video_url)[0] ?? $bv->video_url;
        $bv->video_label = $request->video_label;
        $bv->bottom_tag = $request->bottom_tag;
        $bv->bottom_heading = $request->bottom_heading;
        $bv->bottom_description = $request->bottom_description;
        $bv->bottom_bullets = array_values(array_filter($request->bottom_bullets ?? []));

        // Handle image uploads
        if ($request->hasFile('banner')) {
            $bv->banner = Helpers::upload('business-verticals', $request->banner, $bv->getAttributes()['banner'] ?? null, 1920, 600);
        }
        if ($request->hasFile('about_image_1')) {
            $bv->about_image_1 = Helpers::upload('business-verticals', $request->about_image_1, $bv->getAttributes()['about_image_1'] ?? null, 800, 900);
        }
        if ($request->hasFile('about_image_2')) {
            $bv->about_image_2 = Helpers::upload('business-verticals', $request->about_image_2, $bv->getAttributes()['about_image_2'] ?? null, 800, 800);
        }
        if ($request->hasFile('video_image')) {
            $bv->video_image = Helpers::upload('business-verticals', $request->video_image, $bv->getAttributes()['video_image'] ?? null, 800, 800);
        }

        $bv->save();

        return back()->with('success', 'Business Verticals page updated successfully!');
    }
}
