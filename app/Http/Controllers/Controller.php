<?php

namespace App\Http\Controllers;

use App\SampleInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(SampleInterface $sample): Response
    {
        //SampleInterface injection not working, causes Unresolvable dependency resolving error.
        return new Response();
    }
}
