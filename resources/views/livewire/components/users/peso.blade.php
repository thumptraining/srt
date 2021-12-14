<div class="w-full col-span-2">   
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>

                <tr>
                    <th></th> 
                    <th>Peso</th> 
                    <th>Fecha</th> 
                </tr>

            </thead> 

            <tbody>
                @foreach ($user as $us)
                <tr>
                    <th>{{$us->id}}</th> 
                    <td>{{$us->name}}</td> 
                    <td>58/85/21</td> 
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
