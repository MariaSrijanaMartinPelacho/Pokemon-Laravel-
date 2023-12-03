<?php

namespace App\Http\Controllers;

use App\Models\PokemonModel;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    //metodo store
    public function store(Request $request){

        //validar la estructura de datos
        $new= $request->validate([
            'Nombre'=> 'required|max:255',
            'Tipo'=> 'required',
            'Tamaño'=> 'required', 'in:pequeño,mediano,grande',
            'Peso'=> 'required','min:0', 'numeric', 'decimal:1',
        ]);

        //llama al modelo 
        PokemonModel:: create($new);

        //redireccionamiento de una ruta y el envío
        return redirect()->route('index')->with('status', 'POKEMON CREADO');
    }
    
    //METODO SHOW
    public function show()
    {
        return view('IndexView', [
            // Hace una llamada al modelo para que le retorne todos los pokemons
            'PokeMonster' => PokemonModel::all()
        ]);
    }
    public function edit($pokemon)
    {
        // Busca al pokemon que se editara
        $pokemon = PokemonModel::findOrFail($pokemon);

        // Se retorna la vista para editar
        return view('edit', [
           'PokeMonster' => $pokemon
        ]);
    }

    //METODO UPDATE
    public function update(Request $request, $pokemon){
        $new= $request->validate([
            'Nombre'=> 'required|max:255',
            'Tipo'=> 'required',
            'Tamaño'=> 'required', 'in:pequeño,mediano,grande',
            'Peso'=> 'required','min:0', 'numeric', 'decimal:1',
        ]);


        // Busca el pokemon en la bbdd
        $pokemon = PokemonModel::findOrFail($pokemon);
        // Actualiza la información
        $pokemon->update($new);

        // Vuelve a la home con un mensaje
        return redirect()->route('index', $request->Nombre. 'MODIFICADO');
    }

    

    //METODO ELIMINAR
    public function destroy(){
        return view('Pokemon.DestroyView');

    }

    public function index(){
        return view('Pokemon.IndexView');
    }

    

    


}
