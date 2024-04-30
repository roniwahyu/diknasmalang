<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkemaPaguSmpAddRequest;
use App\Models\SkemaPaguSmp;
use Illuminate\Http\Request;
use Exception;
class SkemaPaguSmpController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.skemapagusmp.list";
		$query = SkemaPaguSmp::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			SkemaPaguSmp::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "skema_pagu_smp.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, SkemaPaguSmp::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = SkemaPaguSmp::query();
		$record = $query->findOrFail($rec_id, SkemaPaguSmp::viewFields());
		return $this->renderView("pages.skemapagusmp.view", ["data" => $record]);
	}
}
