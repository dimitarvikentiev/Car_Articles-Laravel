<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use PDF;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $post = Post::findOrFail($id); 
        $pdf = PDF::loadView('pdf', ['post' => $post]);
        return $pdf->download('{{ $post->title }}'.'.pdf');
    }
}
