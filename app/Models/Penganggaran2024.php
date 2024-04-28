<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Penganggaran2024 extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'penganggaran2024';
	

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
		'parentid','subkegiatanasli','statussubkegiatan','statusrincian','subkegiatan','norek','sub','paguvalidasi','totalrincian'
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
				subkegiatanasli LIKE ?  OR 
				statussubkegiatan LIKE ?  OR 
				statusrincian LIKE ?  OR 
				subkegiatan LIKE ?  OR 
				norek LIKE ?  OR 
				sub LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"parentid",
			"subkegiatanasli",
			"statussubkegiatan",
			"statusrincian",
			"subkegiatan",
			"norek",
			"sub",
			"paguvalidasi",
			"totalrincian",
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
			"parentid",
			"subkegiatanasli",
			"statussubkegiatan",
			"statusrincian",
			"subkegiatan",
			"norek",
			"sub",
			"paguvalidasi",
			"totalrincian",
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
			"parentid",
			"subkegiatanasli",
			"statussubkegiatan",
			"statusrincian",
			"subkegiatan",
			"norek",
			"sub",
			"paguvalidasi",
			"totalrincian",
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
			"parentid",
			"subkegiatanasli",
			"statussubkegiatan",
			"statusrincian",
			"subkegiatan",
			"norek",
			"sub",
			"paguvalidasi",
			"totalrincian",
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
			"parentid",
			"subkegiatanasli",
			"statussubkegiatan",
			"statusrincian",
			"subkegiatan",
			"norek",
			"sub",
			"paguvalidasi",
			"totalrincian" 
		];
	}
}
