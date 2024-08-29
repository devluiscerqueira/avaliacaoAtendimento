@extends('template/main')

    @section('content')
    <div class="content">
        <div>
            <h2 id="title-form">PESQUISA DE SATISFAÇÃO</h2>
        </div>
        <img src="{{ asset('assets/images/avaliacao.png') }}" alt="Pesquisa de Avaliação" class="image-control">
    <form action="{{ route('avaliacoes.store') }}" method="POST" id="form-avaliacao">
        @csrf
        <label for="vendedor" class="form-item">Selecione o nome de quem lhe atendeu?</label>
        <select name="idVendedor" id="vendedor" class="form-item">
            @foreach($vendedores as $vendedor)
                <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
            @endforeach
        </select>

        <label for="nota" class="form-item">Atribua uma nota ao atendimento recebido</label>
        <input type="number" class="form-item" name="nota" id="nota" min="0" max="10" step="1" required>

        <label for="opiniao" class="form-item">Deixe uma opinião sobre o atendimento</label>
        <textarea name="opiniao" id="opiniao" class="form-item"></textarea>

        <button type="submit" class="btn">Enviar</button>
    </form>
    </div>

    @endsection

