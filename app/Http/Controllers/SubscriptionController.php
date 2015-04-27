<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use App\Http\Requests\ExcelRequest;

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

    public function download()
    {
        $model = Subscription::get([
            'handset_name',
            'provider_name',
            'subscription_name',
            'subscription_duration',
            'subscription_minutes',
            'subscription_data',
            'connection_fee',
            'month_price_total',
            'month_price_action',
            'month_price_handset',
            'month_price_subscription',
            'handset_price_without_subscription',
            'handset_price_with_subscription',
            'wposid',
            'valid_until'
        ]);

        return \Excel::create('Proposities', function($excel) use($model) {

            $excel->sheet('Proposities', function($sheet) use($model) {

                $sheet->fromModel($model, null, 'A1', true);
                $sheet->freezeFirstRow();
            });

        })->download('xlsx');
    }

    public function upload()
    {
        return view('subscription.upload');
    }

    public function createHTML()
    {
        $subscription = Subscription::all();

        return view('subscription.createHTML', compact('subscription'));

    }

    public function storeUpload(ExcelRequest $request)
    {
        \Excel::load(\Request::file('excel'), function($reader) {
            //Get the content of the excel file.
            $result = $reader->get();
            $linesAdded = 0;

            //Check if the uploaded file contains more than only a header.
            if (count($result) > 0 ) {

                //Clear the old records form the database.
                Subscription::where('id', '>=', 0)->delete();;

                //loop through all excel rows and add them to the database.
                foreach ($result as $sub) {
                    Subscription::create($sub->all());
                    $linesAdded++;
                }

                //Show number of rows added to the database.
                session()->flash('flash_message',"Er zijn $linesAdded regels geladen.");

            } else {

                //Show the user that the file did not contain any rows to add.
                session()->flash('flash_message',"Er zijn geen regels geladen, het bestand bevat onvoldoende rijen. Oude regels zijn bewaard.");
                session()->flash('flash_message_important',true);
            }

        });
        return redirect('subscription');
    }

}
