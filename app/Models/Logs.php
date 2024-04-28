<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Logs extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'logs';
	

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
		'uid','name','app','class','method','task','note','browser','platform','ip_address'
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
				name LIKE ?  OR 
				app LIKE ?  OR 
				class LIKE ?  OR 
				method LIKE ?  OR 
				note LIKE ?  OR 
				browser LIKE ?  OR 
				platform LIKE ?  OR 
				ip_address LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"uid",
			"name",
			"app",
			"class",
			"method",
			"task",
			"note",
			"browser",
			"platform",
			"ip_address",
			"system",
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
			"uid",
			"name",
			"app",
			"class",
			"method",
			"task",
			"note",
			"browser",
			"platform",
			"ip_address",
			"system",
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
			"uid",
			"name",
			"app",
			"class",
			"method",
			"task",
			"note",
			"browser",
			"platform",
			"ip_address",
			"system",
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
			"uid",
			"name",
			"app",
			"class",
			"method",
			"task",
			"note",
			"browser",
			"platform",
			"ip_address",
			"system",
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
			"uid",
			"name",
			"app",
			"class",
			"method",
			"task",
			"note",
			"browser",
			"platform",
			"ip_address" 
		];
	}
}
