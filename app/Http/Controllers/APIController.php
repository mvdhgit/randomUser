<?php
 //                                   controller haalt juiste info op en geeft door aan
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function index()
    {
        // Make an HTTP request to the API endpoint
        $response = Http::get('https://randomuser.me/api/');

        // Check if the request was successful
        if ($response->successful()) {
            // Parse the JSON response
            $data = $response->json();

            // ddd($data);
            // Extract the desired data
            $result = $data['results'][0];
            
            $name = $result['name']['first'] . ' ' . $result['name']['last'];
            $gender = $result['gender'];
            $dob = $result['dob']['date'];
            $email = $result['email'];
            $phone = $result['phone'];
            $nat = $result['nat'];
            $username = $result['login']['username'];
            $address = $result['location']['street']['number'] . ' ' . $result['location']['street']['name'] . ', ' . $result['location']['city'] . ', ' . $result['location']['state'] . ', ' . $result['location']['country'] . ', ' . $result['location']['postcode'];
            $picture = $result['picture']['large'];

            // Pass the extracted data to the view
            return view('welcome', compact('name', 'gender', 'dob', 'email', 'phone', 'nat', 'username', 'address', 'picture'));
        }
        // Handle the case when the request fails
        return view('error');
    }
}
