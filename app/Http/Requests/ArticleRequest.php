<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
    public function rules()
    {
        return [
            'provider_name' => 'required',
            'article_name' => 'required',
            'subscription' => 'required',
            'subscription_type' => 'required',
            'binding' => 'required',
            'commission' => 'required',
            'month_price' => 'required',
            'month_price_action' => 'required',
            'BAS_item_number' => 'required',
            'valid_until' => 'required|date'
        ];
    }

}
