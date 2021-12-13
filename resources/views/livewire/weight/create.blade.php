<!-- This is an example component -->
<div class="w-full overflow-hidden flex justify-center items-center bg-white">
    <div class="w-full my-2 md:w-3/5 lg:w-2/5">
        <div class="flex justify-center items-center mt-10 mb-5">
            <div class="avatar">
                <div class="rounded-full w-36 h-36">
                <img src="{{Auth::user()->profile_photo_url}}">
                </div>
            </div> 
        </div>
        
        <div class="form-control ">
            <label class="label">
                <span class="label-text font-bold">Ingresar peso</span>
            </label> 
            <label class="label">
                <p class="label-text">El peso debe ser un número entero o decimal, si es decimal, la separación es con un punto, ejemplo (50.5)</p>
            </label> 
            
                <input class="w-full input input-primary input-bordered mt-3" type="number" placeholder="Ingresar peso" autocomplete="on" required>
                {{ Form::text('peso', $weight->peso, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('Peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso en Kilos']) }}
                {!! $errors->first('peso', '
                    <div class="alert alert-warning mt-2">
                        <div class="flex-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current"> 
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>                         
                            </svg> 
                            <label>:message</label>
                        </div>
                    </div>
                ') !!}
        </div>
        <button class="btn btn-block btn-primary my-5">Guardar</button> 
        
    </div>
</div>