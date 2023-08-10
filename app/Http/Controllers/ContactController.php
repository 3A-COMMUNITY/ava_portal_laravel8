<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use Alert;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);
        if(Mail::to('ulaengenhariainformatica@gmail.com')->send(new contactMail($validated))){
            Alert::success('Email enviado com Sucesso', 'Entraremos em contacto em breve!');
            return redirect()->back();
        }else{
            Alert::error('Falha ao enviar o Email', 'Por favor, preencha novamente o formulário!');
            return redirect()->back();
        }
    }
}
