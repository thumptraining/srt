
<div class="avatar flex justify-center items-center ">
    <div class="mb-8 rounded-full w-36 h-36">
      <img src="{{asset('img/running.png')}}">
    </div>
</div>

<div class=" w-full mb-10">
    <label class="label">
        <span class="label-text">Distancia del control</span>
    </label> 
    {{ Form::select('distance', array('100' => '100m', '200' => '200m','300' => '300m', '400' => '400m', '500' => '500m', '800' => '800m', '1000' => '1000m', '1500' => '1500m', '1600' => '1600m', '2000' => '2000m', '3000' => '3000m', '5000' => '5km', '7000' => '7 km', '8000' => '8 km', '10000' => '10 km', '15000' => '15 km', '21000' => '21 km', '25000' => '25km', '30000' => '30 km', '42195' => '42,195 km'), $speed->distance, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('distance') ? ' is-invalid' : ''), 'placeholder' => 'Distancia']) }}
    {!! $errors->first('distance', '
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

<div class=" w-full mb-10">
    <div class="divider">Tiempo del control.</div> 
    <div class="grid grid-cols-3 gap-4">
        <div>
            <label class="label">
                <span class="label-text">Hora</span>
            </label> 
            {{ Form::number('hours', $speed->hours, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            
        </div>
        <div>
            <label class="label">
                <span class="label-text">Minutos</span>
            </label> 
            {{ Form::number('minute', $speed->minute, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('minute') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            
        </div>
        <div>
            <label class="label">
                <span class="label-text">Segundos</span>
            </label> 
            {{ Form::number('seconds', $speed->seconds, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('seconds') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            
        </div>
    </div>
    
    {!! $errors->first('hours', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('minute', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('seconds', '
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

<div class=" w-full mb-10">
    <div class="divider">Ritmo del control.</div> 
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="label">
                <span class="label-text">Minutos</span>
            </label> 
            {{ Form::number('pminute', $speed->pminute, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('pminute') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            
        </div>
        <div>
            <label class="label">
                <span class="label-text">Segundos</span>
            </label> 
            {{ Form::number('pseconds', $speed->pseconds, ['class' => 'w-full input input-primary input-bordered' . ($errors->has('pseconds') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            
        </div>
        
    </div>
    {!! $errors->first('pminute', '
        <div class="alert alert-error my-2">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
                </svg> 
                <label>:message</label>
            </div>
        </div>
    ') !!}
    {!! $errors->first('pseconds', '
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
    {!! $errors->first('user_id', '
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



<button type="submit" class="btn btn-block">Guardar</button>

