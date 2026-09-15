<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 2rem; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { margin-bottom: 0.5rem; }
        h2 { font-size: 1rem; margin: 0 0 0.5rem; }
        .produto { margin-bottom: 2rem; }
    </style>
</head>
<body>
    <h1>Produtos</h1>

    @forelse ($products as $product)
        <div class="produto">
            <h2>{{ $product->nome }} — R$ {{ number_format($product->preco, 2, ',', '.') }} ({{ $product->unidade_medida }})</h2>

            @if ($product->itens->isEmpty())
                <p>Nenhum item cadastrado para este produto.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Quantidade</th>
                            <th>Cor</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product->itens as $item)
                            <tr>
                                <td>{{ $item->quantidade }}</td>
                                <td>{{ $item->cor }}</td>
                                <td>R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @empty
        <p>Nenhum produto cadastrado.</p>
    @endforelse
</body>
</html>
