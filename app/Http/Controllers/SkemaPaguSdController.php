<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkemaPaguSdAddRequest;
use App\Models\SkemaPaguSd;
use Illuminate\Http\Request;
use Exception;
class SkemaPaguSdController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.skemapagusd.list";
		$query = SkemaPaguSd::query();
		$limit = $request->limit ?? 25;
		if($request->search){
			$search = trim($request->search);
			SkemaPaguSd::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "skema_pagu_sd.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, SkemaPaguSd::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = SkemaPaguSd::query();
		$record = $query->findOrFail($rec_id, SkemaPaguSd::viewFields());
		return $this->renderView("pages.skemapagusd.view", ["data" => $record]);
	}
	

	/**
     * Display Master Detail Pages
	 * @param string $rec_id //master record id
     * @return \Illuminate\View\View
     */
	function masterDetail($rec_id = null){
		return View("pages.skemapagusd.detail-pages", ["masterRecordId" => $rec_id]);
	}
}
