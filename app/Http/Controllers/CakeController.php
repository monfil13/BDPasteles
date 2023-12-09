<?php

namespace App\Http\Controllers;
use App\Models\Cake;
use Illuminate\Http\Request;

/**
 * Class CakeController
 * @package App\Http\Controllers
 */
class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cakes = Cake::paginate();

        return view('cake.index', compact('cakes'))
            ->with('i', (request()->input('page', 1) - 1) * $cakes->perPage());
    }


public function __construct(){
    $this->middleware('auth', ['only'=>['create', 'store', 'show', 'update', 'edit', 'destroy', 'index', 'consulta', 'consulta2']]);
}



/*CONSULTAS* */

public function consulta()
{
    // Consulta para obtener todos los pasteles
    $pasteles = Cake::all();
    return view('cake.consulta', compact('pasteles'));

}

public function consulta2()
{
        // Consulta para obtener pasteles que cuesten más de 100 pesos
        $pasteles = Cake::where('precio', '>', 100)->get();
        return view('cake.consulta2', compact('pasteles'));
}

/*VISTAS* */

public function index2()
{
    return view('cake.index2');
}

public function vistaPastelesNombre()
{
    $pasteles = DB::table('vista_pasteles_ordenados_nombre')->get();
    return view('cake.vistaPastelesNombre', compact('pasteles'));
}

public function vistaPrecioAlto()
{
    $pasteles = DB::table('vista_pasteles_precio_alto')->get();
    return view('cake.vistaPrecioAlto', compact('pasteles'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cake = new Cake();
        return view('cake.create', compact('cake'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cake::$rules);

        $cake = Cake::create($request->all());

        return redirect()->route('cakes.index')
            ->with('success', 'Pastel registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cake = Cake::find($id);

        return view('cake.show', compact('cake'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cake = Cake::find($id);

        return view('cake.edit', compact('cake'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cake $cake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cake $cake)
    {
        request()->validate(Cake::$rules);

        $cake->update($request->all());

        return redirect()->route('cakes.index')
            ->with('success', 'Pastel actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cake = Cake::find($id)->delete();

        return redirect()->route('cakes.index')
            ->with('success', 'Pastel eliminado exitosamente.');
    }
}
