<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudittrailEditRequest extends FormRequest
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
            
				"datetime" => "filled|date",
				"script" => "nullable|string",
				"user" => "nullable|string",
				"action" => "nullable|string",
				"table" => "nullable|string",
				"field" => "nullable|string",
				"keyvalue" => "nullable",
				"oldvalue" => "nullable",
				"newvalue" => "nullable",
            
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
