@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pembayaran {{ $pembayaran->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pembayaran') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pembayaran/' . $pembayaran->id . '/edit') }}" title="Edit pembayaran"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pembayaran' . '/' . $pembayaran->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pembayaran" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pembayaran->id }}</td>
                                    </tr>
                                    <tr><th> Deskripsi Produk </th><td> {{ $pembayaran->deskripsi_produk }} </td></tr><tr><th> Jumlah Pembelian </th><td> {{ $pembayaran->jumlah_pembelian }} </td></tr><tr><th> Total Harga </th><td> {{ $pembayaran->total_harga }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
