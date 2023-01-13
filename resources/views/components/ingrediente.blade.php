
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">My Fridge</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Ingredientes</h2>
        </div>
    </div>
    <?php 
        $ingredientes = DB::table('ingredientes')
        ->join('tipo_ingredientes', 'ingredientes.tipo_ingrediente', '=', 'tipo_ingredientes.id')
        ->select('ingredientes.*', 'tipo_ingredientes.nome as tipo')
        ->get();
        // dd($ingredientes);
    ?>  
    @php
        $items=[];
    @endphp

    @foreach ($ingredientes as $ingrediente)
        @php
            array_push($items, ['id'=>"$ingrediente->id", 'nome'=>"$ingrediente->nome", 'tipo'=>"$ingrediente->tipo"]);
        @endphp
    @endforeach



    @foreach($items as $key => $value)
        <div class="form-check border">
           
            <input class="form-check-input"
            type="checkbox"
            value={{ $value['id'] }}
            id={{ $value['id'] }}
            onclick="handleCheck({{ $value['id'] }})">

            <label class="form-check-label" for={{ $value['id'] }}>
                {{ $value['nome'] }}</label>
            <script>
                var cookies = [];
                var cookieName = 'ingrediente';
                checkCookie();
                function handleCheck(val){
                    const checkBox = document.getElementById(val);
                    
                    if (checkBox.checked == false){
                        const index = cookies.indexOf(val);
                        if(index > -1){
                            cookies.splice(index, 1);}
                            setCookie(cookies);
                        
                    } else {
                        cookies.push(val);            
                        setCookie(cookies);
                    }
                }
                function setCookie(cookies){
                    var date = new Date();
                    date.setTime(date.getTime() + (30*24*60*60*1000));
                    var expires = "expires=" + date.toUTCString();
                    document.cookie = `${cookieName}=${cookies}; ${expires}; path=/`;
                }
                function checkCookie(){
                    if(document.cookie.split('; ').some((item) => item.startsWith(`${cookieName}=`))){
                        var cookie = document.cookie.split('; ').find(row => row.startsWith(`${cookieName}=`)).split('=')[1];
                        console.log(cookie);
                        cookies = cookie.split(',');
                        for (var i = 0; i < cookies.length; i++) {
                            document.getElementById(cookies[i]).checked = true;
                        }
                    }
                }
            </script>
        </div>
    @endforeach
