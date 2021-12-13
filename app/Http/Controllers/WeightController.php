<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreWeightRequest;

/**
 * Class WeightController
 * @package App\Http\Controllers
 */
class WeightController extends Controller
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
   
        return view('weight.index');
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weight = new Weight();
        return view('weight.create', compact('weight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeightRequest $request)
    {
        request()->validate(Weight::$rules);

        $weight = Weight::create($request->all());

        return redirect()->route('weights.index')
            ->with('success', 'Peso creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weight = Weight::find($id);

        return view('weight.show', compact('weight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weight = Weight::find($id);

        return view('weight.edit', compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Weight $weight
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWeightRequest $request, Weight $weight)
    {
        request()->validate(Weight::$rules);

        $weight->update($request->all());

        return redirect()->route('weights.index')
            ->with('success', 'Peso actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $weight = Weight::find($id)->delete();

        return redirect()->route('weights.index')
            ->with('success', 'Peso eliminado correctamente');
    }
}
