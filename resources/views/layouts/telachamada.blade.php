<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Chamada Fácil</title>
</head>
<body class="bg-dark-subtle overflow-hidden" >
    <!--CONTEÚDO-->
      <div> 
        @yield('conteudo')
      </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module">
  var publico = document.getElementById("publico");
  Echo.channel('channel-publico')
    .listen('NovaChamada', (e) => {
     //publico.innerHTML += "<div class='alert alert-success' >" 
       //  + e.mensagem + '</div>' ;
       $.ajax({
        url: '{{ route("ultima.chamada") }}',
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            // Extrair e manipular os dados do HTML retornado
            var extractedData = $(response).find('h1').text();
            console.log(extractedData);


            // Atualize o conteúdo da div "publico" com os novos dados
            $('#publico').html(response);
        },
        error: function(error) {
            console.error('Erro na solicitação AJAX:', error);
        }
    });

    $.ajax({
      url: '{{ route("ultimas.chamadas") }}',
      type: 'GET',
      dataType: 'html',
      success: function(response) {
          // Extrair e manipular os dados do HTML retornado
          var extractedData = $(response).find('h1').text();
          console.log(extractedData);


          // Atualize o conteúdo da div "publico" com os novos dados
          $('#ultimas').html(response);
      },
      error: function(error) {
          console.error('Erro na solicitação AJAX:', error);
      }
  });

    });

    function atualizarHora() {
      var agora = new Date();
      var hora = agora.toLocaleTimeString('pt-BR', {hour: '2-digit', minute:'2-digit', second: '2-digit'});
      document.getElementById('hora').innerHTML = hora;
    }

    setInterval(atualizarHora, 1000); // Atualizar a cada segundo
    atualizarHora();


      
      
</script>
</html>