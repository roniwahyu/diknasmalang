<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionsAddRequest;
use App\Models\Permissions;
use Illuminate\Http\Request;
use Exception;
class PermissionsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.permissions.list";
		$query = Permissions::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Permissions::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "permissions.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Permissions::listFields());
		return $this->renderView($view, compact("records"));
	}
}
