<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleAddRequest;
use App\Http\Requests\RoleEditRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Exception;
class RoleController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.role.list";
		$query = Role::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Role::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "role.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Role::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Role::query();
		$record = $query->findOrFail($rec_id, Role::viewFields());
		return $this->renderView("pages.role.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.role.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(RoleAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Role record
		$record = Role::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("role", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(RoleEditRequest $request, $rec_id = null){
		$query = Role::query();
		$record = $query->findOrFail($rec_id, Role::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("role", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.role.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Role::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
