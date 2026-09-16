<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dragon Products')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Saira+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Saira Condensed', sans-serif;
            background: radial-gradient(ellipse at top, #ffd15c 0%, #ff9d1e 35%, #ff6a00 65%, #d94a00 100%);
            min-height: 100vh;
        }
        .dbz-title {
            font-family: 'Bangers', cursive;
            letter-spacing: 0.05em;
            -webkit-text-stroke: 2px #7a2e00;
            text-shadow: 3px 3px 0 #7a2e00, 0 0 20px rgba(255,255,0,0.5);
        }
        .dbz-card {
            background: linear-gradient(160deg, #fff7e6 0%, #ffe6b0 100%);
            border: 3px solid #d9480f;
            box-shadow: 0 6px 0 #7a2e00, 0 10px 20px rgba(0,0,0,0.35);
        }
        .dbz-ball {
            background: radial-gradient(circle at 30% 30%, #fff7cc, #ffb400 45%, #ff8c00 75%, #b35c00);
            box-shadow: 0 0 12px rgba(255,140,0,0.7), inset -4px -4px 8px rgba(0,0,0,0.35);
        }
        .dbz-btn {
            font-family: 'Bangers', cursive;
            letter-spacing: 0.05em;
            background: linear-gradient(180deg, #ffcc33, #ff6a00);
            border: 2px solid #7a2e00;
            box-shadow: 0 4px 0 #7a2e00;
            transition: transform 0.1s ease;
        }
        .dbz-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 0 #7a2e00;
        }
        .dbz-btn:active {
            transform: translateY(2px);
            box-shadow: 0 2px 0 #7a2e00;
        }
        .scouter {
            background: #0a0e0a;
            border: 3px solid #22c55e;
            box-shadow: 0 0 15px rgba(34,197,94,0.6), inset 0 0 20px rgba(34,197,94,0.15);
            font-family: 'Share Tech Mono', 'Courier New', monospace;
        }
    </style>
</head>
<body class="text-gray-900">
    <nav class="dbz-card mx-4 mt-4 md:mx-8 md:mt-6 rounded-xl px-6 py-4 flex flex-wrap items-center justify-between gap-4">
        <a href="{{ url('/') }}" class="dbz-title text-2xl md:text-3xl text-orange-600 flex items-center gap-2">
            <span class="dbz-ball inline-block w-8 h-8 rounded-full"></span>
            Dragon Products
        </a>
        <div class="flex gap-3">
            <a href="{{ route('produtos.index') }}" class="dbz-btn text-white px-4 py-2 rounded-lg text-sm md:text-base">Produtos</a>
            <a href="{{ route('itens.index') }}" class="dbz-btn text-white px-4 py-2 rounded-lg text-sm md:text-base">Itens</a>
        </div>
    </nav>

    <main class="px-4 py-8 md:px-8">
        @yield('content')
    </main>
</body>
</html>
