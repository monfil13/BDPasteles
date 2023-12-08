<?php

namespace App\Http\Controllers;

use App\Models\Pasteler;
use Illuminate\Http\Request;

/**
 * Class PastelerController
 * @package App\Http\Controllers
 */
class PastelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastelers = Pasteler::paginate();

        return view('pasteler.index', compact('pastelers'))
            ->with('i', (request()->input('page', 1) - 1) * $pastelers->perPage());
    }

    public function __construct(){
        $this->middleware('auth', ['only'=>['update', 'edit', 'destroy', 'index']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasteler = new Pasteler();
        return view('pasteler.create', compact('pasteler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pasteler::$rules);

        $pasteler = Pasteler::create($request->all());

        return redirect()->route('pastelers.index')
            ->with('success', 'Pastelero registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasteler = Pasteler::find($id);

        return view('pasteler.show', compact('pasteler'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasteler = Pasteler::find($id);

        return view('pasteler.edit', compact('pasteler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pasteler $pasteler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasteler $pasteler)
    {
        request()->validate(Pasteler::$rules);

        $pasteler->update($request->all());

        return redirect()->route('pastelers.index')
            ->with('success', 'Pastelero actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pasteler = Pasteler::find($id)->delete();

        return redirect()->route('pastelers.index')
            ->with('success', 'Pastelero eliminado exitosamente.');
    }
}
