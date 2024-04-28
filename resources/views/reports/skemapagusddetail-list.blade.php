
@extends('layouts.report')
@section('content')
<div id="report-title"><h1>Skema Pagu SD Detail</h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>No</th>
            <th>Namasekolah</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Sekolah Id</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->no }}</td>
            <td>{{ $record->namasekolah }}</td>
            <td>{{ $record->nama }}</td>
            <td>{{ $record->jabatan }}</td>
            <td>{{ $record->keterangan }}</td>
            <td>{{ $record->sekolah_id }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
