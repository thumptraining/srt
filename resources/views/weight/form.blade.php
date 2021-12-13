
<div class="avatar flex justify-center items-center ">
    <div class="mb-8 rounded-full w-36 h-36">
        <img src="{{asset('img/bascula.png')}}">
    </div>
</div> 

<div class=" w-full mb-10">
    <label class="label">
        <span class="label-text">Ingresar Peso</span>
    </label> 
    {{ Form::text('peso', $weight->peso, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
    {!! $errors->first('peso', '
    
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
</div>
<div class=" w-full">
   
    {{ Form::hidden('user_id', Auth::user()->id, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
    {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
</div>

<button type="submit" class="btn btn-block">Guardar</button>