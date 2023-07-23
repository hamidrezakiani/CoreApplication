<?php

namespace App\Http\Controllers;

use App\Services\PackageService\PackageServiceFactory;
use Illuminate\Http\Request;

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
}
