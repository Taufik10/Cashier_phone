<!DOCTYPE html>
<html>
<head>
<title>Pemasukan</title>
<meta charset='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
body{font-size:14px; margin:0; padding:0; font-family:'Helvetica'}
.titpdf{font-size:16px; text-align:center; margin-bottom:30px}
table{width:100%; border-collapse:collapse}
tr{background:#fff}
th{background:#5F9EA0; color:#000; font-weight:400;}
td,th{padding:12px 6px; border:1px solid #222; text-align:center}
td{color:#000}
.status{background:#0073B7; color:#fff; padding:5px 0; width:100px; text-align:center; margin:auto}
</style>
</head>
<body>
    <h2 style="text-align:center">AIRA PHONE</h2>
    <h5 style="text-align:center;font-weight:1000px;">Pemasukan</h5>
    <hr /><br>
<table>
@if(count($pdf)===0)
@else
    <tr>
    <b>
    <th>No.</th>
    <th>Kode Penjualan</th>
    <th>Nama Pelanggan</th> 
    <th>Nama Handphone</th>            
    <th>Jumlah Pesanan</th>
    <th>Total Harga</th>
    </b>
    </tr>
    @foreach($pdf as $pdfs)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pdfs->kode_penjualan }}</td>
    <td>{{ $pdfs->pelanggan }}</td>
    <td>{{ $pdfs->naba }}</td>    
    <td>{{ $pdfs->jml }}</td>   
    <td>Rp. {{ number_format($pdfs->total,0,",",".") }}</td>
    </tr>
        @endforeach
@endif

    <tr>
        <td colspan="4">Jumlah</td>
        <td>{{ $pdf->sum('jml') }}</td>
        <td>Rp. {{ number_format($pdf->sum('total'),0,",",".") }}</td>
    </tr>
</table>
</div>
</body>
</html>