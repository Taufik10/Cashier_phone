<?php namespace App\Http\Controllers;

use App\Tbarang;
use Illuminate\Http\Request;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function pdflaporanmingguan(Request $req)
	{
		$no = 1;
		$from = \Carbon\Carbon::parse($req->from);
		$to = \Carbon\Carbon::parse($req->to);
		$pdf = Tbarang::whereBetween('created_at', [$from ,$to])->groupBy('kode_penjualan')->selectRaw('*, group_concat(nama_barang) as naba, sum(jumlah) as jml')->get();
		// return $pdf;
		$html = view('transaksi.laporanmingguanreport')->with('pdf',$pdf)->with('no',$no);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($html->render())->setPaper('a4')->setOrientation('potrait')->setWarnings(false);
        return $pdf->stream();
	}

	public function laporan()
	{
		return view('transaksi.laporanming');
	}

}
