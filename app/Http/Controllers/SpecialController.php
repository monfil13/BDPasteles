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
            ->with('success', 'Special created successfully.');
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
            ->with('success', 'Special updated successfully');
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
            ->with('success', 'Special deleted successfully');
    }
}
