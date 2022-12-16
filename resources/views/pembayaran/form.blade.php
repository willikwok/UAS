<div class="form-group {{ $errors->has('deskripsi_produk') ? 'has-error' : ''}}">
    <label for="deskripsi_produk" class="control-label">{{ 'Deskripsi Produk' }}</label>
    <input class="form-control" name="deskripsi_produk" type="text" id="deskripsi_produk" value="{{ isset($pembayaran->deskripsi_produk) ? $pembayaran->deskripsi_produk : ''}}" >
    {!! $errors->first('deskripsi_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jumlah_pembelian') ? 'has-error' : ''}}">
    <label for="jumlah_pembelian" class="control-label">{{ 'Jumlah Pembelian' }}</label>
    <input class="form-control" name="jumlah_pembelian" type="number" id="jumlah_pembelian" value="{{ isset($pembayaran->jumlah_pembelian) ? $pembayaran->jumlah_pembelian : ''}}" >
    {!! $errors->first('jumlah_pembelian', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_harga') ? 'has-error' : ''}}">
    <label for="total_harga" class="control-label">{{ 'Total Harga' }}</label>
    <input class="form-control" name="total_harga" type="number" id="total_harga" value="{{ isset($pembayaran->total_harga) ? $pembayaran->total_harga : ''}}" >
    {!! $errors->first('total_harga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_transaksi') ? 'has-error' : ''}}">
    <label for="id_transaksi" class="control-label">{{ 'Id Transaksi' }}</label>
    <input class="form-control" name="id_transaksi" type="number" id="id_transaksi" value="{{ isset($pembayaran->id_transaksi) ? $pembayaran->id_transaksi : ''}}" >
    {!! $errors->first('id_transaksi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
