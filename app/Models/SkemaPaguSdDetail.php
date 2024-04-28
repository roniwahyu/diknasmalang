<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SkemaPaguSdDetail extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'skema_pagu_sd_detail';
	

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
		'no','namasekolah','nama','jabatan','keterangan','sekolah_id'
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
				namasekolah LIKE ?  OR 
				nama LIKE ?  OR 
				jabatan LIKE ?  OR 
				keterangan LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"namasekolah",
			"nama",
			"jabatan",
			"keterangan",
			"sekolah_id" 
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
			"namasekolah",
			"nama",
			"jabatan",
			"keterangan",
			"sekolah_id" 
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
			"namasekolah",
			"nama",
			"jabatan",
			"keterangan",
			"sekolah_id" 
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
			"namasekolah",
			"nama",
			"jabatan",
			"keterangan",
			"sekolah_id" 
		];
	}
}
