<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExcelRequest;
use Maatwebsite\Excel\Excel;
use App\Http\Requests\SubscriptionRequest;

use App\Subscription;
use Illuminate\Http\Request;

class ExcelController extends Controller {

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
        return view('excel.index');
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

        return \Excel::create('Filename', function($excel) use($model) {

            $excel->sheet('Proposities', function($sheet) use($model) {

                $sheet->fromModel($model);
                $sheet->freezeFirstRow();
            });

        })->download('xls');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ExcelRequest $request)
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
                \Session::flash('flash_message',"Er zijn $linesAdded regels geladen.");

            } else {

                //Show the user that the file did not contain any rows to add.
                \Session::flash('flash_message',"Er zijn geen regels geladen. Bestand bevat onvoldoende rijen.");
            }

        });
        return redirect('excel');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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