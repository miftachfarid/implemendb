  
@extends("layout")

@push("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
@endpush

@section("content")
    <h1>Daftar Mahasiswa</h1>
    {!! $html->table() !!}
@endsection

@push("script")
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
    {!! $html->scripts() !!}
@endpush