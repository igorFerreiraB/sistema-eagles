<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Parcelamento - Eagles Despachante</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .logo { width: 70px; }
        .title { font-size: 18px; font-weight: bold; }
        .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .total { font-weight: bold; margin-top: 20px; }
        .footer { margin-top: 30px; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('images/eagles.png') }}" class="logo" alt="Eagles Despachante">
        <h1 class="title">Comprovante de Parcelamento</h1>
    </div>

    <div class="details">
        <p><strong>Valor da Multa:</strong> R$ {{ number_format($valorMulta, 2, ',', '.') }}</p>
        <p><strong>Número de Parcelas:</strong> {{ $numeroParcelas }}x</p>
        <p><strong>Comissão:</strong> 12%</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Parcela</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parcelas as $parcela)
                <tr>
                    <td>{{ $parcela['numero'] }}ª Parcela</td>
                    <td>R$ {{ $parcela['valor'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="total">
        <p><strong>Valor da Multa:</strong> R$ {{ $valorMulta }}</p>
        <p><strong>Valor Total:</strong> R$ {{ number_format((float) $valorTotal, 2, ',', '.') }}</p>
    </div>

    <div class="footer">
        <p>Eagles Despachante © {{ date('Y') }} - CNPJ: XX.XXX.XXX/0001-XX</p>
        <p>Contato: (XX) XXXX-XXXX | eagles@despachante.com</p>
    </div>
</body>
</html>
