<?php

namespace App\Http\Controllers;

use App\Models\Associate;
use Illuminate\Http\Request;

Use Alert;
use App\Mail\avaEmail;
use Illuminate\Support\Facades\Mail;

class AssociateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associates = Associate::get();
    
        return view('admin.associates.index',compact('associates'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //  'name' => 'required',
             'date_birth' => 'required|date|before_or_equal:today',
            //  'n_bi' => 'required',
            //  'email' => 'required',
            //  'adress' => 'required',
            //  'phone' => 'required',
            //  'areas_afectadas' => 'required',
            //  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
  
        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postsImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postsImage);
            $input['image'] = "$postsImage";
        }
    
        
        Associate::create($input);
        
        Alert::success('Cadastrado com Sucesso', 'Entraremos em contacto em breve!');
        return redirect()->back();
    }

    public function status($id){
        $associate =Associate::find($id );
        if($associate->status==0){
            $associate->status = "1";
            $associate->update();
            alert()->success('Status atualizado com sucesso.','O associado será notificado.');

            Mail::to($associate->email)->send(new avaEmail($associate));
        }
        else if($associate->status==1){
            $associate->status = "0";
            $associate->update();
            Mail::to($associate->email)->send(new avaEmail($associate));
            alert()->success('Status atualizado com sucesso.','O desassociado será notificado.');

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Associate  $associate
     * @return \Illuminate\Http\Response
     */
    public function show(Associate $associate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Associate  $associate
     * @return \Illuminate\Http\Response
     */
    public function edit(Associate $associate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Associate  $associate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Associate $associate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Associate  $associate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associate $associate)
    {
        $associate->delete();
        Alert::success('Eliminado com Sucesso', '');
        return redirect()->back();
    }
}
