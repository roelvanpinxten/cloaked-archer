<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;

use App\Subscription;
use App\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $subscriptionItems = Subscription::latest()->get();
        return view('subscription.index', compact('subscriptionItems'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('subscription.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SubscriptionRequest $request)
	{
		//

        Subscription::create($request->all());

        return redirect('subscription');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $subscription = Subscription::findOrFail($id);

        return view('subscription.edit', compact('subscription'));
    }


    public function update($id, SubscriptionRequest $request)
    {
        $subscription = Subscription::findOrFail($id);

        $subscription->update($request->all());

        return redirect('subscription');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
