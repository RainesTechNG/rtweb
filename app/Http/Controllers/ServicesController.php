<?php

namespace App\Http\Controllers;

use App\Entity\ServiceRequest;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    protected $services = [
        'Mobile Applications'       => 'mobile-application-development',
        'Desktop Applications'      => 'desktop-application-development',
        'Web/Cloud Applications'    => 'web-cloud-application-development',
        'Websites'                  => 'website-development',
        'Home & Office Networks'    => 'home-office-network',
        'Locator & Tracker'         => 'tracking',
        'Surveillance Systems'      => 'surveillance-systems',
        'Photo & Video Coverage'    => 'photo-video-coverage',
        'Multimedia Productions'    => 'multimedia-productions',
        'System Admin & Maintenance'=> 'system-administration-maintenance',
        'Consultancy Services'      => 'consultancy-services',
        'Office Equipment Supply'   => 'office-equipment-supply',
    ];

    public function index($service = null)
    {
        if ($service) {
            return $this->service($service);
        }

        $service = $this->services;

        return view('services.services', compact('service'));
    }

    protected function service($service)
    {
        if (!in_array($service, $this->services)) {
            abort(404);
        }

        return view('services.'.$service, compact('service'));
    }

    public function rfs(Request $request)
    {
        $request->validate([
            'rfsService' => 'required|max:100',
            'rfsName'    => 'required|min:10|max:100',
            'rfsEmail'   => 'required|email',
            'rfsPhone'   => 'required|string|min:10|max:14',
            'rfsOrg'     => 'string',
            'rfsOrgAddr' => 'required_with:rfsOrg|string|max:255',
            'rfsOrgWeb'  => 'url|max:255',
            'rfsMsg'     => 'required|max:1000',
            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $serviceRequest = ServiceRequest::firstOrCreate($request->except(['g-recaptcha-response', '_token']));
        $serviceRequest->save();

        $msg = [
            'title' => 'Request Received!',
            'type'  => 1,
            'body'  => 'Your Request has been received. We will get back to you using the email provided asap. Have a wonderful day.',
        ];

        if ($request->ajax()) {
            return response()->json($msg);
        }

        return back(200);
    }
}
