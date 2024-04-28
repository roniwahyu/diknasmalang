<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class RolePermissions extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'role_permissions';
	

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
		'role_id','perm_id','permissions','name','action','isactive','module_id','class','method','params','userid','created','modified'
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
				permissions LIKE ?  OR 
				name LIKE ?  OR 
				action LIKE ?  OR 
				class LIKE ?  OR 
				method LIKE ?  OR 
				params LIKE ? 
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
			"role_id",
			"perm_id",
			"permissions",
			"name",
			"action",
			"isactive",
			"module_id",
			"class",
			"method",
			"params",
			"userid",
			"created",
			"modified",
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
			"role_id",
			"perm_id",
			"permissions",
			"name",
			"action",
			"isactive",
			"module_id",
			"class",
			"method",
			"params",
			"userid",
			"created",
			"modified",
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
			"role_id",
			"perm_id",
			"permissions",
			"name",
			"action",
			"isactive",
			"module_id",
			"class",
			"method",
			"params",
			"userid",
			"created",
			"modified",
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
			"role_id",
			"perm_id",
			"permissions",
			"name",
			"action",
			"isactive",
			"module_id",
			"class",
			"method",
			"params",
			"userid",
			"created",
			"modified",
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
			"role_id",
			"perm_id",
			"permissions",
			"name",
			"action",
			"isactive",
			"module_id",
			"class",
			"method",
			"params",
			"userid",
			"created",
			"modified" 
		];
	}
}
