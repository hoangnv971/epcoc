<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ExportQRController extends Controller
{

    public function index()
    {
        $code = Code::find(1);
        $data = "1233123asdqweqwee";
        
        $imgBase64 = QrCode::format('png')->merge('ss.png', 0.3, true)
        ->size(500)->errorCorrection('H')
        ->generate('Welcome to kerneldev.com!');

        return view('export_qr', compact('imgBase64'));
    }
}
