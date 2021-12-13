<?php

namespace App\Http\Controllers;

use App\Models\Beginner;

use App\Http\Requests\StorebeginnerRequest;

/**
 * Class BeginnerController
 * @package App\Http\Controllers
 */
class BeginnerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beginners = Beginner::paginate();

        return view('beginner.index', compact('beginners'))
            ->with('i', (request()->input('page', 1) - 1) * $beginners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beginner = new Beginner();
        return view('beginner.create', compact('beginner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebeginnerRequest $request)
    {
        request()->validate(Beginner::$rules);

        $beginner = Beginner::create($request->all());

        return redirect()->route('beginners.index')
            ->with('success', 'Plan creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beginner = Beginner::find($id);

        return view('beginner.show', compact('beginner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beginner = Beginner::find($id);

        return view('beginner.edit', compact('beginner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Beginner $beginner
     * @return \Illuminate\Http\Response
     */
    public function update(StorebeginnerRequest $request, Beginner $beginner)
    {
        request()->validate(Beginner::$rules);

        $beginner->update($request->all());

        return redirect()->route('beginners.index')
            ->with('success', 'Plan actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $beginner = Beginner::find($id)->delete();

        return redirect()->route('beginners.index')
            ->with('success', 'Plan eliminado con éxito');
    }
}
