<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public $cidades = [[
        'id' => 1,
        'cidade' => 'Curitiba',
        'porte' => 'Grande',
    ]];

    public function __construct(){
        $aux = session('cidades');

        if(!isset($aux)){
            session(['cidades' => $this->cidades]);
        }
    }

    public function index(Request $request)
    {
        $cidades = session('cidades');
        return view('cidades.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aux = session('cidades');
        $ids = array_column($aux, 'id');

        if(count($ids) > 0){
            $new_id = max($ids) + 1;
        }
        else{
            $new_id = 1;
        }

        $novo = [
            'id' => $new_id,
            'cidade' => $request->cidade,
            'porte' => ucwords($request->porte)
        ];

        array_push($aux, $novo);
        session(['cidades' => $aux]);

        return redirect()->route('cidade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aux = session('cidades');
        $indice = array_search($id, array_column($aux, 'id'));
        if($indice === false) return view('404');
        $dados = $aux[$indice];

        return view('cidades.edit', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alterado = [
            'id' => $id,
            'cidade' => $request->cidade,
            'porte' => ucwords($request->porte)
        ];

        $aux = session('cidades');
        $indice = array_search($id, array_column($aux, 'id'));

        $aux[$indice] = $alterado;
        session(['cidades' => $aux]);

        return redirect()->route('cidade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aux = session('cidades');
        $indice = array_search($id, array_column($aux, 'id'));

        unset($aux[$indice]);
        session(['cidades' => $aux]);

        return redirect()->route('cidade.index');
    }
}
