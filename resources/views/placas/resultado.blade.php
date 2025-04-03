@extends('layouts.navigation')

@section('title', 'Resultado da Consulta - ' . $resultado['placa'])

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>
            <i class="fas fa-car"></i> Resultado da Consulta: {{ $resultado['placa'] }}
            <small class="text-muted">{{ $resultado['marcaModelo'] }}</small>
        </h1>
        <a href="{{ route('dashboard.consulta-veicular') }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left"></i> Nova Consulta
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Informações Básicas</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="{{ $resultado['logo'] }}" alt="{{ $resultado['marca'] }}" class="img-fluid" style="max-height: 100px;">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Placa:</strong></span>
                            <span>{{ $resultado['placa'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Placa Alternativa:</strong></span>
                            <span>{{ $resultado['placa_alternativa'] ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Marca/Modelo:</strong></span>
                            <span>{{ $resultado['marca'] }} / {{ $resultado['modelo'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Ano:</strong></span>
                            <span>{{ $resultado['ano'] }} (Modelo: {{ $resultado['anoModelo'] }})</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Cor:</strong></span>
                            <span>{{ $resultado['cor'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Município/UF:</strong></span>
                            <span>{{ $resultado['municipio'] }}/{{ $resultado['uf'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Situação:</strong></span>
                            <span class="badge bg-{{ $resultado['situacao'] === 'Sem restrição' ? 'success' : 'danger' }}">
                                {{ $resultado['situacao'] }}
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Origem:</strong></span>
                            <span>{{ $resultado['origem'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Segmento:</strong></span>
                            <span>{{ $resultado['segmento'] }} ({{ $resultado['sub_segmento'] }})</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Data da Consulta:</strong></span>
                            <span>{{ $resultado['data'] }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-info">
                    <h3 class="card-title">Dados Técnicos</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Combustível:</strong></span>
                            <span>{{ $resultado['extra']['combustivel'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Espécie:</strong></span>
                            <span>{{ $resultado['extra']['especie'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Passageiros:</strong></span>
                            <span>{{ $resultado['extra']['quantidade_passageiro'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Chassi:</strong></span>
                            <span>{{ $resultado['chassi'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Tipo de Montagem:</strong></span>
                            <span>{{ $resultado['extra']['tipo_montagem'] == '1' ? 'Nacional' : 'Importado' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="card-title">Restrições</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Restrição 1:</strong> {{ $resultado['extra']['restricao_1'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Restrição 2:</strong> {{ $resultado['extra']['restricao_2'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Restrição 3:</strong> {{ $resultado['extra']['restricao_3'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Restrição 4:</strong> {{ $resultado['extra']['restricao_4'] }}
                        </li>
                        <li class="list-group-item">
                            <strong>Situação do Chassi:</strong> {{ $resultado['extra']['situacao_chassi'] == 'S' ? 'Regular' : 'Irregular' }}
                        </li>
                        <li class="list-group-item">
                            <strong>Situação do Veículo:</strong> {{ $resultado['extra']['situacao_veiculo'] == 'S' ? 'Regular' : 'Irregular' }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Documentos</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Tipo Proprietário:</strong></span>
                            <span>{{ $resultado['extra']['tipo_doc_prop'] == 'Fisica' ? 'Pessoa Física' : 'Pessoa Jurídica' }}</span>
                        </li>
                        @if($resultado['extra']['tipo_doc_faturado'] != '')
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Documento Faturado:</strong></span>
                            <span>{{ $resultado['extra']['faturado'] }} ({{ $resultado['extra']['tipo_doc_faturado'] }})</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>UF Faturado:</strong></span>
                            <span>{{ $resultado['extra']['uf_faturado'] }}</span>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title">Valores FIPE</h3>
                </div>
                <div class="card-body">
                    @if(isset($resultado['fipe']['dados']) && count($resultado['fipe']['dados']) > 0)
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th>Modelo</th>
                                        <th>Combustível</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($resultado['fipe']['dados'] as $fipe)
                                    <tr>
                                        <td>{{ $fipe['texto_modelo'] }}</td>
                                        <td>{{ $fipe['combustivel'] }}</td>
                                        <td class="text-right">{{ $fipe['texto_valor'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <small class="text-muted">Referência: {{ $resultado['fipe']['dados'][0]['mes_referencia'] }}</small>
                    @else
                        <div class="alert alert-warning">Nenhum dado FIPE disponível para este veículo.</div>
                    @endif
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-dark">
                    <h3 class="card-title text-white">Informações Adicionais</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Grupo:</strong></span>
                            <span>{{ $resultado['extra']['grupo'] ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Linha:</strong></span>
                            <span>{{ $resultado['extra']['linha'] ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Carroceria:</strong></span>
                            <span>{{ $resultado['extra']['carroceria'] ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Tipo de Carroceria:</strong></span>
                            <span>{{ $resultado['extra']['tipo_carroceria'] ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Média de Preço:</strong></span>
                            <span>R$ {{ number_format($resultado['extra']['media_preco'], 2, ',', '.') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dados Completos em JSON</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-sm btn-primary mb-3" onclick="copyToClipboard()">
                        <i class="fas fa-copy"></i> Copiar JSON
                    </button>
                    <pre id="json-data">{{ json_encode($resultado, JSON_PRETTY_PRINT) }}</pre>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        function copyToClipboard() {
            const el = document.getElementById('json-data');
            const range = document.createRange();
            range.selectNode(el);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            const originalText = event.target.innerHTML;
            event.target.innerHTML = '<i class="fas fa-check"></i> Copiado!';
            setTimeout(() => {
                event.target.innerHTML = originalText;
            }, 2000);
        }
    </script>
@stop