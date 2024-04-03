@extends('layouts.telachamada')

@section('conteudo')
<div class="container-fluid">
  <div class="row">
    <!-- Div que ocupa 70% da tela e altura total -->
    <div class="col-8 vh-100 d-flex flex-column" style="background-image: url('background.jpg'); background-size:cover;">
      <!-- Conteúdo da primeira div aqui -->
      <div class="py-2 mt-5 col-lg-10 text-center rounded mx-auto" id="publico">
        <!-- Conteúdo da primeira div -->
      </div>
      <div class="col-lg-10 position-fixed bottom-0" style="height: 50%; width: 50%; margin-bottom: 7%; margin-left:7.5%">
        <iframe class="rounded-start-5 rounded-bottom-5 shadow" width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PL_5lcBJe32syFUoQ3DdHZIZCxo5a42Ord&autoplay=1" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-lg-10 position-fixed bottom-0" style="margin-bottom: 0%; margin-left:28%">
        <img src="LOGOMANASSES.png" style="width: 15%;">
      </div>
    </div>

    <!-- Div que ocupa 30% da tela e altura total -->
    <div class="col-4 vh-100 text-center" style="background-color: #e0e0e0;">
      <!-- Conteúdo da segunda div aqui -->
      <br>
      <h2 class="mt-5">Redes sociais</h2>
      <br>
      <h1 class="mt-3">Últmas Chamadas</h1>
      <div id="ultimas">
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm mt-3 mb-3" style="height: 15%; width: 85%">
          <br>
          <h1 class="mt-2" style="font-size: 25px;">Nome da Pessoa 1</h1>
          <p style="font-size: 20px">Local: Sala X</p>
          <br>
        </div>
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm mt-3 mb-3" style="height: 15%; width: 85%">
          <br>
          <h1 class="mt-2" style="font-size: 25px;">Nome da Pessoa 1</h1>
          <p style="font-size: 20px">Local: Sala X</p>
          <br>
        </div>
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm mt-3 mb-3" style="height: 15%; width: 85%">
          <br>
          <h1 class="mt-2" style="font-size: 25px;">Nome da Pessoa 1</h1>
          <p style="font-size: 20px">Local: Sala X</p>
          <br>
        </div>
      </div>
      <br>
      <div class="mt-5 bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 5%; width: 30%">
        <p style="font-size: 25px" id="hora"></p>
      </div>
    </div>
  </div>
</div>
  
@endsection