<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AudittrailAddRequest;
use App\Http\Requests\AudittrailEditRequest;
use App\Models\Audittrail;
use Illuminate\Http\Request;
use Exception;
class AudittrailController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.audittrail.list";
		$query = Audittrail::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Audittrail::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "audittrail.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Audittrail::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Audittrail::query();
		$record = $query->findOrFail($rec_id, Audittrail::viewFields());
		return $this->renderView("pages.audittrail.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.audittrail.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(AudittrailAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Audittrail record
		$record = Audittrail::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("audittrail", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(AudittrailEditRequest $request, $rec_id = null){
		$query = Audittrail::query();
		$record = $query->findOrFail($rec_id, Audittrail::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("audittrail", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.audittrail.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Audittrail::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
