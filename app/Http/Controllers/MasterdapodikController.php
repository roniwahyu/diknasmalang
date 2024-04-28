<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\MasterdapodikAddRequest;
use App\Http\Requests\MasterdapodikEditRequest;
use App\Models\Masterdapodik;
use Illuminate\Http\Request;
use Exception;
class MasterdapodikController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.masterdapodik.list";
		$query = Masterdapodik::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Masterdapodik::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "masterdapodik.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Masterdapodik::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Masterdapodik::query();
		$record = $query->findOrFail($rec_id, Masterdapodik::viewFields());
		return $this->renderView("pages.masterdapodik.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.masterdapodik.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(MasterdapodikAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Masterdapodik record
		$record = Masterdapodik::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("masterdapodik", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(MasterdapodikEditRequest $request, $rec_id = null){
		$query = Masterdapodik::query();
		$record = $query->findOrFail($rec_id, Masterdapodik::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("masterdapodik", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.masterdapodik.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Masterdapodik::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
