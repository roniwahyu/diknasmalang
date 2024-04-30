<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Penganggaran2024AddRequest;
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
		$ordertype = $request->ordertype ?? "asc";
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
}
