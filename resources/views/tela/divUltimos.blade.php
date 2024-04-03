      <div>
        @foreach($clientes as $c)
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm mt-3 mb-3" style="height: 15%; width: 85%">
          <br>
          <h1 class="mt-2" style="font-size: 25px;">{{$c['nome']}}</h1>
          <p style="font-size: 20px">Sala: {{$c['local']}}</p>
          <br>
        </div>
        @endforeach
      </div> 