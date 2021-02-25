<?php namespace Miroc\LaravelAdminer;

use Illuminate\Routing\Controller;

class AdminerController extends Controller {

    public function index()
    {
        require('editor-4.8.0.php');
        return new EmptyResponse();
    }

}
