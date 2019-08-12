<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7;
use Illuminate\Http\Request;

class EvelynController extends Controller {

    public function send()
    {
        $data = request()->validate([
            'email' => 'required|array|min:1'
        ]);

        $client = new Client();
        try
        {
            $client->post(
                'https://19ubdzyfm2.execute-api.us-east-1.amazonaws.com/dev/forms',
                [
                    'query' => [
                        'recipients' => json_encode($data['email'])
                    ]
                ]
            );
        } catch (ServerException $e)
        {
            return back()->withErrors(Psr7\str($e->getRequest()) . ' --- ' . Psr7\str($e->getResponse()));
        }

        return redirect('home')->with('status', 'Email sent to ' . collect($data['email'])->implode(', '));
    }
}
