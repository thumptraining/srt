<?php

namespace App\Http\Controllers;

use App\Models\Intermediate;
use Illuminate\Http\Request;

/**
 * Class IntermediateController
 * @package App\Http\Controllers
 */
class IntermediateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intermediates = Intermediate::paginate();

        return view('intermediate.index', compact('intermediates'))
            ->with('i', (request()->input('page', 1) - 1) * $intermediates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $intermediate = new Intermediate();
        return view('intermediate.create', compact('intermediate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Intermediate::$rules);

        $intermediate = Intermediate::create($request->all());

        return redirect()->route('intermediates.index')
            ->with('success', 'Intermediate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intermediate = Intermediate::find($id);

        return view('intermediate.show', compact('intermediate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intermediate = Intermediate::find($id);

        return view('intermediate.edit', compact('intermediate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Intermediate $intermediate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intermediate $intermediate)
    {
        request()->validate(Intermediate::$rules);

        $intermediate->update($request->all());

        return redirect()->route('intermediates.index')
            ->with('success', 'Intermediate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $intermediate = Intermediate::find($id)->delete();

        return redirect()->route('intermediates.index')
            ->with('success', 'Intermediate deleted successfully');
    }
}
