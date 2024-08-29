<form action="{{ route('avaliacoes.store') }}" method="POST">
    @csrf
    <label for="vendedor">Selecione o nome de quem lhe atendeu</label>
    <select name="idVendedor" id="vendedor">
        @foreach($vendedores as $vendedor)
            <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
        @endforeach
    </select>

    <label for="nota">Atribua uma Nota ao atendimento</label>
    <input type="number" name="nota" min="0" max="10" required>

    <label for="opiniao">Digite uma opinião</label>
    <textarea name="opiniao"></textarea>

    <button type="submit">Submeter</button>
</form>
