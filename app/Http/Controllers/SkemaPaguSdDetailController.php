<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SkemaPaguSdDetailAddRequest;
use App\Models\SkemaPaguSdDetail;
use Illuminate\Http\Request;
use \PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SkemapagusddetailListExport;
use Exception;
class SkemaPaguSdDetailController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.skemapagusddetail.list";
		$query = SkemaPaguSdDetail::query();
		$limit = $request->limit ?? 25;
		if($request->search){
			$search = trim($request->search);
			SkemaPaguSdDetail::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "skema_pagu_sd_detail.id";
		$ordertype = $request->ordertype ?? "asc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		// if request format is for export example:- product/index?export=pdf
		if($this->getExportFormat()){
			return $this->ExportList($query); // export current query
		}
		$records = $query->paginate($limit, SkemaPaguSdDetail::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = SkemaPaguSdDetail::query();
		$record = $query->findOrFail($rec_id, SkemaPaguSdDetail::viewFields());
		return $this->renderView("pages.skemapagusddetail.view", ["data" => $record]);
	}
	

	/**
     * Export table records to different format
	 * supported format:- PDF, CSV, EXCEL, HTML
	 * @param \Illuminate\Database\Eloquent\Model $query
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
	private function ExportList($query){
		ob_end_clean(); // clean any output to allow file download
		$filename = "ListSkemaPaguSdDetailReport-" . date_now();
		$format = $this->getExportFormat();
		if($format == "print"){
			$records = $query->get(SkemaPaguSdDetail::exportListFields());
			return view("reports.skemapagusddetail-list", ["records" => $records]);
		}
		elseif($format == "pdf"){
			$records = $query->get(SkemaPaguSdDetail::exportListFields());
			$pdf = PDF::loadView("reports.skemapagusddetail-list", ["records" => $records]);
			return $pdf->download("$filename.pdf");
		}
		elseif($format == "csv"){
			return Excel::download(new SkemapagusddetailListExport($query), "$filename.csv", \Maatwebsite\Excel\Excel::CSV);
		}
		elseif($format == "excel"){
			return Excel::download(new SkemapagusddetailListExport($query), "$filename.xlsx", \Maatwebsite\Excel\Excel::XLSX);
		}
	}
}
