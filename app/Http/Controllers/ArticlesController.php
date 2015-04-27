<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExcelRequest;
use App\Articles;
use App\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

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
        $articleItems = Articles::latest()->get();
        return view('articles.index', compact('articleItems'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        return view('articles.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(ArticleRequest $request)
    {
        //

        Articles::create($request->all());

        return redirect('articles');
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
        $articles = Articles::findOrFail($id);

        return view('articles.edit', compact('articles'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id, ArticleRequest $request)
    {
        $article = Articles::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
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

    public function upload()
    {
        return view('articles.upload');
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
                Articles::where('id', '>=', 0)->delete();;

                //loop through all excel rows and add them to the database.
                foreach ($result as $sub) {
                    Articles::create($sub->all());
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
        return redirect('articles');
    }

    public function download()
    {
        $model = Articles::get([
            'provider_name',
            'article_name',
            'subscription',
            'subscription_type',
            'binding',
            'commission',
            'month_price',
            'month_price_action',
            'BAS_item_number',
            'valid_until'
        ]);

        return \Excel::create('abonnementen', function($excel) use($model) {

            $excel->sheet('abonnementen', function($sheet) use($model) {

                $sheet->fromModel($model, null, 'A1', true);
                $sheet->freezeFirstRow();
            });

        })->download('xlsx');
    }

}
