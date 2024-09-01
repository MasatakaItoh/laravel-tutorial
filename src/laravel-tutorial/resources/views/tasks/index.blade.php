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
    <div class="flex gap-10 p-10 bg-slate-100">
        <div class="w-[30%]">
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
            <div class="bg-white">
                <div class="bg-slate-200 p-4">タスク</div>
                <div class="p-4">
                    <a href="#" class="grid place-items-center p-2 border rounded border-slate-400">
                        タスクを追加する
                    </a>
                </div>
                <table class="w-full text-left">
                    <thead class="border-b-2">
                        <tr>
                            <th class="p-2">タイトル</th>
                            <th class="p-2">状態</th>
                            <th class="p-2">期限</th>
                            <th class="p-2"/>
                            <th class="p-2"/>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr class="border-b">
                                <td class="p-2">{{ $task->title }}</td>
                                <td class="p-2">
                                    <span class="text-white p-1 text-xs rounded {{ $task->status === 1 ? 'bg-red-400' : ($task->status === 2 ? 'bg-emerald-400' : 'bg-gray-400') }}">{{ $task->status_label }}</span>
                                </td>
                                <td class="p-2">{{ $task->formatted_due_date }}</td>
                                <td class="p-2"><a href="#" class="text-blue-400">編集</a></td>
                                <td class="p-2"><a href="#" class="text-blue-400">削除</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</body>
</html>
