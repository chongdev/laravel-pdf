<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index()
    {
        $order = [
            'code' => 'INV20/00012'
        ];

        $pdf = \PDF::loadView('pdf.invoice', ['order' => json_decode(json_encode($order))])

            ->setOptions([
                'defaultFont' => 'Prompt, sans-serif',
                'adminPassword' => 'password',
            ])
            ->setPaper('A4', 'portrait')

            ;

        return $pdf->stream('invoice.pdf');
    }

    public function landscape()
    {
        $order = [
            'code' => 'INV20/00012'
        ];

        $pdf = \PDF::loadView('pdf.invoice', ['order' => json_decode(json_encode($order))])

            ->setOptions([
                'defaultFont' => 'Prompt, sans-serif',
                'adminPassword' => 'password',
            ])
            ->setPaper('A4', 'landscape')

            ;

        return $pdf->stream('invoice.pdf');
    }

    public function download()
    {
        $data = [
            'test' => 123
        ];

        $pdf = \PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
