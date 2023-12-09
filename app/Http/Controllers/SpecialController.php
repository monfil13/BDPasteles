<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

/**
 * Class SpecialController
 * @package App\Http\Controllers
 */
class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specials = Special::paginate();

        return view('special.index', compact('specials'))
            ->with('i', (request()->input('page', 1) - 1) * $specials->perPage());
    }

    public function __construct(){
        $this->middleware('auth', ['only'=>['create', 'store', 'show', 'update', 'edit', 'destroy', 'index', 'consulta3']]);
    }

    public function consulta3()
    {
        // Consulta para obtener todos los pasteles
        $specials = Special::all();
        return view('special.consulta3', compact('specials'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $special = new Special();
        return view('special.create', compact('special'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Special::$rules);

        $special = Special::create($request->all());

        return redirect()->route('specials.index')
            ->with('success', 'Pedido Especial registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $special = Special::find($id);

        return view('special.show', compact('special'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $special = Special::find($id);

        return view('special.edit', compact('special'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Special $special
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Special $special)
    {
        request()->validate(Special::$rules);

        $special->update($request->all());

        return redirect()->route('specials.index')
            ->with('success', 'Pedido Especial actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $special = Special::find($id)->delete();

        return redirect()->route('specials.index')
            ->with('success', 'Pedido Especial eliminado exitosamente.');
    }
}
