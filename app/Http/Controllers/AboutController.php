<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about', $this->getAboutData());
    }

    private function getAboutData()
    {
        return [
            'mission' => 'To deliver innovative solutions that drive sustainable growth and create lasting value for our clients and communities.',
            'vision' => 'To be a global leader in providing integrated business solutions that transform industries and improve lives.',
            'values' => [
                [
                    'icon' => 'bi-shield-check',
                    'title' => 'Integrity',
                    'description' => 'We uphold the highest standards of integrity in all our actions.'
                ],
                [
                    'icon' => 'bi-lightbulb-fill',
                    'title' => 'Innovation',
                    'description' => 'We constantly seek new and better ways to serve our clients.'
                ],
                [
                    'icon' => 'bi-people-fill',
                    'title' => 'Excellence',
                    'description' => 'We strive for excellence in everything we do.'
                ],
                [
                    'icon' => 'bi-globe',
                    'title' => 'Sustainability',
                    'description' => 'We are committed to sustainable and responsible business practices.'
                ]
            ],
            'team' => [
                [
                    'name' => 'John Anderson',
                    'position' => 'Chief Executive Officer',
                    'image' => 'team-1.jpg'
                ],
                [
                    'name' => 'Sarah Mitchell',
                    'position' => 'Chief Operations Officer',
                    'image' => 'team-2.jpg'
                ],
                [
                    'name' => 'Michael Chen',
                    'position' => 'Chief Technology Officer',
                    'image' => 'team-3.jpg'
                ],
                [
                    'name' => 'Emily Rodriguez',
                    'position' => 'Chief Financial Officer',
                    'image' => 'team-4.jpg'
                ]
            ]
        ];
    }

    public function strategy()
    {
        return view('about.strategy', $this->getAboutData());
    }

    public function people()
    {
        return view('about.people', $this->getAboutData());
    }

    public function journey()
    {
        return view('about.journey', $this->getAboutData());
    }
}
