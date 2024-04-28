<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataNonAsn2022BkpsdmAddRequest;
use App\Http\Requests\DataNonAsn2022BkpsdmEditRequest;
use App\Models\DataNonAsn2022Bkpsdm;
use Illuminate\Http\Request;
use Exception;
class DataNonAsn2022BkpsdmController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.datanonasn2022bkpsdm.list";
		$query = DataNonAsn2022Bkpsdm::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			DataNonAsn2022Bkpsdm::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "data_non_asn2022_bkpsdm.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, DataNonAsn2022Bkpsdm::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = DataNonAsn2022Bkpsdm::query();
		$record = $query->findOrFail($rec_id, DataNonAsn2022Bkpsdm::viewFields());
		return $this->renderView("pages.datanonasn2022bkpsdm.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.datanonasn2022bkpsdm.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(DataNonAsn2022BkpsdmAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save DataNonAsn2022Bkpsdm record
		$record = DataNonAsn2022Bkpsdm::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("datanonasn2022bkpsdm", __('recordAddedSuccessfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(DataNonAsn2022BkpsdmEditRequest $request, $rec_id = null){
		$query = DataNonAsn2022Bkpsdm::query();
		$record = $query->findOrFail($rec_id, DataNonAsn2022Bkpsdm::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("datanonasn2022bkpsdm", __('recordUpdatedSuccessfully'));
		}
		return $this->renderView("pages.datanonasn2022bkpsdm.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = DataNonAsn2022Bkpsdm::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('recordDeletedSuccessfully'));
	}
}
