<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Itens dos Produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Itens dos Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Cor</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($itens as $item)
                <tr>
                    <td>{{ $item->product->nome }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>{{ $item->cor }}</td>
                    <td>R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum item cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
