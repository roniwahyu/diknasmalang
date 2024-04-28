<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Masterdapodik extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'masterdapodik';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'no','gelardepan','nama','gelarblkg','nip','nipbaru','jabatan','nuks','nuptk','bernuptk','status_nuptk','ke_status_nuptk','ispns','golongan','peg_tmt_tugas','masakerja','pendidikan','agama','tempatlahir','tglahir','tgpensiun','thpensiun','jkel','fakultas','jurusan','tempat_tugas','tugas_sebagai','tingkat_sekolah','kecamatan','status_sekolah','status_pegawai','tugas_mengajar','nuptk_pindahan','tmt_gol','tmt_pns','status_sertifikasi','kode_bdg_sertifikasi','bdg_studi','tahun_sert','nourut','no_peserta_sert','nama_sekolah_sert','masakerja_guru','masakerja_kepsek','masakerja_pengawas','pola_sert','tmp_tugas','nss_sert','kab_sert','jenis_sert','noukg','diklatpkb','diklatcakep','usia','diklat_gurugerak','angkat_guru_gerak','status_verval_gurugerak','status_lulus_gurugerak','pkp_tahun2019','nilaipkp','diklat_cawas','diklat_guruajar','diklat_gpk','status_verval_ukjj'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id LIKE ?  OR 
				no LIKE ?  OR 
				gelardepan LIKE ?  OR 
				nama LIKE ?  OR 
				gelarblkg LIKE ?  OR 
				nip LIKE ?  OR 
				nipbaru LIKE ?  OR 
				jabatan LIKE ?  OR 
				nuks LIKE ?  OR 
				nuptk LIKE ?  OR 
				bernuptk LIKE ?  OR 
				status_nuptk LIKE ?  OR 
				ke_status_nuptk LIKE ?  OR 
				ispns LIKE ?  OR 
				golongan LIKE ?  OR 
				peg_tmt_tugas LIKE ?  OR 
				masakerja LIKE ?  OR 
				pendidikan LIKE ?  OR 
				agama LIKE ?  OR 
				tempatlahir LIKE ?  OR 
				tglahir LIKE ?  OR 
				tgpensiun LIKE ?  OR 
				thpensiun LIKE ?  OR 
				jkel LIKE ?  OR 
				fakultas LIKE ?  OR 
				jurusan LIKE ?  OR 
				tempat_tugas LIKE ?  OR 
				tugas_sebagai LIKE ?  OR 
				tingkat_sekolah LIKE ?  OR 
				kecamatan LIKE ?  OR 
				status_sekolah LIKE ?  OR 
				status_pegawai LIKE ?  OR 
				tugas_mengajar LIKE ?  OR 
				nuptk_pindahan LIKE ?  OR 
				tmt_gol LIKE ?  OR 
				tmt_pns LIKE ?  OR 
				status_sertifikasi LIKE ?  OR 
				kode_bdg_sertifikasi LIKE ?  OR 
				bdg_studi LIKE ?  OR 
				tahun_sert LIKE ?  OR 
				nourut LIKE ?  OR 
				no_peserta_sert LIKE ?  OR 
				nama_sekolah_sert LIKE ?  OR 
				masakerja_guru LIKE ?  OR 
				masakerja_kepsek LIKE ?  OR 
				masakerja_pengawas LIKE ?  OR 
				pola_sert LIKE ?  OR 
				tmp_tugas LIKE ?  OR 
				nss_sert LIKE ?  OR 
				kab_sert LIKE ?  OR 
				jenis_sert LIKE ?  OR 
				noukg LIKE ?  OR 
				diklatpkb LIKE ?  OR 
				diklatcakep LIKE ?  OR 
				usia LIKE ?  OR 
				diklat_gurugerak LIKE ?  OR 
				angkat_guru_gerak LIKE ?  OR 
				status_verval_gurugerak LIKE ?  OR 
				status_lulus_gurugerak LIKE ?  OR 
				pkp_tahun2019 LIKE ?  OR 
				nilaipkp LIKE ?  OR 
				diklat_cawas LIKE ?  OR 
				diklat_guruajar LIKE ?  OR 
				diklat_gpk LIKE ?  OR 
				status_verval_ukjj LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"no",
			"gelardepan",
			"nama",
			"gelarblkg",
			"nip",
			"nipbaru",
			"jabatan",
			"nuks",
			"nuptk",
			"bernuptk",
			"status_nuptk",
			"ke_status_nuptk",
			"ispns",
			"golongan",
			"peg_tmt_tugas",
			"masakerja",
			"pendidikan",
			"agama",
			"tempatlahir",
			"tglahir",
			"tgpensiun",
			"thpensiun",
			"jkel",
			"fakultas",
			"jurusan",
			"tempat_tugas",
			"tugas_sebagai",
			"tingkat_sekolah",
			"kecamatan",
			"status_sekolah",
			"status_pegawai",
			"tugas_mengajar",
			"nuptk_pindahan",
			"tmt_gol",
			"tmt_pns",
			"status_sertifikasi",
			"kode_bdg_sertifikasi",
			"bdg_studi",
			"tahun_sert",
			"nourut",
			"no_peserta_sert",
			"nama_sekolah_sert",
			"masakerja_guru",
			"masakerja_kepsek",
			"masakerja_pengawas",
			"pola_sert",
			"tmp_tugas",
			"nss_sert",
			"kab_sert",
			"jenis_sert",
			"noukg",
			"diklatpkb",
			"diklatcakep",
			"usia",
			"diklat_gurugerak",
			"angkat_guru_gerak",
			"status_verval_gurugerak",
			"status_lulus_gurugerak",
			"pkp_tahun2019",
			"nilaipkp",
			"diklat_cawas",
			"diklat_guruajar",
			"diklat_gpk",
			"status_verval_ukjj",
			"date_created",
			"date_updated" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"no",
			"gelardepan",
			"nama",
			"gelarblkg",
			"nip",
			"nipbaru",
			"jabatan",
			"nuks",
			"nuptk",
			"bernuptk",
			"status_nuptk",
			"ke_status_nuptk",
			"ispns",
			"golongan",
			"peg_tmt_tugas",
			"masakerja",
			"pendidikan",
			"agama",
			"tempatlahir",
			"tglahir",
			"tgpensiun",
			"thpensiun",
			"jkel",
			"fakultas",
			"jurusan",
			"tempat_tugas",
			"tugas_sebagai",
			"tingkat_sekolah",
			"kecamatan",
			"status_sekolah",
			"status_pegawai",
			"tugas_mengajar",
			"nuptk_pindahan",
			"tmt_gol",
			"tmt_pns",
			"status_sertifikasi",
			"kode_bdg_sertifikasi",
			"bdg_studi",
			"tahun_sert",
			"nourut",
			"no_peserta_sert",
			"nama_sekolah_sert",
			"masakerja_guru",
			"masakerja_kepsek",
			"masakerja_pengawas",
			"pola_sert",
			"tmp_tugas",
			"nss_sert",
			"kab_sert",
			"jenis_sert",
			"noukg",
			"diklatpkb",
			"diklatcakep",
			"usia",
			"diklat_gurugerak",
			"angkat_guru_gerak",
			"status_verval_gurugerak",
			"status_lulus_gurugerak",
			"pkp_tahun2019",
			"nilaipkp",
			"diklat_cawas",
			"diklat_guruajar",
			"diklat_gpk",
			"status_verval_ukjj",
			"date_created",
			"date_updated" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"no",
			"gelardepan",
			"nama",
			"gelarblkg",
			"nip",
			"nipbaru",
			"jabatan",
			"nuks",
			"nuptk",
			"bernuptk",
			"status_nuptk",
			"ke_status_nuptk",
			"ispns",
			"golongan",
			"peg_tmt_tugas",
			"masakerja",
			"pendidikan",
			"agama",
			"tempatlahir",
			"tglahir",
			"tgpensiun",
			"thpensiun",
			"jkel",
			"fakultas",
			"jurusan",
			"tempat_tugas",
			"tugas_sebagai",
			"tingkat_sekolah",
			"kecamatan",
			"status_sekolah",
			"status_pegawai",
			"tugas_mengajar",
			"nuptk_pindahan",
			"tmt_gol",
			"tmt_pns",
			"status_sertifikasi",
			"kode_bdg_sertifikasi",
			"bdg_studi",
			"tahun_sert",
			"nourut",
			"no_peserta_sert",
			"nama_sekolah_sert",
			"masakerja_guru",
			"masakerja_kepsek",
			"masakerja_pengawas",
			"pola_sert",
			"tmp_tugas",
			"nss_sert",
			"kab_sert",
			"jenis_sert",
			"noukg",
			"diklatpkb",
			"diklatcakep",
			"usia",
			"diklat_gurugerak",
			"angkat_guru_gerak",
			"status_verval_gurugerak",
			"status_lulus_gurugerak",
			"pkp_tahun2019",
			"nilaipkp",
			"diklat_cawas",
			"diklat_guruajar",
			"diklat_gpk",
			"status_verval_ukjj",
			"date_created",
			"date_updated" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"no",
			"gelardepan",
			"nama",
			"gelarblkg",
			"nip",
			"nipbaru",
			"jabatan",
			"nuks",
			"nuptk",
			"bernuptk",
			"status_nuptk",
			"ke_status_nuptk",
			"ispns",
			"golongan",
			"peg_tmt_tugas",
			"masakerja",
			"pendidikan",
			"agama",
			"tempatlahir",
			"tglahir",
			"tgpensiun",
			"thpensiun",
			"jkel",
			"fakultas",
			"jurusan",
			"tempat_tugas",
			"tugas_sebagai",
			"tingkat_sekolah",
			"kecamatan",
			"status_sekolah",
			"status_pegawai",
			"tugas_mengajar",
			"nuptk_pindahan",
			"tmt_gol",
			"tmt_pns",
			"status_sertifikasi",
			"kode_bdg_sertifikasi",
			"bdg_studi",
			"tahun_sert",
			"nourut",
			"no_peserta_sert",
			"nama_sekolah_sert",
			"masakerja_guru",
			"masakerja_kepsek",
			"masakerja_pengawas",
			"pola_sert",
			"tmp_tugas",
			"nss_sert",
			"kab_sert",
			"jenis_sert",
			"noukg",
			"diklatpkb",
			"diklatcakep",
			"usia",
			"diklat_gurugerak",
			"angkat_guru_gerak",
			"status_verval_gurugerak",
			"status_lulus_gurugerak",
			"pkp_tahun2019",
			"nilaipkp",
			"diklat_cawas",
			"diklat_guruajar",
			"diklat_gpk",
			"status_verval_ukjj",
			"date_created",
			"date_updated" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"no",
			"gelardepan",
			"nama",
			"gelarblkg",
			"nip",
			"nipbaru",
			"jabatan",
			"nuks",
			"nuptk",
			"bernuptk",
			"status_nuptk",
			"ke_status_nuptk",
			"ispns",
			"golongan",
			"peg_tmt_tugas",
			"masakerja",
			"pendidikan",
			"agama",
			"tempatlahir",
			"tglahir",
			"tgpensiun",
			"thpensiun",
			"jkel",
			"fakultas",
			"jurusan",
			"tempat_tugas",
			"tugas_sebagai",
			"tingkat_sekolah",
			"kecamatan",
			"status_sekolah",
			"status_pegawai",
			"tugas_mengajar",
			"nuptk_pindahan",
			"tmt_gol",
			"tmt_pns",
			"status_sertifikasi",
			"kode_bdg_sertifikasi",
			"bdg_studi",
			"tahun_sert",
			"nourut",
			"no_peserta_sert",
			"nama_sekolah_sert",
			"masakerja_guru",
			"masakerja_kepsek",
			"masakerja_pengawas",
			"pola_sert",
			"tmp_tugas",
			"nss_sert",
			"kab_sert",
			"jenis_sert",
			"noukg",
			"diklatpkb",
			"diklatcakep",
			"usia",
			"diklat_gurugerak",
			"angkat_guru_gerak",
			"status_verval_gurugerak",
			"status_lulus_gurugerak",
			"pkp_tahun2019",
			"nilaipkp",
			"diklat_cawas",
			"diklat_guruajar",
			"diklat_gpk",
			"status_verval_ukjj" 
		];
	}
}
