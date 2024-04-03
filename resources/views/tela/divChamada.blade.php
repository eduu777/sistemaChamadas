<div class="text-center rounded mx-auto">
    @if ($cliente['prioridade'] == "sim")
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 60%; width: 85%">
            <br>
            <h1 class="mt-2" style="font-size: 40px;">{{$cliente['nome']}}</h1>
            <br>
        </div>
        <div class="row">
            <div class="mt-3 bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 12%; width: 30%;">
                <p style="font-size: 25px" class="">Prioridade</p>
            </div>
            <div class="mt-3 bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 12%; width: 30%">
                <p style="font-size: 25px">Local: Sala {{$cliente['local']}}</p>
            </div>
        </div>
    @else
        <div class="bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 60%; width: 85%">
            <br>
            <h1 class="mt-2" style="font-size: 40px;">{{$cliente['nome']}}</h1>
            <br>
        </div>
        <div class="mt-3 bg-white text-center rounded mx-auto text-uppercase shadow-sm" style="height: 15%; width: 30%">
            <p style="font-size: 25px">Local: Sala {{$cliente['local']}}</p>
        </div>
    @endif
</div> 
<script>        
    var audio = new Audio('SOM-DE-CAMPAINHA.mp3');
    audio.play();
// Função para obter as vozes após um pequeno atraso
function obterVozesEExecutar() {
    var vozesDisponiveis = window.speechSynthesis.getVoices();

    // Se o array de vozes ainda estiver vazio, aguarde e tente novamente
    if (vozesDisponiveis.length === 0) {
        setTimeout(obterVozesEExecutar, 100);
        return;
    }

    // Exibe as vozes disponíveis no console
    console.log(vozesDisponiveis);

    // Cria uma instância de SpeechSynthesisUtterance
    var utterance = new SpeechSynthesisUtterance('{{$cliente["nome"]}}, por favor dirigir-se a sala {{$cliente["local"]}}');

    utterance.voice = vozesDisponiveis[1];
            
    

    // Faz o navegador falar usando a voz feminina
    window.speechSynthesis.speak(utterance);

    // Exibe a instância de SpeechSynthesisUtterance no console
    console.log(utterance);
}

// Inicia a função para obter vozes após um pequeno atraso
setTimeout(obterVozesEExecutar, 1000);
    
</script>