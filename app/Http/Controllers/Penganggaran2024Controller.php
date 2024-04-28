<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Penganggaran2024AddRequest;
use App\Http\Requests\Penganggaran2024EditRequest;
use App\Models\Penganggaran2024;
use Illuminate\Http\Request;
use Exception;
class Penganggaran2024Controller extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.penganggaran2024.list";
		$query = Penganggaran2024::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Penganggaran2024::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "penganggaran2024.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Penganggaran2024::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Penganggaran2024::query();
		$record = $query->findOrFail($rec_id, Penganggaran2024::viewFields());
		return $this->renderView("pages.penganggaran2024.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.penganggaran2024.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Penganggaran2024AddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Penganggaran2024 record
		$record = Penganggaran2024::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("penganggaran2024", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Penganggaran2024EditRequest $request, $rec_id = null){
		$query = Penganggaran2024::query();
		$record = $query->findOrFail($rec_id, Penganggaran2024::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("penganggaran2024", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.penganggaran2024.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Penganggaran2024::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
