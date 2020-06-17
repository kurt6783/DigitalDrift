<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\Api\UserRequest;
use Illuminate\Auth\AuthenticationException;

class UsersController extends Controller
{
    public function me(Request $request)
    {	
    	$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://tinyurl.com/y7y54gms",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json;charset=UTF-8" 
			
		  ),
		));

		$response = curl_exec($curl);
		$data = json_decode($response, true);
		// return $data['records']['location'];
		$locations = $data['records']['location'];
		// return $locations;
		curl_close($curl);
		// return view('weather')->with('locations', json_decode($locations[0], true));
		return view('weather')->with('locations', $locations);
		
		try{
		 $curl = curl_init();
		 curl_setopt_array($curl, array(
		   CURLOPT_URL => "https://tinyurl.com/y7y54gms",
		   CURLOPT_RETURNTRANSFER => true,
		   CURLOPT_ENCODING => "",
		   CURLOPT_MAXREDIRS => 10,
		   CURLOPT_TIMEOUT => 0,
		   CURLOPT_FOLLOWLOCATION => true,
		   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		   CURLOPT_CUSTOMREQUEST => "GET",
		   CURLOPT_HTTPHEADER => array(
		     "content-type: application/json;charset=UTF-8" 
			 
		   ),
		 ));

		 $response = curl_exec($curl);
		 $data = json_decode($response, true);
		// return $data['records']['location'];
		 $locations = $data['records']['location'];
		// return $locations;
		 curl_close($curl);
		 // return view('weather')->with('locations', json_decode($locations[0], true));
		 return view('weather')->with('locations', $locations);
		}catch (\Exception $e){
		 var_dump($e);
		}
    }
}