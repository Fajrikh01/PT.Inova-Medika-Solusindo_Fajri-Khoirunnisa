<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        return view('dashboard.dashboard');
    }

    function pendaftaran() {
        echo 'Halaman Pendaftaran';
        echo '<h1>' . Auth::user()->name . '<h1>';
    }

    function dokter() {
        echo 'Halaman Tindakan Pasien';
        echo '<h1>' . Auth::user()->name . '<h1>';
    }

    function kasir() {
        echo 'Halaman Pembayaran';
        echo '<h1>' . Auth::user()->name . '<h1>';
    }
}
