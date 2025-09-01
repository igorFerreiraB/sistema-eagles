@extends('layouts.navigation')

@section('title', 'Histórico de Consultas')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>
            <i class="fas fa-history"></i> Histórico de Consultas
            @if(!empty($placa))
                <small class="text-muted">— filtro: {{ strtoupper($placa) }}</small>
            @endif
        </h1>
        <div>
            <a href="{{ route('dashboard.consulta-veicular') }}" class="btn btn-sm btn-secondary">
                <i class="fas fa-arrow-left"></i> Nova Consulta
            </a>
        </div>
    </div>
@stop

@section('content')
    {{-- Filtro por placa --}}
    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ route('dashboard.historico') }}" method="GET" class="form-row">
                <div class="col-md-4">
                    <label for="placa">Filtrar por Placa</label>
                    <input type="text" name="placa" id="placa" value="{{ $placa ?? request('placa') }}"
                           class="form-control" placeholder="Ex: ABC1D23">
                </div>
                <div class="col-md-3 align-self-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-filter"></i> Filtrar
                    </button>
                    <a href="{{ route('dashboard.historico') }}" class="btn btn-secondary">
                        <i class="fas fa-undo"></i> Limpar
                    </a>
                </div>
            </form>
        </div>
    </div>

    @forelse($consultas as $c)
        @php
            // resultado chega como array (cast no Model). Se não, garantimos:
            $dados = is_array($c->resultado) ? $c->resultado : (json_decode($c->resultado, true) ?? []);
            $placaRes      = $dados['placa'] ?? $c->placa;
            $marca         = $dados['marca'] ?? null;
            $modelo        = $dados['modelo'] ?? null;
            $marcaModelo   = $dados['marcaModelo'] ?? trim(($marca.' '.$modelo));
            $logo          = $dados['logo'] ?? null;
            $ano           = $dados['ano'] ?? null;
            $anoModelo     = $dados['anoModelo'] ?? null;
            $cor           = $dados['cor'] ?? null;
            $municipio     = $dados['municipio'] ?? null;
            $uf            = $dados['uf'] ?? null;
            $situacao      = $dados['situacao'] ?? null;
            $origem        = $dados['origem'] ?? null;
            $segmento      = $dados['segmento'] ?? null;
            $chassi        = $dados['extra']['chassi'] ?? null;
            $sub_segmento  = $dados['sub_segmento'] ?? null;
            $jsonId        = 'json-data-'.$c->id;
            $collapseId    = 'collapse-json-'.$c->id;
        @endphp

        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h3 class="card-title mb-0">
                        <i class="fas fa-car"></i>
                        Consulta: {{ $placaRes }}
                        @if($marcaModelo)
                            <small class="text-muted">— {{ $marcaModelo }}</small>
                        @endif
                    </h3>
                    <small class="text-muted">Consultado em: {{ optional($c->created_at)->format('d/m/Y H:i') }}</small>
                </div>
                <div>
                    <a href="#{{ $collapseId }}" class="btn btn-sm btn-outline-primary" data-toggle="collapse" aria-expanded="false" aria-controls="{{ $collapseId }}">
                        <i class="fas fa-code"></i> Ver JSON
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    {{-- Coluna 1: Informações Básicas --}}
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary">
                                <h3 class="card-title">Informações Básicas</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    @if($logo)
                                        <img src="{{ $logo }}" alt="{{ $marca }}" class="img-fluid" style="max-height: 80px;">
                                    @else
                                        <i class="fas fa-car-side fa-3x text-muted"></i>
                                    @endif
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between"><strong>Placa</strong><span>{{ $placaRes }}</span></li>
                                    @if($marca || $modelo)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Marca/Modelo</strong><span>{{ $marca }} / {{ $modelo }}</span></li>
                                    @endif
                                    @if($ano || $anoModelo)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Ano</strong><span>{{ $ano }} @if($anoModelo) (Modelo: {{ $anoModelo }}) @endif</span></li>
                                    @endif
                                    @if($cor)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Cor</strong><span>{{ $cor }}</span></li>
                                    @endif
                                    @if($municipio || $uf)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Município/UF</strong><span>{{ $municipio }}/{{ $uf }}</span></li>
                                    @endif
                                    @if($situacao)
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Situação</strong>
                                            <span class="badge bg-{{ $situacao === 'Sem restrição' ? 'success' : 'danger' }}">{{ $situacao }}</span>
                                        </li>
                                    @endif
                                    @if($origem)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Origem</strong><span>{{ $origem }}</span></li>
                                    @endif
                                    @if($segmento || $sub_segmento)
                                        <li class="list-group-item d-flex justify-content-between"><strong>Segmento</strong><span>{{ $segmento }} @if($sub_segmento) ({{ $sub_segmento }}) @endif</span></li>
                                    @endif
                                    @if($chassi)
                                        <li class="list-group-item d-flex justify-content-between"><strong>chassi</strong><span>{{ $chassi }}</span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Coluna 2: Restrições/Documentos (resumo) --}}
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header bg-warning">
                                <h3 class="card-title">Resumo</h3>
                            </div>
                            <div class="card-body">
                                @php $extra = $dados['extra'] ?? []; @endphp
                                <ul class="list-group list-group-flush">
                                    @if(isset($extra['restricao_1']) || isset($extra['restricao_2']) || isset($extra['restricao_3']) || isset($extra['restricao_4']))
                                        <li class="list-group-item">
                                            <strong>Restrições:</strong>
                                            <div class="mt-1">
                                                <span class="badge badge-{{ ($extra['extra']['restricao_1'] ?? null) ? 'danger':'secondary' }}">R1</span>
                                                <span class="badge badge-{{ ($extra['extra']['restricao_2'] ?? null) ? 'danger':'secondary' }}">R2</span>
                                                <span class="badge badge-{{ ($extra['extra']['restricao_3'] ?? null) ? 'danger':'secondary' }}">R3</span>
                                                <span class="badge badge-{{ ($extra['extra']['restricao_4'] ?? null) ? 'danger':'secondary' }}">R4</span>
                                            </div>
                                        </li>
                                    @endif

                                    @if(isset($extra['situacao_chassi']))
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Situação Chassi</strong>
                                            <span>{{ $extra['situacao_chassi'] == 'S' ? 'Regular' : 'Irregular' }}</span>
                                        </li>
                                    @endif

                                    @if(isset($extra['situacao_veiculo']))
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Situação Veículo</strong>
                                            <span>{{ $extra['situacao_veiculo'] == 'S' ? 'Regular' : 'Irregular' }}</span>
                                        </li>
                                    @endif

                                    @if(isset($extra['tipo_doc_prop']))
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Tipo Proprietário</strong>
                                            <span>{{ $extra['tipo_doc_prop'] === 'Fisica' ? 'Pessoa Física' : 'Pessoa Jurídica' }}</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Coluna 3: FIPE (se existir) --}}
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-header bg-success">
                                <h3 class="card-title">FIPE</h3>
                            </div>
                            <div class="card-body">
                                @if(isset($dados['fipe']['dados']) && is_array($dados['fipe']['dados']) && count($dados['fipe']['dados']) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Modelo</th>
                                                    <th>Comb.</th>
                                                    <th>Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($dados['fipe']['dados'] as $f)
                                                    <tr>
                                                        <td>{{ $f['texto_modelo'] ?? '-' }}</td>
                                                        <td>{{ $f['combustivel'] ?? '-' }}</td>
                                                        <td class="text-right">{{ $f['texto_valor'] ?? '-' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <small class="text-muted">Ref.: {{ $dados['fipe']['dados'][0]['mes_referencia'] ?? '-' }}</small>
                                @else
                                    <div class="alert alert-warning mb-0">Sem dados FIPE.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- JSON completo (colapsável) --}}
                <div class="collapse mt-3" id="{{ $collapseId }}">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dados Completos em JSON</h3>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-sm btn-primary mb-3"
                                    onclick="copyJson('{{ $jsonId }}', this)">
                                <i class="fas fa-copy"></i> Copiar JSON
                            </button>
                            <pre id="{{ $jsonId }}">{{ json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="card">
            <div class="card-body text-center text-muted">
                Nenhuma consulta encontrada.
            </div>
        </div>
    @endforelse

    {{-- Paginação --}}
    <div class="mt-3">
        {{ $consultas->withQueryString()->links() }}
    </div>
@stop

@section('js')
<script>
function copyJson(preId, btn) {
    const el = document.getElementById(preId);
    const range = document.createRange();
    range.selectNode(el);
    const sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
    document.execCommand('copy');
    sel.removeAllRanges();

    const original = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-check"></i> Copiado!';
    setTimeout(() => btn.innerHTML = original, 2000);
}
</script>
@stop