@extends('layouts.app')

@section('title', 'Produtos - Dragon Products')

@section('content')
    <h1 class="dbz-title text-4xl md:text-5xl text-white text-center mb-10">
        ⭐ Catálogo de Produtos ⭐
    </h1>

    @forelse ($products as $product)
        <div class="dbz-card rounded-xl p-6 mb-8 max-w-3xl mx-auto">
            <div class="flex items-center gap-4 mb-2">
                <span class="dbz-ball inline-block w-10 h-10 rounded-full flex-shrink-0"></span>
                <h2 class="dbz-title text-2xl md:text-3xl text-orange-700">{{ $product->nome }}</h2>
            </div>

            <div class="flex flex-wrap gap-3 mb-4 ml-14">
                <span class="bg-orange-600 text-white text-sm font-semibold px-3 py-1 rounded-full">
                    Poder de Venda: R$ {{ number_format($product->preco, 2, ',', '.') }}
                </span>
                <span class="bg-red-700 text-white text-sm font-semibold px-3 py-1 rounded-full">
                    Unidade: {{ $product->unidade_medida }}
                </span>
            </div>

            @if ($product->itens->isNotEmpty())
                <div class="scouter rounded-lg p-4 overflow-x-auto">
                    <table class="w-full text-left text-green-400">
                        <thead>
                            <tr class="text-green-300 border-b border-green-700">
                                <th class="py-1 pr-4">QTD</th>
                                <th class="py-1 pr-4">COR</th>
                                <th class="py-1">VALOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product->itens as $item)
                                <tr class="border-b border-green-900/50">
                                    <td class="py-1 pr-4">{{ $item->quantidade }}</td>
                                    <td class="py-1 pr-4">{{ $item->cor }}</td>
                                    <td class="py-1">R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="ml-14 text-orange-800 italic">Nenhum item detectado pelo scouter.</p>
            @endif
        </div>
    @empty
        <p class="text-center text-white text-xl dbz-title">Nenhum produto cadastrado ainda!</p>
    @endforelse
@endsection
