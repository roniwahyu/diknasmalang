<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataNonAsn2022BkpsdmEditRequest extends FormRequest
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
            
				"nomor" => "nullable|numeric",
				"nik" => "nullable|string",
				"namalengkap" => "nullable|string",
				"nomork2" => "nullable|string",
				"tempatlahir" => "nullable|string",
				"tglahir" => "nullable|string",
				"jkel" => "nullable|string",
				"unitkerja" => "nullable|string",
				"jabatan" => "nullable|string",
				"pendidikan" => "nullable|string",
				"tipe" => "nullable|string",
            
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
