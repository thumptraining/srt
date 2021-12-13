<?php

namespace App\Http\Controllers;

use App\Models\Speed;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpeedRequest;

/**
 * Class SpeedController
 * @package App\Http\Controllers
 */
class SpeedController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Crear controles')->only('index', 'edit', 'update' );
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speeds = Speed::paginate();

        return view('speed.index', compact('speeds'))
            ->with('i', (request()->input('page', 1) - 1) * $speeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speed = new Speed();
        return view('speed.create', compact('speed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpeedRequest $request)
    {
        request()->validate(Speed::$rules);

        $speed = Speed::create($request->all());

        return redirect()->route('speeds.index')
            ->with('success', 'Control creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $speed = Speed::find($id);

        return view('speed.show', compact('speed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speed = Speed::find($id);

        return view('speed.edit', compact('speed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Speed $speed
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSpeedRequest $request, Speed $speed)
    {
        request()->validate(Speed::$rules);

        $speed->update($request->all());

        return redirect()->route('speeds.index')
            ->with('success', 'Control actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $speed = Speed::find($id)->delete();

        return redirect()->route('speeds.index')
            ->with('success', 'Control eliminado con éxito');
    }
}
