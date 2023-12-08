<?php

namespace App\Http\Controllers;

use App\Models\Pingredient;
use Illuminate\Http\Request;

/**
 * Class PingredientController
 * @package App\Http\Controllers
 */
class PingredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pingredients = Pingredient::paginate();

        return view('pingredient.index', compact('pingredients'))
            ->with('i', (request()->input('page', 1) - 1) * $pingredients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pingredient = new Pingredient();
        return view('pingredient.create', compact('pingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pingredient::$rules);

        $pingredient = Pingredient::create($request->all());

        return redirect()->route('pingredients.index')
            ->with('success', 'Pingredient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pingredient = Pingredient::find($id);

        return view('pingredient.show', compact('pingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pingredient = Pingredient::find($id);

        return view('pingredient.edit', compact('pingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pingredient $pingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pingredient $pingredient)
    {
        request()->validate(Pingredient::$rules);

        $pingredient->update($request->all());

        return redirect()->route('pingredients.index')
            ->with('success', 'Pingredient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pingredient = Pingredient::find($id)->delete();

        return redirect()->route('pingredients.index')
            ->with('success', 'Pingredient deleted successfully');
    }
}
