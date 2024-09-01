<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO App</title>
    @vite('resources/css/app.css')
</head>
<body>

<header>
    <nav class="bg-slate-700 px-10 py-6">
        <a class="text-gray-500" href="/">ToDo App</a>
    </nav>
</header>

<main>
    <div class="flex gap-20 p-10 bg-slate-100">
        <div class="w-[40%]">
            <div class="bg-white">
                <div class="bg-slate-200 p-4">フォルダ</div>
                <div class="p-4">
                    <a href="#" class="grid place-items-center p-2 border rounded border-slate-400">
                        フォルダを追加する
                    </a>
                </div>
                <ul class="w-full border-t">
                    @foreach($folders as $folder)
                        <li class="flex items-center border-b {{ $folder->id === $folder_id ? 'bg-blue-100' : '' }}">
                            <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="p-4 flex-1">
                                {{ $folder->title }}
                            </a>
                            <a href="#" class="p-4 text-blue-400">編集</a>
                            <a href="#" class="p-4 text-blue-400">削除</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="flex-1">
            <!-- ここにタスクが表示される -->
        </div>
    </div>
</main>
</body>
</html>
