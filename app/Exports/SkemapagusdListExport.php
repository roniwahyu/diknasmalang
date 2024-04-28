<?php 

namespace App\Exports;
use App\Models\SkemaPaguSd;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SkemapagusdListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(SkemaPaguSd::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Id',
			'Nama Sekolah',
			'Pagu Oktober',
			'Input Sipd 2024',
			'Selisih',
			'Bosda 9Bulan',
			'Bosda 12Bulan',
			'Jml Gttptt',
			'Tunjangan',
			'Tunjangan Total',
			'Pagu Akhir',
			'Keterangan'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->id,
			$record->namasekolah,
			$record->pagu_oktober,
			$record->input_sipd_2024,
			$record->selisih,
			$record->bosda_9bulan,
			$record->bosda_12bulan,
			$record->jml_gttptt,
			$record->tunjangan,
			$record->tunjangan_total,
			$record->pagu_akhir,
			$record->keterangan
        ];
    }
}
