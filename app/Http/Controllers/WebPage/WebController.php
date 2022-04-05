<?php

namespace App\Http\Controllers\WebPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        // return json_encode(['message' => 'Evoush::Official | Website']);
        $context = [
            'title' => 'BebebNet::Network',
            'canonical' => env('APP_URL'),
            'meta_desc' => 'Connet To Your World Everytime',
            'meta_key' => 'ISP, Kabupaten Bandung',
            'meta_author' => 'Bebeb Net',
            'og_url' => env('APP_URL'),
            'og_type' => 'website',
            'og_site_name' => 'BebebNet::Network',
            'og_title' => 'BebebNet::Network | ISP::Kabupaten::Bandung',
            'og_desc' => 'Connet To Your World Everytime',
            'og_image' => 'https://raw.githubusercontent.com/codesyariah122/bebeb-net/main/public/images/Screenshot%20from%202022-04-02%2021-03-40.png',
            'og_image_width' => '600',
            'og_image_height' => '590'
        ];

        // return view('homes.index', $context);
        return view('layouts.app', $context);
    }
}
