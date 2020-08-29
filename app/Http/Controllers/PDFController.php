<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormBorrow;
use PDF;


class PDFController extends Controller
{
    public function pdf($id)
    {
    	$form = FormBorrow::where('id', $id)->first();
    	$pdf = PDF::loadview('forms.borrow.pdf', compact('form'));

    	return @$pdf->stream();
    }
}
