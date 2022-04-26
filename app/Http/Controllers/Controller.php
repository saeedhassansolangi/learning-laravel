<?php

// when two classes have same name, and we want to import those two file's classes into one file so normally we get an error but with the namespace we can provide the file as name and then use them with the namepsace and 'use' is to give the long name as a short names

// namespace is used for the 'classes' and 'functions', it allows us the same function or same classes names to use them in the same application  without giving the 'duplicating name' problem

// 'use' is to import the 'specific' class or 'namespace'
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
