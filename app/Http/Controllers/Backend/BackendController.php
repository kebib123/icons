<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath = 'dashboard.';
    protected $backendPagePath = 'null';
    protected $backendcategoryPath = 'null';

    public function __construct()
    {
        $this->backendPath;
        $this->backendPagePath = $this->backendPath . '/' . 'pages.';
        $this->backendcategoryPath = $this->backendPath . '/' . 'pages.'. '/' . 'category.';

    }
}
