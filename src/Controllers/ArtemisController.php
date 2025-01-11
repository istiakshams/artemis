<?php
namespace Istiakshams\Artemis\Controllers;

use Illuminate\Http\Request;
use Istiakshams\Artemis\Artemis;

class ArtemisController
{
    public function index(Artemis $inspire) {
        $quote = $inspire->justDoIt();

        return view('artemis::index', compact('quote'));
    }
}