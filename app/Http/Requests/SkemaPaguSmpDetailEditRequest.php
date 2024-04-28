<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkemaPaguSmpDetailEditRequest extends FormRequest
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
            
				"no" => "nullable|string",
				"id_sekolah" => "nullable|numeric",
				"namasekolah" => "nullable|string",
				"nama" => "nullable|string",
				"jabatan" => "nullable|string",
				"keterangan" => "nullable|string",
            
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
