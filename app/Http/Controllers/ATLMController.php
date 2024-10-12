<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPemeriksaan;
use App\Models\HasilPemeriksaan;
use App\Models\LaporanKeuangan;
use App\Models\StockReagen;

class ATLMController extends Controller
{
    // Menampilkan dashboard ATLM
    public function dashboard()
    {
        // $jumlahPemeriksaan = OrderPemeriksaan::count();
        // $jumlahReagen = StockReagen::count();
        // return view('atlm.dashboard', compact('jumlahPemeriksaan', 'jumlahReagen'));
    }

    // Halaman Pemeriksaan (Input hasil pemeriksaan pasien)
    public function pemeriksaan()
    {
        // $orders = OrderPemeriksaan::where('status', 'pending')->get();
        // return view('atlm.pemeriksaan', compact('orders'));
    }

    // Menyimpan hasil pemeriksaan
    public function storePemeriksaan(Request $request)
    {
        // $request->validate([
        //     'order_id' => 'required|exists:order_pemeriksaans,id',
        //     'hasil' => 'required|string',
        // ]);

        // $hasilPemeriksaan = new HasilPemeriksaan();
        // $hasilPemeriksaan->order_id = $request->order_id;
        // $hasilPemeriksaan->hasil = $request->hasil;
        // $hasilPemeriksaan->validasi = 'pending';
        // $hasilPemeriksaan->save();

        // return redirect()->back()->with('success', 'Hasil pemeriksaan telah disimpan.');
    }

    // Halaman riwayat pemeriksaan
    public function riwayatPemeriksaan()
    {
        // $riwayat = HasilPemeriksaan::with('order')->get();
        // return view('atlm.riwayat-pemeriksaan', compact('riwayat'));
    }

    // Validasi hasil pemeriksaan
    public function validasiPemeriksaan(Request $request)
    {
        // $request->validate([
        //     'hasil_id' => 'required|exists:hasil_pemeriksaans,id',
        // ]);

        // $hasilPemeriksaan = HasilPemeriksaan::find($request->hasil_id);
        // $hasilPemeriksaan->validasi = 'valid';
        // $hasilPemeriksaan->save();

        // return redirect()->back()->with('success', 'Hasil pemeriksaan telah divalidasi.');
    }

    // Cetak hasil pemeriksaan (pdf/download)
    public function cetakPemeriksaan($id)
    {
        // $hasil = HasilPemeriksaan::findOrFail($id);
        // // Logika untuk mencetak (misalnya generate PDF)
        // return view('atlm.cetak-pemeriksaan', compact('hasil'));
    }

    // Halaman laporan keuangan
    public function laporanKeuangan()
    {
        // $laporanKeuangan = LaporanKeuangan::all();
        // return view('atlm.laporan-keuangan', compact('laporanKeuangan'));
    }

    // Halaman stock reagen
    public function stockReagen()
    {
        // $stockReagen = StockReagen::all();
        // return view('atlm.stock-reagen', compact('stockReagen'));
    }

    // Halaman settings untuk ATLM
    public function settings()
    {
        return view('atlm.settings');
    }

    // Halaman kontak
    public function kontak()
    {
        return view('atlm.kontak');
    }

    // Halaman bantuan
    public function help()
    {
        return view('atlm.help');
    }
}
