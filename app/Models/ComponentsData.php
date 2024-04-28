<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * user_id_option_list Model Action
     * @return array
     */
	function user_id_option_list(){
		$sqltext = "SELECT id as value, username as label FROM users";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * group_id_option_list Model Action
     * @return array
     */
	function group_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM groups";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
}
