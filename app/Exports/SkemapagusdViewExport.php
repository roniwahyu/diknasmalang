<?php 

namespace App\Exports;
use App\Models\SkemaPaguSd;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SkemapagusdViewExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	protected $query;

	protected $rec_id;

    public function __construct($query, $rec_id)
    {
        $this->query = $query->select(SkemaPaguSd::exportViewFields());
        $this->rec_id = $rec_id;
    }


    public function query()
    {
        return $this->query->where("id", $this->rec_id);
    }


	public function headings(): array
    {
        return [
			'Id',
			'Sekolah Id',
			'Namasekolah',
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
			$record->sekolah_id,
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
