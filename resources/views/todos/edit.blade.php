<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('todos.update', $id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="task" value="{{ $todo }}" required class="border rounded px-2 py-1">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>