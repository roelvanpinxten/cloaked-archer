<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProviderRequest;
use App\Http\Controllers\Controller;
use App\provider;
use App\subscription;
//use Illuminate\Database\Query;


class PagesController extends Controller {

	//

    public function home()
    {
        return view('pages.home');
    }

    public function dixons($id)
    {
        $subscription = subscription::findOrFail($id);

       return view('pages.dixons', compact('subscription'));

    }


}

