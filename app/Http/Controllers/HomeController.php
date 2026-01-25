<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'overview' => 'The ICS Group opened its offices in Karachi in 1983, building and maintaining a solid network for all its logistical needs. With total dedication, it has made a leading name in logistics, pharma, distribution, Information technology and Automobiles. For the last three decades it has facilitated and served its domestic and international clients with dedication and integrity. ICS aims to develop into a coherent and vibrant group of divergent companies in business areas of logistics, pharmaceutical marketing & sales, cargo handling, distribution of consumer items, information technology and automobiles. We believe in creating and maintain excellence in quality of products and services we offer with determination.',
            'stats' => [
                ['number' => '1983', 'label' => 'Year Established'],
                ['number' => '30+', 'label' => 'Years of Dedication'],
                ['number' => '5+', 'label' => 'Business Verticals'],
                ['number' => 'Karachi', 'label' => 'Headquarters']
            ],
            'services' => [
                [
                    'icon' => 'bi-truck',
                    'title' => 'Logistics',
                    'description' => 'Leading business of specialized clearing, forwarding and logistic services since 1994.'
                ],
                [
                    'icon' => 'bi-capsule',
                    'title' => 'Pharma',
                    'description' => 'Dealing in Oncology, Thalassaemia, Gastroenterology, and more since 2004.'
                ],
                [
                    'icon' => 'bi-cpu',
                    'title' => 'Technology',
                    'description' => 'Advanced technology solutions driving digital transformation and innovation.'
                ],
                [
                    'icon' => 'bi-car-front',
                    'title' => 'Automobiles',
                    'description' => 'Launched in collaboration with Deinfa Motors for high-quality automobile services.'
                ],
                [
                    'icon' => 'bi-shield-lock',
                    'title' => 'Security',
                    'description' => 'Comprehensive and proactive security solutions upholding the highest standards.'
                ]
            ],
            'brands' => [
                [
                    'name' => 'ICS LOGISTICS',
                    'description' => 'Leading name in Pakistan’s freight forwarding industry.',
                    'url' => 'http://www.icslogistics.com.pk'
                ],
                [
                    'name' => 'SCANWELL LOGISTICS',
                    'description' => 'Wide range of customized global logistics solutions.',
                    'url' => 'https://www.scanwell.com/'
                ],
                [
                    'name' => 'AJM PHARMA',
                    'description' => 'Committed to community\'s health since 2004.',
                    'url' => 'http://www.ajmpharma.com'
                ],
                [
                    'name' => 'ZSS',
                    'description' => 'Proactive security solutions with high standards.',
                    'url' => 'http://www.zss.com/s'
                ],
                [
                    'name' => 'TOYOTA CREEK',
                    'description' => 'High quality repairs and best customer service.',
                    'url' => 'http://www.toyotacreek.com'
                ]
            ]
        ];

        return view('home', $data);
    }
}
