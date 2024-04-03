<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chamada;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadaController extends Controller
{
    private $chamada;
    private $cliente;
    public function __construct()
    {
        $this->chamada = new Chamada();
        $this->cliente = new Cliente();
    }
    

    public function ultimaChamada()
    {
        $chamadas = $this->chamada->all();
        $ultimaChamada = $chamadas->last();
        
        //Buscar cliente pelo ID
        $c = $this->cliente->find($ultimaChamada['cliente_id']);

        return view('tela.divChamada', ['chamada' => $ultimaChamada, 'cliente' => $c]);
        //var_dump($c);
        //var_dump($ultimaChamada);
    }

    public function ultimasChamadas()
    {
        $ultimosRegistros = $this->chamada->orderBy('id', 'desc')->skip(1)->take(3)->get();

        // Se houver pelo menos dois registros
        if ($ultimosRegistros->count() >= 2) {
            // O antepenúltimo está no índice 1, o penúltimo no índice 0 e o anterior ao antepenúltimo no índice 2
            $antepenultimoChamada = $ultimosRegistros[1];
            $penultimoChamada = $ultimosRegistros[0];
            $anteriorAoAntepenultimoChamada = $ultimosRegistros[2];

            // Buscar clientes pelos IDs
            $cAntepenultimo = $this->cliente->find($antepenultimoChamada['cliente_id']);
            $cPenultimo = $this->cliente->find($penultimoChamada['cliente_id']);
            $cAnteriorAoAntepenultimo = $this->cliente->find($anteriorAoAntepenultimoChamada['cliente_id']);

            // Coloque todos os dados em um array
            $ultimas = [
                $cPenultimo,
                $cAntepenultimo,
                $cAnteriorAoAntepenultimo
            ];
            return view('tela.divUltimos', ['clientes' => $ultimas]);
        }
    }

    public function chamar(Request $request,string $id)
    {
        $valid = Chamada::create([
            'cliente_id' => $id,
        ]);

        return redirect()->route('chamada');
    }

    public function delAll()
    {
        Chamada::query()->delete();
        return redirect()->route('cliente.delall');
    }
}
