<?php

namespace App\Http\Controllers;

use App\Services\PackageService\PackageServiceFactory;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    private $pluginService;
    public function __construct()
    {
        $this->pluginService = PackageServiceFactory::build('plugin');

    }
    public function index()
    {

        
        $plugins = $this->pluginService->getInstalled();
    
      return view('plugin.index',compact('plugins'));
    }
}
