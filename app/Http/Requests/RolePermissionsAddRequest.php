<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolePermissionsAddRequest extends FormRequest
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
            
				"role_id" => "nullable|numeric",
				"perm_id" => "nullable|numeric",
				"permissions" => "nullable|string",
				"name" => "nullable|string",
				"action" => "nullable|string",
				"isactive" => "nullable",
				"module_id" => "nullable|numeric",
				"class" => "nullable|string",
				"method" => "nullable|string",
				"params" => "nullable|string",
				"userid" => "nullable|numeric",
				"created" => "nullable|date",
				"modified" => "nullable|date",
            
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
