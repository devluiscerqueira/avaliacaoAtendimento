@extends('template/main')

@section('content')

<section id="box-relatorio">
    <img src="{{ asset('assets/images/relatorio.png') }}" alt="Pesquisa de Avaliação" class="image-control">
    <h1>Pesquisa de Satisfação - Relatório</h1>
    <h2>Rancking</h2>
    <table>
        <thead>
            <tr>
                <th>Vendedor</th>
                <th>Média das Notas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->nome }}</td>
                    <td>{{ number_format($vendedor->avaliacoes_avg_nota, 1) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Opiniões dos Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Opinião</th>
            </tr>
        </thead>
        <tbody>
            @foreach($opinions as $opinion)
                <tr>
                    <td>{{ $opinion->created_at->format('d/m/Y') }}</td>
                    <td id="td-opinion">{{ $opinion->opiniao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
