<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Requests;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class LatihanJson extends Controller{

    public function latihanSatu(){
        $data = array(
            "name" => "Natasha Angelica Panget",
            "url" => "https://www.google.com",
            "rank" => 1,
            "socialmedia" => [
                "facebook" => "Angelica Panget",
                "twitter" => "nglcpngt",
                "instagram" => "angelicapngt",
                "youtube" => "Angelica Panget",
                "github" => "AngelicaPngt"
            ]
        );

        $json = json_encode($data);
        print_r($json);
    }
    
    public function latihanDua(){
        $data = array(
            "first_name" => "Natasha Angelica",
            "last_name" => "Panget",
            "location" => "Yogyakarta",
            "online" => true,
            "followers"=> 987
        );

        $json = json_encode($data);
        print_r($json);
    }

    public function latihanTiga(){
        $data = array(
            "first_name" => "Sammy",
            "last_name" => "Shark",
            "location" => "Ocean",
            "websites" => [
                [
                "description" => "work",
                "URL" => "https://www.digitalocean.com/"
                ],
                [
                "desciption" => "tutorials",
                "URL" => "https://www.digitalocean.com/community/tutorials"
                ]
            ],
            "social_media" => [
                [
                "description" => "twitter",
                "link" => "https://twitter.com/digitalocean"
                ],
                [
                "description" => "facebook",
                "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
                ],
                [
                "description" => "github",
                "link" => "https://github.com/digitalocean"
                ]
            ]
        );

        $json = json_encode($data);
        print_r($json);
    }

    public function latihanEmpat(){
        $data = array(
            "employees"=>[
                [
                    "firstName"=>"John", "lastName"=>"Doe"
                ],
                [
                    "firstName"=>"Anna", "lastName"=>"Smith"
                ],
                [
                    "firstName"=>"Peter","lastName"=>"Jones"
                ]
                ]
        );

        $json = json_encode($data);
        print_r($json);
    }

    public function latihanLima(){
        $data = array(
            "matapelajaran" => [
                "subject" => "Matematika",
                "kelas" => [
                    [
                        "X" => "Argo",
                        "Jadwal" => "Senin"
                    ],
                    
                        "XI" => "JJS",
                        "Jadwal" => "Selasa"
                    ],
                    [
                        "XII" => "Halim",
                        "Jadwal" => "Rabu"
                    ]
                ]
                
        );

        $json = json_encode($data);
        print_r($json);
    }


}
?>