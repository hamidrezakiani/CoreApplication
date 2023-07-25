<?php

namespace App\Http\Controllers;

use App\Services\PackageService\PackageServiceFactory;
use Illuminate\Http\Request;
use Exception;
class LibraryController extends Controller
{
    private $libraryService;
    public function __construct()
    {
        $this->libraryService = PackageServiceFactory::build('library');

    }
    public function index()
    {
        $libraries = $this->libraryService->getInstalled();

        return view('library.index',compact('libraries'));
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
        try{
            exec('cd .. & composer remove '.$request->name,$output,$code);
        }catch(Exception $e)
        {
            return response()->json(['data' => '','code' => 1,'status' => '500','error' => $e->getMessage()]);
        }
        return response()->json(['data' => $output,'code' => $code,'status' => 200,'error' => '']);
    }
}
