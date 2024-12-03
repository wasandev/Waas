<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    public function translate(Request $request)
    {
        $tr = new GoogleTranslate(); 
        $tr->setSource('en'); // ภาษาต้นทาง
        $tr->setTarget('th'); // ภาษาปลายทาง

        $text = $request->input('text'); // รับข้อความจาก user
        $result = $tr->translate($text); // แปลภาษา

        return view('translation', ['result' => $result]); // แสดงผลลัพธ์
    }
}
