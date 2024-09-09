<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <input type="text" name="task" required placeholder="Enter a new task" class="border rounded px-2 py-1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Todo</button>
                    </form>

                    <ul class="mt-4">
                        @foreach(session('todos', []) as $id => $todo)
                            <li class="flex items-center justify-between py-2">
                                <span>{{ $todo }}</span>
                                <div>
                                    <a href="{{ route('todos.edit', $id) }}" class="text-blue-500">Edit</a>
                                    <form action="{{ route('todos.destroy', $id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>