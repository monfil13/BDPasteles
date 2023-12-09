<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate();

        return view('client.index', compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }

    public function __construct(){
        $this->middleware('auth', ['only'=>['create', 'store', 'show', 'update', 'edit', 'destroy', 'index', 'vistaNumerosTeziu']]);
    }


/*VISTA */
public function vistaNumerosTeziu()
{
    $clientesConTelefono = Client::where('telefono', 'LIKE', '231%')->get();
    $clientesSinTelefono = Client::where('telefono', 'NOT LIKE', '231%')->orWhereNull('telefono')->get();
    return view('client.vistaNumerosTeziu', compact('clientesConTelefono', 'clientesSinTelefono'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Client::$rules);

        $client = Client::create($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Cliente registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Cliente eliminado exitosamente. ');
    }
}
