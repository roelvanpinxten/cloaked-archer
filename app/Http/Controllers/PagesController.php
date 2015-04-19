<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProviderRequest;
use App\Http\Controllers\Controller;
use App\Provider;
use App\Subscription;
//use Illuminate\Database\Query;


class PagesController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

	//

    public function home()
    {
        return view('pages.home');
    }

    public function dixons($id)
    {
        $subscription = Subscription::findOrFail($id);

       return view('pages.dixons', compact('subscription'));

    }

    public function dixonsAll()
    {
        $subscription = Subscription::all();

        return view('pages.dixonsAll', compact('subscription'));

    }


}

