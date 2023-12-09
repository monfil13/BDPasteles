<?php

namespace App\Http\Controllers;

use App\Models\Pedit;
use Illuminate\Http\Request;

/**
 * Class PeditController
 * @package App\Http\Controllers
 */
class PeditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedits = Pedit::paginate();

        return view('pedit.index', compact('pedits'))
            ->with('i', (request()->input('page', 1) - 1) * $pedits->perPage());
    }

    public function __construct(){
        $this->middleware('auth', ['only'=>['create', 'store', 'show', 'update', 'edit', 'destroy', 'index', 'vistaPedidosFecha']]);
    }
/**VISTA */

    public function vistaPedidosFecha()
    {
        $pedidos = DB::table('vista_pedidos_por_fecha')->get();
        return view('cake.vistaPedidosFecha', compact('pedidos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedit = new Pedit();
        return view('pedit.create', compact('pedit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pedit::$rules);

        $pedit = Pedit::create($request->all());

        return redirect()->route('pedits.index')
            ->with('success', 'Pedido registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedit = Pedit::find($id);

        return view('pedit.show', compact('pedit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedit = Pedit::find($id);

        return view('pedit.edit', compact('pedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pedit $pedit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedit $pedit)
    {
        request()->validate(Pedit::$rules);

        $pedit->update($request->all());

        return redirect()->route('pedits.index')
            ->with('success', 'Pedido actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pedit = Pedit::find($id)->delete();

        return redirect()->route('pedits.index')
            ->with('success', 'Pedido eliminado exitosamente.');
    }
}
