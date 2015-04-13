<?php namespace App\Http\Controllers;

use App\provider;
use App\Http\Requests;
use App\Http\Requests\ProviderRequest;
use App\Http\Controllers\Controller;


//use Illuminate\Database\Query;


class ProviderController extends Controller {

	//

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $subscriptionItems = provider::latest()->get();
        return view('provider.index', compact('subscriptionItems'));
    }

    public function show($providerName)
    {
        //$subscriptionItems = provider::all();
        $subscriptionItems = provider::latest()->provider($providerName)->get();
        return view('provider.show', compact('subscriptionItems', 'providerName'));
    }

    public function create()
    {
        return view('provider.create');
    }

    public function store(ProviderRequest $request)
    {
        //

        provider::create($request->all());

        return redirect('provider');
    }

    public function edit($id)
    {
        $provider = provider::findOrFail($id);

        return view('provider.edit', compact('provider'));
    }


    public function update($id, ProviderRequest $request)
    {
        $provider = provider::findOrFail($id);

        $provider->update($request->all());

        return redirect('provider');
    }
}

