<h1>REGISTRAR POKEMON</h1>

<div>
    <form method="POST" action="{{route ('Pokemon.store')}}">
    @csrf
        <div>
            <label for="idPokemon">ID POKEMON</label>
            <input type="number" name="idPokemon" id="idPokemon" require>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" require>
        </div>
        <div>
            <label for="tipo">Tipo</label>
            <select type="text" name="tipo" id="tipo" require>
                <option value="planta">Planta</option>
                <option value="agua">Agua</option>
                <option value="fuego">Fuego</option>
                <option value="psiquico">Psiquico</option>
                <option value="dragon">Dragón</option>
                <option value="hada">Hada</option>
                <option value="tierra">Tierra</option>
                <option value="roca">Roca</option>
                <option value="fabtasma">Fantasma</option>
                <option value="acero">Acero</option>
                <option value="electrico">Electrico</option>
                <option value="hielo">Hielo</option>
                <option value="lucha">Lucha</option>
                <option value="siniestro">Siniestro</option>
                <option value="veneno">Veneno</option>
                <option value="volador">Volador</option>
            </select>
        </div>
        <div>
            <label for="peso">Tamaño</label>
            <select name="tamaño" id="tamaño" require>
                <option value="pequeño">Pequeño</option>
                <option value="mediano">Mediano</option>
                <option value="grande">Grande</option>
            </select>
        </div>
        <div>
            <label for="peso">Peso</label>
            <input type="number" name="peso" id="peso" require>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Pokemon</button>

    </form>
</div>
MOSTRAR
<div>
    <form method="GET" action="{{ route('Pokemon.show')}}">
        <input type="submit" value="mostrar pokemons">
    </form>
    @if (isset($PokeMonster))
    @if (count($PokeMonster) > 0)
        <table>
            <tr>
                <th>idPokemon</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Peso</th>
            </tr>
            @foreach($PokeMonster as $pokemon)
            <tr>
                <td>{{ $pokemon->id}}</td>
                <td>{{ $pokemon->Nombre }}</td>
                <td>{{ $pokemon->Tipo }}</td>
                <td>{{ $pokemon->Tamaño }}</td>
                <td>{{ $pokemon->Peso }}</td>
            </tr>
            @endforeach
        </table>
        @else
            <!-- Si no hay Pokemons, muestra que no hay -->
            <h3>Sin datos para mostrar</h3>
    @endif
@endif
</div>