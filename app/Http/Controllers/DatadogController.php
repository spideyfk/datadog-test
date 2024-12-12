<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class DatadogController extends BaseController
{
    public function submit(Request $request)
    {
    	$req = json_decode($request->getContent(), true);
    	\Log::info("[DATADOG CONTROLLER] - Request Made!");
    	
    	$span = \DDTrace\active_span();
	if ($span) {
	    \Log::info("[DATADOG CONTROLLER] - DD SPAN");
	    $span->meta['customer.id'] = 1234;
	}
    	
    	$req = json_decode($request->getContent(), true);
    	
    	return $req;
    	
    }
}
