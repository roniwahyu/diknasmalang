<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermissionsAddRequest;
use App\Http\Requests\RolePermissionsEditRequest;
use App\Models\RolePermissions;
use Illuminate\Http\Request;
use Exception;
class RolePermissionsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.rolepermissions.list";
		$query = RolePermissions::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			RolePermissions::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "role_permissions.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, RolePermissions::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = RolePermissions::query();
		$record = $query->findOrFail($rec_id, RolePermissions::viewFields());
		return $this->renderView("pages.rolepermissions.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.rolepermissions.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(RolePermissionsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save RolePermissions record
		$record = RolePermissions::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("rolepermissions", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(RolePermissionsEditRequest $request, $rec_id = null){
		$query = RolePermissions::query();
		$record = $query->findOrFail($rec_id, RolePermissions::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("rolepermissions", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.rolepermissions.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = RolePermissions::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
