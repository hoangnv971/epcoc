<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class ExportQRController extends Controller
{

    public function index()
    {
        $logoPath = public_path('/images/logo.jpg');
        return view('export_pdf', compact('logoPath'));
    }
}
