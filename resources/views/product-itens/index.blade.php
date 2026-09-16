@extends('layouts.app')

@section('title', 'Itens - Dragon Products')

@section('content')
    <h1 class="dbz-title text-4xl md:text-5xl text-white text-center mb-10">
        🔍 Scanner de Itens
    </h1>

    <div class="scouter rounded-xl p-6 max-w-4xl mx-auto overflow-x-auto">
        <table class="w-full text-left text-green-400">
            <thead>
                <tr class="text-green-300 border-b border-green-700 text-sm md:text-base">
                    <th class="py-2 pr-4">PRODUTO</th>
                    <th class="py-2 pr-4">QTD</th>
                    <th class="py-2 pr-4">COR</th>
                    <th class="py-2">VALOR</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productItens as $item)
                    <tr class="border-b border-green-900/50">
                        <td class="py-2 pr-4">{{ $item->product->nome }}</td>
                        <td class="py-2 pr-4">{{ $item->quantidade }}</td>
                        <td class="py-2 pr-4">{{ $item->cor }}</td>
                        <td class="py-2">R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-4 text-center italic">Nenhum item detectado pelo scouter.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
