<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\OrderPemeriksaan;
use App\Models\Pembayaran;
use App\Models\StockReagen;

class AdminController extends Controller
{
    // Menampilkan dashboard Admin
    public function dashboard()
    {
        // $jumlahPasien = Pasien::count();
        // $jumlahPemeriksaan = OrderPemeriksaan::count();
        // $jumlahPembayaran = Pembayaran::count();
        // $stokReagen = StockReagen::count();

        return view('admin.dashboard', compact('jumlahPasien', 'jumlahPemeriksaan', 'jumlahPembayaran', 'stokReagen'));
    }

    // Halaman registrasi pasien
    public function registrasi()
    {
        return view('admin.registrasi');
    }

    // Proses penyimpanan data pasien baru
    public function storeRegistrasi(Request $request)
    {
        /*
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:10',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
        ]);
        */

        // $pasien = new Pasien();
        // $pasien->nama = $request->nama;
        // $pasien->tanggal_lahir = $request->tanggal_lahir;
        // $pasien->jenis_kelamin = $request->jenis_kelamin;
        // $pasien->alamat = $request->alamat;
        // $pasien->telepon = $request->telepon;
        // $pasien->save();

        return redirect()->back()->with('success', 'Pasien baru telah terdaftar.');
    }

    // Halaman order pemeriksaan laboratorium
    public function orderPemeriksaan()
    {
        // $pasiens = Pasien::all();
        return view('admin.order-pemeriksaan', compact('pasiens'));
    }

    // Proses penyimpanan order pemeriksaan
    public function storeOrderPemeriksaan(Request $request)
    {
        /*
        $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'jenis_pemeriksaan' => 'required|string|max:255',
            'tanggal_pemeriksaan' => 'required|date',
        ]);
        */

        // $order = new OrderPemeriksaan();
        // $order->pasien_id = $request->pasien_id;
        // $order->jenis_pemeriksaan = $request->jenis_pemeriksaan;
        // $order->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        // $order->status = 'pending';
        // $order->save();

        return redirect()->back()->with('success', 'Order pemeriksaan telah dibuat.');
    }

    // Halaman pembayaran pemeriksaan
    public function pembayaran()
    {
        // $orders = OrderPemeriksaan::where('status', 'selesai')->get();
        return view('admin.pembayaran', compact('orders'));
    }

    // Proses pembayaran pemeriksaan
    public function storePembayaran(Request $request)
    {
        /*
        $request->validate([
            'order_id' => 'required|exists:order_pemeriksaans,id',
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
        ]);
        */

        // $pembayaran = new Pembayaran();
        // $pembayaran->order_id = $request->order_id;
        // $pembayaran->jumlah = $request->jumlah;
        // $pembayaran->metode_pembayaran = $request->metode_pembayaran;
        // $pembayaran->save();

        return redirect()->back()->with('success', 'Pembayaran berhasil dicatat.');
    }

    // Halaman settings Admin
    public function settings()
    {
        return view('admin.settings');
    }

    // Halaman kontak
    public function kontak()
    {
        return view('admin.kontak');
    }

    // Halaman bantuan (Help)
    public function help()
    {
        return view('admin.help');
    }
}
