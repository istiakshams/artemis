<?php
namespace Istiakshams\Artemis;

use Illuminate\Support\Facades\Http;

class Artemis {
    public function justDoIt() {
        // $response = Http::get('https://inspiration.goprogram.ai/');
        // return $response['quote'] . ' -' . $response['author'];

        $message = "Artemis Package";
        return $message;
    }
}