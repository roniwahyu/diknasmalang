<?php 

namespace App\Exports;
use App\Models\SkemaPaguSdDetail;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SkemapagusddetailListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(SkemaPaguSdDetail::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Id',
			'No',
			'Namasekolah',
			'Nama',
			'Jabatan',
			'Keterangan',
			'Sekolah Id'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->id,
			$record->no,
			$record->namasekolah,
			$record->nama,
			$record->jabatan,
			$record->keterangan,
			$record->sekolah_id
        ];
    }
}
