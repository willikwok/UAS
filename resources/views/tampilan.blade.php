<link rel="stylesheet" type="text/css" href="/css/style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<script type="text/javascript" src="/js/app.js"></script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>


<!DOCTYPE html>
<html>

<head>

</head>

<p>Nama : WIlli</p>
<p>Nim  : 03081200028</p>
<img src="images/logo.png" alt="">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID Transaksi</th>
        <th scope="col">Total Harga</th>
      </tr>
    </thead>
    <tbody>



<body>
    <?php
    $rows = \DB::select('select id_transaksi, total_harga from cekout');
    foreach($rows as $row)
    echo'      <tr>
        <td scope="row">'.$row->id_transaksi.'</td>
        <td>'.$row->total_harga.'</td>
      </tr>';
    ?>
        </tbody>
    </table>


</body>

<html>

</html>