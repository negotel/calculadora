<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CALCULADORA SIMPLE EM HTML, CSS E JAVASCRIPT</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
        <!-- Styles -->
        <link href="assets/css/core.min.css" rel="stylesheet">
        <link href="assets/css/app.min.css" rel="stylesheet">
        <link href="assets/css/style.min.css" rel="stylesheet">
    </head>
    <body class="">
        <div class="row min-h-fullscreen center-vh p-20 m-0">
            <div class="col-6">
                <div class="card card-shadowed shadow-5 px-50 py-30 w-300px mx-auto" style="max-width: 100%;" id="show">
                    <h5 class="text-uppercase text-center">Calculadora</h5>
                    <br>
                    <div class="resposta-mensagem"></div>
                    
                    
                    <form class="form-type-material" action="#" method="POST" id="calculadora">
                        <div class="form-group">
                            <input type="text" class="form-control" id="recebe" name="visor" placeholder="Calculadora Comum" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)"  value="7">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="8">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)"value="9">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="/">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="4">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="5">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="6">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="*">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)"  value="1">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="2">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="3">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="-">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="0">
                            <input type="button" class="btn btn-secondary" onclick="resetaVisor()" value="C">
                            <input type="button" class="btn btn-secondary" onclick="botao(value)" value="+">
                            <input type="button" class="btn btn-secondary" onclick="calcular()" value="=">
                        </div>
                    </form>
                </div>
            </div>
            <!-- Scripts -->
            <script src="assets/js/core.min.js"></script>
            <script src="assets/js/app.min.js"></script>
            <script src="assets/js/script.min.js"></script>
            <script type="text/javascript">

                    function botao(num){
                        var salvo = $('#recebe').val();
                       $('#recebe').val(salvo + num)
                    }
            
                    function resetaVisor(){
                        // limpando o visor da calculadora.
                        document.getElementById('calculadora').reset();
                    }
                    
                    function calcular(valor){
                        //calculando os valores do visor
                       var resultado = eval($('#recebe').val());
                       $('#recebe').val(resultado);
                    }
            </script>
    </body>
</html>
