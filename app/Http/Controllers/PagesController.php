<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProviderRequest;
use App\Http\Controllers\Controller;
use App\provider;
//use Illuminate\Database\Query;


class PagesController extends Controller {

	//

    public function home()
    {
        return view('pages.home');
    }

    public function dixons()
    {
        return view('pages.dixons');
    }


}

