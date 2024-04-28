<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SessionAddRequest;
use App\Http\Requests\SessionEditRequest;
use App\Models\Session;
use Illuminate\Http\Request;
use Exception;
class SessionController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.session.list";
		$query = Session::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Session::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "session.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Session::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Session::query();
		$record = $query->findOrFail($rec_id, Session::viewFields());
		return $this->renderView("pages.session.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.session.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(SessionAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("data", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['data'], "data");
			$modeldata['data'] = $fileInfo['filepath'];
		}
		
		//save Session record
		$record = Session::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("session", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(SessionEditRequest $request, $rec_id = null){
		$query = Session::query();
		$record = $query->findOrFail($rec_id, Session::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("data", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['data'], "data");
			$modeldata['data'] = $fileInfo['filepath'];
		}
			$record->update($modeldata);
			return $this->redirect("session", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.session.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Session::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
