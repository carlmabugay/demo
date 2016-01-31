<?php namespace Carlmabugay\Demo\Controllers;
 
use App\Http\Controllers\Controller;
use Carlmabugay\Demo\Demo;
 
class DemoController extends Controller {

    public function index() {

    	return view('demo::index');
    	//return Demo::greetJun();
        //return 'The controller works!';
    }
}