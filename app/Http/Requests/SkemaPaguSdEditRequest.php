<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkemaPaguSdEditRequest extends FormRequest
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
				"sekolah_id" => "nullable|numeric",
				"namasekolah" => "nullable|string",
				"pagu_oktober" => "nullable|numeric",
				"input_sipd_2024" => "nullable|numeric",
				"selisih" => "nullable|numeric",
				"bosda_9bulan" => "nullable|numeric",
				"bosda_12bulan" => "nullable|numeric",
				"jml_gttptt" => "nullable|numeric",
				"tunjangan" => "nullable|numeric",
				"tunjangan_total" => "nullable|numeric",
				"pagu_akhir" => "nullable|numeric",
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
