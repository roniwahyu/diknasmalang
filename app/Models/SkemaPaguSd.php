<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SkemaPaguSd extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'skema_pagu_sd';
	

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
		'no','sekolah_id','namasekolah','pagu_oktober','input_sipd_2024','selisih','bosda_9bulan','bosda_12bulan','jml_gttptt','tunjangan','tunjangan_total','pagu_akhir','keterangan'
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
				namasekolah LIKE ?  OR 
				keterangan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"sekolah_id",
			"namasekolah",
			"pagu_oktober",
			"input_sipd_2024",
			"selisih",
			"bosda_9bulan",
			"bosda_12bulan",
			"jml_gttptt",
			"tunjangan",
			"tunjangan_total",
			"pagu_akhir",
			"keterangan" 
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
			"sekolah_id",
			"namasekolah",
			"pagu_oktober",
			"input_sipd_2024",
			"selisih",
			"bosda_9bulan",
			"bosda_12bulan",
			"jml_gttptt",
			"tunjangan",
			"tunjangan_total",
			"pagu_akhir",
			"keterangan" 
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
			"sekolah_id",
			"namasekolah",
			"pagu_oktober",
			"input_sipd_2024",
			"selisih",
			"bosda_9bulan",
			"bosda_12bulan",
			"jml_gttptt",
			"tunjangan",
			"tunjangan_total",
			"pagu_akhir",
			"keterangan" 
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
			"sekolah_id",
			"namasekolah",
			"pagu_oktober",
			"input_sipd_2024",
			"selisih",
			"bosda_9bulan",
			"bosda_12bulan",
			"jml_gttptt",
			"tunjangan",
			"tunjangan_total",
			"pagu_akhir",
			"keterangan" 
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
			"sekolah_id",
			"namasekolah",
			"pagu_oktober",
			"input_sipd_2024",
			"selisih",
			"bosda_9bulan",
			"bosda_12bulan",
			"jml_gttptt",
			"tunjangan",
			"tunjangan_total",
			"pagu_akhir",
			"keterangan" 
		];
	}
}