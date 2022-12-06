
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
        session_start();
        $items=[];
    @endphp

    @foreach ($ingredientes as $ingrediente)
        @php
            array_push($items, ['id'=>"$ingrediente->id", 'nome'=>"$ingrediente->nome", 'tipo'=>"$ingrediente->tipo"]);
        @endphp
    @endforeach



    @foreach($items as $key => $value)
        <div class="form-check border">
            
            <input class="form-check-input" type="checkbox" value={{ $value['id'] }} id={{ $value['id'] }}>
            <label class="form-check-label" for={{ $value['id'] }}>
                {{ $value['nome'] }}</label>
            <!-- <a href="?add={{$key}}">Add</a> -->
            <script>
                var bt = document.getElementById("{{ $value['id'] }}");
                bt.onclick = () => {
                    console.log("{{ $value['id'] }}");
                   document.cookie="ingrediente={{ $value['id'] }}";
                }
            </script>
        </div>

    @endforeach
    @php
        setcookie("ingrediente", "ovo", time() + (86400 * 30), "/");
    @endphp
    <!-- @php
        if(isset($_GET['add'])){
            $ingredienteId = (int) $_GET['add'];
            if(isset($items[$ingredienteId])){
                $ingrediente = $items[$ingredienteId];
                if(!isset($_SESSION['fridge'])){
                    $_SESSION['fridge'] = [];
                }
                array_push($_SESSION['fridge'], $ingrediente);
                echo '<script>console.log("added '.$ingrediente['nome'].' to fridge")</script>';
            }
        }
    @endphp  -->
    <!-- create a cookie -->
    <!-- @php
        if(isset($_GET['add'])){
            $ingredienteId = (int) $_GET['add'];
            if(isset($items[$ingredienteId])){
                $ingrediente = $items[$ingredienteId];
                if(!isset($_COOKIE['fridge'])){
                    setcookie('fridge', json_encode([]), time() + (86400 * 30), "/");
                }
                $fridge = json_decode($_COOKIE['fridge']);
                array_push($fridge, $ingrediente);
                setcookie($ingrediente['id'], json_encode($ingrediente), time() + (86400 * 30), "/");
                echo '<script>console.log("added '.$ingrediente['nome'].' to fridge")</script>';
            }
        }
    @endphp -->
