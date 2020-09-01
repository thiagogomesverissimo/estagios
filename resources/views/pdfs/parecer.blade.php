@extends('pdfs.fflch')


@inject('pessoa','Uspdev\Replicado\Pessoa')
@inject('graduacao','Uspdev\Replicado\Graduacao')

@inject('replicado_utils','App\Utils\ReplicadoUtils')

@section('content')

<div style="text-align: center" >
    <b>VIA DO ESTAGIARIO</b>
</div>
<hr>
<br>
<div style="text-align: center">
    <b>PARECER DE MÉRITO EXTERNO</b>
</div>
<div style="border-width: 1px; border-style: solid; border-color: #000; text-align: justify; padding: 0px;">
    Nome do Estagiário(a): <b>{{ $pessoa::dump($estagio->numero_usp)['nompes'] }}</b><br><br>
    Número USP: <b>{{ $estagio->numero_usp }}</b><br><br>
    Curso: <b>{{ $graduacao::curso($estagio->numero_usp, 8)['nomhab'] }}</b><br><br>
    Empresa: <b>{{ $empresa->nome }}</b><br><br>
    Área de atuação da Empresa: <b>S{{ $empresa->area_de_atuacao }}</b><br><br>
    Período do Estágio<br>
    Início: <b>{{ \Carbon\Carbon::parse($estagio->dataini)->format('d/m/Y')}}</b><br>
    Término: <b>{{ \Carbon\Carbon::parse($estagio->datafin)->format('d/m/Y')}}</b>
</div>

<div style="text-align: justify;">
    <p>As Atividades propostas no plano de estágio são pertinentes ao curso de origem do aluno?: <b>{{ $estagio->atividadespertinentes }}</b></p>

    <p>Justifique: <b>{{ $estagio->atividadespertinentes }}</b></p>

    <p>Avalie o desempenho acadêmico do aluno: <b>{{ $estagio->desempenhoacademico }}</b></p>

    <p>Média ponderada com reprovação: <b>{{ $estagio->atividadespertinentes }}</b></p>

    <p>O horário do estágio é compatível com os horários disponíveis na grade horária do aluno?: <b>{{ $estagio->atividadesjustificativa }}</b></p>

    <p>PARECER: <b>{{ $estagio->analise_academica }}</b></p>

</div>

<br><br>
<div style="text-align: right">São Paulo, {{ Carbon\Carbon::now()->formatLocalized('%d/%m/%Y') }}</div>

<br>

<div style="text-align: center">
    <b> {{ $estagio->parecerista }} </b>
<div>

<p style="page-break-after: always;"></p>

@endsection('content')

@section('footer')
<div style="text-align: initial; font-weight: bold; ">
<hr>
Serviço de Estágios da Faculdade de Filosofia, Letras e Ciências Humanas da USP.
</div>
@endsection