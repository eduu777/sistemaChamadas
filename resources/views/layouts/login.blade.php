<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Chamada Fácil | Login</title>
</head>
<body class="bg-dark-subtle">
    <!--CONTEÚDO-->
      <div class="col-12"> 
        @yield('conteudo')
      </div>
</body>
<script type="module">
  var publico = document.getElementById("publico");
  Echo.channel('channel-publico')
    .listen('NovaChamada', (e) => {
     publico.innerHTML += "<div class='alert alert-success' >" 
         + e.mensagem + '</div>' ;
    });
</script>
</html>