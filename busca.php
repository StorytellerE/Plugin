<h3>Busca por cep 2:</h3>

<div>
    <label for="">Cep</label>
    <input type="text" id="cep" placeholder="Digita aí">
</div>
<br>
<div>
    <button id="buscar">Buscar</button>
</div>
<div>
    <p>Cidade: <span id="cidade"></span></p>
    <p>Estado <span id="estado"></span></p>
    <p>DDD: <span id="ddd"></span></p>
</div>
<script>
    const cep = document.querySelector("#cep");
    
    document.querySelector("#buscar").addEventListener('click', function(){
        const opcoes = {
            method:"GET",
            mode: "cors",
            cache: "default"
        }
        fetch(`https://viacep.com.br/ws/${cep.value}/json/`, opcoes)
        .then(
            response => { response.json()
            .then(data =>{
                document.querySelector("#cidade").textContent = data['localidade'];
                document.querySelector("#estado").textContent = data['uf'];
                document.querySelector("#ddd").textContent = data['ddd'];
            });
        }
        )
        
    });
</script>
<!-- Cotação: dolar -->
<h3>Cotação do Dólar:</h3>
<div>
    <h4>Dólar Agora</h4>
</div>
<br>
<div>
    <button id="buscarD"> Dólar Agora </button>
</div>
<br>
<div>
    <p>Compra: <span id="compra"> </span> </p>
    <p>Venda: <span id="venda"> </span> </p>
    <p>Maximo: <span id="max"> </span> </p>
    <p>Minimo: <span id="min"> </span> </p>
</div>
<script>
    document.querySelector("#buscarD").addEventListener('click', function(){
        const opcoes = {
            method:"GET",
            mode:"cors",
            cache:"default"
        }
        fetch(`https://economia.awesomeapi.com.br/json/last/USD-BRL`, opcoes)
        .then(
            response=>{ response.json()
            .then(data => {
                document.querySelector("#compra").textContent = data['USDBRL']['bid'];
                document.querySelector("#venda").textContent = data['USDBRL']['ask'];
                document.querySelector("#max").textContent = data['USDBRL']['high'];
                document.querySelector("#min").textContent = data['USDBRL']['low'];
            });
            }
        )
        
    });
    
</script>