<?php

namespace App\Http\Controllers;

use App\Services\PackageService\PackageServiceFactory;
use Exception;
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

    public function create()
    {
        return view('plugin.create');
    }

    public function store(Request $request)
    {
        $packageName = $request->name;
        try{
            exec('cd .. & composer require '.$packageName,$output,$code);
        }catch(Exception $e)
        {
            return response()->json(['data' => '','code' => 1,'status' => '500','error' => $e->getMessage()]);
        }
       
        return response()->json(['data' => $output,'code' => $code,'status' => 200,'error' => '']);
    }

    public function destroy(Request $request)
    {
        $packageName = $request->name;
        try{
            exec('cd .. & composer remove '.$request->name,$output,$code);
        }catch(Exception $e)
        {
            return response()->json(['data' => '','code' => 1,'status' => '500','error' => $e->getMessage()]);
        }
        return response()->json(['data' => $output,'code' => $code,'status' => 200,'error' => '']);
    }
}
