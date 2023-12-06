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
    $this->middleware('auth', ['only'=>['update', 'edit', 'destroy', 'index']]);
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
            ->with('success', 'Cake created successfully.');
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
            ->with('success', 'Cake updated successfully');
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
            ->with('success', 'Cake deleted successfully');
    }
}
