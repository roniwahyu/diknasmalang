
@extends('layouts.report')
@section('content')
<div id="report-title"><h1>Skema Pagu Sd</h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Sekolah</th>
            <th>Pagu Oktober</th>
            <th>Input Sipd 2024</th>
            <th>Selisih</th>
            <th>Bosda 9Bulan</th>
            <th>Bosda 12Bulan</th>
            <th>Jml Gttptt</th>
            <th>Tunjangan</th>
            <th>Tunjangan Total</th>
            <th>Pagu Akhir</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->namasekolah }}</td>
            <td>{{ $record->pagu_oktober }}</td>
            <td>{{ $record->input_sipd_2024 }}</td>
            <td>{{ $record->selisih }}</td>
            <td>{{ $record->bosda_9bulan }}</td>
            <td>{{ $record->bosda_12bulan }}</td>
            <td>{{ $record->jml_gttptt }}</td>
            <td>{{ $record->tunjangan }}</td>
            <td>{{ $record->tunjangan_total }}</td>
            <td>{{ $record->pagu_akhir }}</td>
            <td>{{ $record->keterangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
