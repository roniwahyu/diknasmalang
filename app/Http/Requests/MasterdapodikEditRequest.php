<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterdapodikEditRequest extends FormRequest
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
				"gelardepan" => "nullable|string",
				"nama" => "nullable|string",
				"gelarblkg" => "nullable|string",
				"nip" => "nullable|string",
				"nipbaru" => "nullable|string",
				"jabatan" => "nullable|string",
				"nuks" => "nullable|string",
				"nuptk" => "nullable|string",
				"bernuptk" => "nullable|string",
				"status_nuptk" => "nullable|string",
				"ke_status_nuptk" => "nullable|string",
				"ispns" => "nullable|string",
				"golongan" => "nullable|string",
				"peg_tmt_tugas" => "nullable|string",
				"masakerja" => "nullable|string",
				"pendidikan" => "nullable|string",
				"agama" => "nullable|string",
				"tempatlahir" => "nullable|string",
				"tglahir" => "nullable|string",
				"tgpensiun" => "nullable|string",
				"thpensiun" => "nullable|string",
				"jkel" => "nullable|string",
				"fakultas" => "nullable|string",
				"jurusan" => "nullable|string",
				"tempat_tugas" => "nullable|string",
				"tugas_sebagai" => "nullable|string",
				"tingkat_sekolah" => "nullable|string",
				"kecamatan" => "nullable|string",
				"status_sekolah" => "nullable|string",
				"status_pegawai" => "nullable|string",
				"tugas_mengajar" => "nullable|string",
				"nuptk_pindahan" => "nullable|string",
				"tmt_gol" => "nullable|string",
				"tmt_pns" => "nullable|string",
				"status_sertifikasi" => "nullable|string",
				"kode_bdg_sertifikasi" => "nullable|string",
				"bdg_studi" => "nullable|string",
				"tahun_sert" => "nullable|string",
				"nourut" => "nullable|string",
				"no_peserta_sert" => "nullable|string",
				"nama_sekolah_sert" => "nullable|string",
				"masakerja_guru" => "nullable|string",
				"masakerja_kepsek" => "nullable|string",
				"masakerja_pengawas" => "nullable|string",
				"pola_sert" => "nullable|string",
				"tmp_tugas" => "nullable|string",
				"nss_sert" => "nullable|string",
				"kab_sert" => "nullable|string",
				"jenis_sert" => "nullable|string",
				"noukg" => "nullable|string",
				"diklatpkb" => "nullable|string",
				"diklatcakep" => "nullable|string",
				"usia" => "nullable|string",
				"diklat_gurugerak" => "nullable|string",
				"angkat_guru_gerak" => "nullable|string",
				"status_verval_gurugerak" => "nullable|string",
				"status_lulus_gurugerak" => "nullable|string",
				"pkp_tahun2019" => "nullable|string",
				"nilaipkp" => "nullable|string",
				"diklat_cawas" => "nullable|string",
				"diklat_guruajar" => "nullable|string",
				"diklat_gpk" => "nullable|string",
				"status_verval_ukjj" => "nullable|string",
            
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
