<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit To-Do') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('todos.update', $todo->id) }}">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating the todo -->
                        
                        <div>
                            <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Task') }}</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $todo->title) }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                        </div>

                        <div class="mt-4">
                            <label for="completed" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Completed') }}</label>
                            <select name="completed" id="completed" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value="0" {{ $todo->completed == 0 ? 'selected' : '' }}>{{ __('Pending') }}</option>
                                <option value="1" {{ $todo->completed == 1 ? 'selected' : '' }}>{{ __('Completed') }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded  text-white text-sm">
                                {{ __('Update To-Do') }}
                            </button>
                            <a href="{{ route('todos.index') }}" class="bg-gray-500 hover:bg-gray-700 font-bold py-2 px-4 rounded  text-white text-sm">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
