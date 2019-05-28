@extends('layouts.admin')

@section('content')


    <h1><i>Barang</i></h1>

    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                
            </tr>
        </thead>
        <tbody>

        @if($barangs)

            @foreach($barangs as $barang)

            <tr>
                <td>{{$barang->id}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->jumlah}}</td>
            </tr>

            @endforeach

        @endif

        </tbody>
    </table>


@endsection