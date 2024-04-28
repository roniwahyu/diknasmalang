
@extends('layouts.report')
@section('content')
<div id="report-title"><h1>Skema Pagu Sd Details</h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Id</th>
            <td>{{ $record->id }}</td>
        </tr>
        <tr>
            <th>Sekolah Id</th>
            <td>{{ $record->sekolah_id }}</td>
        </tr>
        <tr>
            <th>Namasekolah</th>
            <td>{{ $record->namasekolah }}</td>
        </tr>
        <tr>
            <th>Pagu Oktober</th>
            <td>{{ $record->pagu_oktober }}</td>
        </tr>
        <tr>
            <th>Input Sipd 2024</th>
            <td>{{ $record->input_sipd_2024 }}</td>
        </tr>
        <tr>
            <th>Selisih</th>
            <td>{{ $record->selisih }}</td>
        </tr>
        <tr>
            <th>Bosda 9Bulan</th>
            <td>{{ $record->bosda_9bulan }}</td>
        </tr>
        <tr>
            <th>Bosda 12Bulan</th>
            <td>{{ $record->bosda_12bulan }}</td>
        </tr>
        <tr>
            <th>Jml Gttptt</th>
            <td>{{ $record->jml_gttptt }}</td>
        </tr>
        <tr>
            <th>Tunjangan</th>
            <td>{{ $record->tunjangan }}</td>
        </tr>
        <tr>
            <th>Tunjangan Total</th>
            <td>{{ $record->tunjangan_total }}</td>
        </tr>
        <tr>
            <th>Pagu Akhir</th>
            <td>{{ $record->pagu_akhir }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $record->keterangan }}</td>
        </tr>
    </tbody>
</table>
@endsection
