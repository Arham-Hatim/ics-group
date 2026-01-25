<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the services page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'services' => [
                [
                    'icon' => 'bi-truck',
                    'title' => 'Logistics',
                    'description' => 'ICS Logistics has grown to become one of the leading names in Pakistan’s freight forwarding industry. We offer specialized clearing, forwarding, and logistic services.',
                    'features' => [
                        'Freight Forwarding',
                        'Customized Logistics Solutions',
                        'Inland Distribution',
                        'Supply Chain Support'
                    ]
                ],
                [
                    'icon' => 'bi-capsule',
                    'title' => 'Pharma',
                    'description' => 'AJM Pharma deals in Oncology, Thalassaemia, Gastroenterology, Nephrology, HIV/AIDS, Gynaecology & General Medicine. We are committed to community health.',
                    'features' => [
                        'Oncology & Thalassaemia',
                        'Gastroenterology & Nephrology',
                        'HIV/AIDS Solutions',
                        'General Medicine'
                    ]
                ],
                [
                    'icon' => 'bi-cpu-fill',
                    'title' => 'Technology',
                    'description' => 'We provide advanced technology solutions that drive digital transformation and operational efficiency for businesses across various sectors.',
                    'features' => [
                        'IT Infrastructure',
                        'Software Development',
                        'Digital Transformation',
                        'Cybersecurity'
                    ]
                ],
                [
                    'icon' => 'bi-car-front-fill',
                    'title' => 'Automobiles',
                    'description' => 'Toyota Creek, a company of the ICS Group, provides the highest quality automobile repairs and customer service in collaboration with Deinfa Motors.',
                    'features' => [
                        'Vehicle Sales',
                        'Quality Repairs',
                        'Customer Service',
                        'Automotive Solutions'
                    ]
                ],
                [
                    'icon' => 'bi-shield-lock-fill',
                    'title' => 'Security',
                    'description' => 'ZSS delivers comprehensive and proactive security solutions while upholding the highest standards of training, conduct, and discipline.',
                    'features' => [
                        'Proactive Security Solutions',
                        'Client-Focused Approach',
                        'Operational Security',
                        'Training & Discipline'
                    ]
                ]
            ]
        ];

        return view('services', $data);
    }
}
