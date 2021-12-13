
<div class="avatar flex justify-center items-center ">
    <div class="mb-8 rounded-full w-36 h-36">
        <img src="{{asset('img/corriendo.png')}}">
    </div>
</div> 
<!-- SEMANA DIA FASE -->
<div class="grid sm:grid-cols-3 gap-2 mb-2">
    <div class=" w-full mb-2">
        <!-- semana -->
        {{ Form::label('Semana') }}
        {{ Form::number('week', $intermediate->week, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('week') ? ' is-invalid' : ''), 'placeholder' => 'Semana']) }}
        
    </div>
    <div class=" w-full mb-2">
        <!-- Dia -->
        {{ Form::label('Día') }}
        {{ Form::select('day', array('Lunes' => 'Lunes', 'Martes' => 'Martes','Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo' ), $intermediate->day, ['class' => 'w-full select select-bordered select-primary' . ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Día']) }}
        
    </div>
    <div class=" w-full mb-2">
        <!-- Fase del entrenmaiento -->
        {{ Form::label('Período') }}
        {{ Form::select('stages', array('Básico' => 'Básico', 'General' => 'General','Específico' => 'Específico' ), $intermediate->stages, ['class' => 'w-full select select-bordered select-primary' . ($errors->has('stages') ? ' is-invalid' : ''), 'placeholder' => 'Período']) }}
        
    </div>
    {!! $errors->first('week', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('day', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('stages', '
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
<!-- Categoria e intensidad -->
<div class="grid sm:grid-cols-2 gap-2">
    <div class=" w-full mb-2">
        <!-- Categoria -->
        {{ Form::label('Tipo de entrenamiento') }}
        {{ Form::select('categories', array('Repeticiones' => 'Repeticiones', 'Carrera continua' => 'Carrera continua','Intervalos' => 'Intervalos', 'Fortalecimiento' => 'Fortalecimiento'), $intermediate->categories, ['class' => 'w-full select select-bordered select-primary' . ($errors->has('categories') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de entrenamiento']) }}
        
    </div>

    <!-- intent. Calent -->
    <div class=" w-full mb-2">
        {{ Form::label('Intensidad') }}
        {{ Form::select('wzone', array('Suave' => 'Z1 / 50% - 60%', 'Aeróbico' => 'Z2 /60% - 70%','Umbral aeróbico' => 'Z3 /70% - 80%', 'Umbral Anaeróbico' => 'Z4 /80% - 90%', 'VO2Máx' => 'Z5 /90% - 100%' ), $intermediate->wzone, ['class' => 'w-full select select-bordered select-primary' . ($errors->has('wzone') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
        
    </div>
    {!! $errors->first('categories', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('wzone', '
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

<!-- Descrip. Calent -->
<div class=" w-full mb-5">
    {{ Form::label('Calentamiento.') }}
    {{ Form::textarea('warm', $intermediate->warm, ['class' => 'w-full textarea h-24 textarea-bordered textarea-primary' . ($errors->has('warm') ? ' is-invalid' : ''), 'placeholder' => 'Descripción...']) }}
    {!! $errors->first('warm', '
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

<!-- tiempo Calent -->
<div class="grid grid-cols-3 gap-2">
    <div class=" w-full mb-2">
        {{ Form::label('Hora') }}
        {{ Form::number('whours', $intermediate->whours, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('whours') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Minutos') }}
        {{ Form::number('wminute', $intermediate->wminute, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('wminute') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Segundos') }}
        {{ Form::number('wseconds', $intermediate->wseconds, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('wseconds') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    {!! $errors->first('whours', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('wminute', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('wseconds', '
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
<div class="divider"></div>

<!-- REPETICIONES E INTENSIDAD -->
<div class="grid sm:grid-cols-2 gap-2">
    <div class=" w-full mb-2">
        {{ Form::label('Repeticiones.') }}
        {{ Form::text('rep', $intermediate->rep, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('rep') ? ' is-invalid' : ''), 'placeholder' => 'Repeticiones']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Intensidad.') }}
        {{ Form::select('tzone', array('Suave' => 'Z1 / 50% - 60%', 'Aeróbico' => 'Z2 /60% - 70%','Umbral aeróbico' => 'Z3 /70% - 80%', 'Umbral Anaeróbico' => 'Z4 /80% - 90%', 'VO2Máx' => 'Z5 /90% - 100%' ), $intermediate->tzone, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('tzone') ? ' is-invalid' : ''), 'placeholder' => 'Intensidad']) }}
        
    </div>
    {!! $errors->first('rep', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('tzone', '
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

<!-- TIEMPO DE ENTRENAMIENTO -->
<div class="grid grid-cols-3 gap-2">
    <div class=" w-full mb-2">
        {{ Form::label('Hora') }}
        {{ Form::number('thours', $intermediate->thours, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('thours') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Minutos') }}
        {{ Form::number('tminute', $intermediate->tminute, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('tminute') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Segundos') }}
        {{ Form::number('tseconds', $intermediate->tseconds, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('tseconds') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    {!! $errors->first('thours', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('tminute', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('tseconds', '
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

<!-- DESCRIPCION DE ENTRENAMIENTO -->
<div class=" w-full mb-5">
    {{ Form::label('Entrenamiento.') }}
    {{ Form::textarea('workout', $intermediate->workout, ['class' => 'w-full textarea h-24 textarea-bordered textarea-primary' . ($errors->has('workout') ? ' is-invalid' : ''), 'placeholder' => 'Descripción...']) }}
    {!! $errors->first('workout', '
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

<div class="divider"></div>

<!-- SOLTURA -->
<div class=" w-full mb-5">
    {{ Form::label('Soltura.') }}
    {{ Form::textarea('cool', $intermediate->cool, ['class' => 'w-full textarea h-24 textarea-bordered textarea-primary' . ($errors->has('cool') ? ' is-invalid' : ''), 'placeholder' => 'Descripción...']) }}
    {!! $errors->first('cool', '
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

<!-- TIEMPO DE SOLTURA -->
<div class="grid grid-cols-3 gap-2">
    <div class=" w-full mb-2">
        {{ Form::label('Hora') }}
        {{ Form::text('chours', $intermediate->chours, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('chours') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Minutos') }}
        {{ Form::text('cminute', $intermediate->cminute, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('cminute') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    <div class=" w-full mb-2">
        {{ Form::label('Segundos') }}
        {{ Form::text('cseconds', $intermediate->cseconds, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('cseconds') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
        
    </div>
    {!! $errors->first('chours', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('cminute', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('cseconds', '
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

<div class="box-footer mt-10">
    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
</div>
