<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProviderRequest extends Request {

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
			'provider' => 'required',
            'type' => 'required',
            'name' => 'required',
            'handset_category' => 'required',
            'commission' => 'required',
            'valid_until' => 'required|date'
		];
	}

}
