<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogsEditRequest extends FormRequest
{
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
            
				"uid" => "nullable|numeric",
				"name" => "filled|string",
				"app" => "filled|string",
				"class" => "filled|string",
				"method" => "filled|string",
				"task" => "filled",
				"note" => "filled",
				"browser" => "filled|string",
				"platform" => "filled|string",
				"ip_address" => "filled|string",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
