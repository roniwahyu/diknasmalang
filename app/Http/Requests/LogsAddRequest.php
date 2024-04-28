<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogsAddRequest extends FormRequest
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
				"name" => "required|string",
				"app" => "required|string",
				"class" => "required|string",
				"method" => "required|string",
				"task" => "required",
				"note" => "required",
				"browser" => "required|string",
				"platform" => "required|string",
				"ip_address" => "required|string",
            
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
