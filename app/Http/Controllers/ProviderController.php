<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProviderRequest;
use App\Http\Controllers\Controller;
use App\Provider;


//use Illuminate\Database\Query;


class ProviderController extends Controller {

	//

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $subscriptionItems = Provider::latest()->get();
        return view('provider.index', compact('subscriptionItems'));
    }

    public function show($providerName)
    {
        //$subscriptionItems = provider::all();
        $subscriptionItems = Provider::latest()->provider($providerName)->get();
        return view('provider.show', compact('subscriptionItems', 'providerName'));
    }

    public function create()
    {
        return view('provider.create');
    }

    public function store(ProviderRequest $request)
    {
        //

        Provider::create($request->all());

        return redirect('provider');
    }

    public function edit($id)
    {
        $provider = Provider::findOrFail($id);Provider::

        return view('provider.edit', compact('provider'));
    }


    public function update($id, ProviderRequest $request)
    {
        $provider = Provider::findOrFail($id);

        $provider->update($request->all());

        return redirect('provider');
    }
}

