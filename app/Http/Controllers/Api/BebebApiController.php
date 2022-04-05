<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactEmail;
use App\Mail\ReplyContactMessageToEmail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File;
use App\Models\Articles;

class BebebApiController extends Controller
{
    public function web_page($app_key){

        if($app_key === env('APP_KEY')){            
            $context_data = [
                'app_name' => env('APP_NAME'),
                'logo_brand' => asset('/images/bebeb-logo.png'),
                'address' => 'Jl. Kaum Kaler No 1 Rt 02/03 Pamekaran Soreang Bandung 40912',
                'email' => 'bebeb.net2022@gmail.com',
                'phone' => [
                    'context' => '+62 823-1779-5068',
                    'number' => '6282317795068'
                ],
                'gmaps' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15839.440772443566!2d107.5161966!3d-7.0257149!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6188b89b69e78858!2sBebeb%20Net!5e0!3m2!1sid!2sid!4v1649168303825!5m2!1sid!2sid&z=75',

                'about' => env('APP_NAME') ." merupakan perusahaan TELEKOMUNIKASI Jaringan Internet Berbasis Fiber Dan Wireless yang saat ini fokus pada skala RT/RW Net dan Mini ISP. ".env('APP_NAME'). " sendiri sudah berkecimpungan di bidang jasa layanan internet sejak tahun 2013 dan kemudian pada tahun 2020 ".env('APP_NAME')." memperluas cakupan coverege area untuk client-clientnya Dan memperluas Skala Bisnis Ke arah Mini ISP.",
                'carousels' => [
                    asset('images/slider/4.jpg'),
                    // asset('images/slider/2.jpg'),
                    asset('images/slider/3.jpg'),
                    asset('images/slider/5.jpg'),
                    asset('images/slider/6.jpg'),
                    asset('images/slider/7.jpg'),
                    asset('images/slider/8.jpg'),
                    asset('images/slider/9.webp'),
                    asset('images/slider/10.jpg'),
                    asset('images/slider/11.webp'),
                    asset('images/slider/12.webp'),
                    asset('images/slider/13.webp'),
                    asset('images/slider/14.webp'),
                ]
            ];

            return response()->json([
                'message' => 'Welcome Bebeb Net Api',
                'data' => $context_data 
            ], 201);
        }else{
            return response()->json([
                'message' => 'you are cannot access this api data'
            ], 401);
        }
    }

    public function send_message(Request $request, $app_key)
    {
        if($app_key === env('APP_KEY')){ 
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required' 
            ]);

            if($validator->fails()){
                return response()->json($validator->errors(), 400);
            }
            $details = [
              'title' => 'Pesan baru dari bebeb-network website',
              'url' => 'https://bebeb-network.herokuapp.com',
              'roles' => 'Admin',
              'name' => $request->name,
              'email' => $request->email,
              'phone' => $request->phone,
              'message'=> $request->message
          ];

              try{
                Mail::to("bebeb.net2022@gmail.com")->send(new SendContactEmail($details));
                Mail::to($request->email)->send(new ReplyContactMessageToEmail($details));
                return response()->json([
                    'success' => true,
                    'message' => 'Terima kasih ! '. $request->name.'email anda : '.$request->email.' Pesan Anda akan segera di proses oleh Admin Bebeb Net.',
                    'data' => $request
                ], 202);
            }catch(Exception $e){
                return response()->json([
                    'success' => false,
                    'message' => 'New Map failed Added',
                    'data' => $e->getMessage()
                ], 401);
            }
        }else{
            return response()->json([
                'message' => 'Oopps ! Forbaiden'
            ], 401);
        }

    }

    public function blog_articles($app_key)
    {
        if($app_key === env('APP_KEY')){
            $articles = new Articles;
            return response()->json([
                'message' => 'Article Lists',
                'list_data' => $articles->list_articles()
            ]);
        }else{
            return response()->json([
                'message' => 'Oopps ! Forbaiden'
            ], 401);
        }
    }
}
