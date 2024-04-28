<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DataNonAsn2022Bkpsdm extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'data_non_asn2022_bkpsdm';
	

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
		'nomor','nik','namalengkap','nomork2','tempatlahir','tglahir','jkel','unitkerja','jabatan','pendidikan','tipe'
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
				nik LIKE ?  OR 
				namalengkap LIKE ?  OR 
				nomork2 LIKE ?  OR 
				tempatlahir LIKE ?  OR 
				tglahir LIKE ?  OR 
				jkel LIKE ?  OR 
				unitkerja LIKE ?  OR 
				jabatan LIKE ?  OR 
				pendidikan LIKE ?  OR 
				tipe LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"nomor",
			"nik",
			"namalengkap",
			"nomork2",
			"tempatlahir",
			"tglahir",
			"jkel",
			"unitkerja",
			"jabatan",
			"pendidikan",
			"tipe",
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
			"nomor",
			"nik",
			"namalengkap",
			"nomork2",
			"tempatlahir",
			"tglahir",
			"jkel",
			"unitkerja",
			"jabatan",
			"pendidikan",
			"tipe",
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
			"nomor",
			"nik",
			"namalengkap",
			"nomork2",
			"tempatlahir",
			"tglahir",
			"jkel",
			"unitkerja",
			"jabatan",
			"pendidikan",
			"tipe",
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
			"nomor",
			"nik",
			"namalengkap",
			"nomork2",
			"tempatlahir",
			"tglahir",
			"jkel",
			"unitkerja",
			"jabatan",
			"pendidikan",
			"tipe",
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
			"nomor",
			"nik",
			"namalengkap",
			"nomork2",
			"tempatlahir",
			"tglahir",
			"jkel",
			"unitkerja",
			"jabatan",
			"pendidikan",
			"tipe" 
		];
	}
}
