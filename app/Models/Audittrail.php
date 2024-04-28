<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Audittrail extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'audittrail';
	

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
		'datetime','script','user','action','table','field','keyvalue','oldvalue','newvalue'
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
				Id LIKE ?  OR 
				Script LIKE ?  OR 
				User LIKE ?  OR 
				Action LIKE ?  OR 
				Table LIKE ?  OR 
				Field LIKE ?  OR 
				KeyValue LIKE ?  OR 
				OldValue LIKE ?  OR 
				NewValue LIKE ? 
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
			"Id AS id",
			"DateTime AS datetime",
			"Script AS script",
			"User AS user",
			"Action AS action",
			"Table AS table",
			"Field AS field",
			"KeyValue AS keyvalue",
			"OldValue AS oldvalue",
			"NewValue AS newvalue" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"Id AS id",
			"DateTime AS datetime",
			"Script AS script",
			"User AS user",
			"Action AS action",
			"Table AS table",
			"Field AS field",
			"KeyValue AS keyvalue",
			"OldValue AS oldvalue",
			"NewValue AS newvalue" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"Id AS id",
			"DateTime AS datetime",
			"Script AS script",
			"User AS user",
			"Action AS action",
			"Table AS table",
			"Field AS field",
			"KeyValue AS keyvalue",
			"OldValue AS oldvalue",
			"NewValue AS newvalue" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"Id AS id",
			"DateTime AS datetime",
			"Script AS script",
			"User AS user",
			"Action AS action",
			"Table AS table",
			"Field AS field",
			"KeyValue AS keyvalue",
			"OldValue AS oldvalue",
			"NewValue AS newvalue" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"Id AS id",
			"DateTime AS datetime",
			"Script AS script",
			"User AS user",
			"Action AS action",
			"Table AS table",
			"Field AS field",
			"KeyValue AS keyvalue",
			"OldValue AS oldvalue",
			"NewValue AS newvalue" 
		];
	}
}
