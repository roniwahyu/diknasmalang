<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Penganggaran2024EditRequest extends FormRequest
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
            
				"parentid" => "nullable|numeric",
				"subkegiatanasli" => "nullable",
				"statussubkegiatan" => "nullable|string",
				"statusrincian" => "nullable|string",
				"subkegiatan" => "nullable",
				"norek" => "nullable|string",
				"sub" => "nullable|string",
				"paguvalidasi" => "nullable|numeric",
				"totalrincian" => "nullable|numeric",
            
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
