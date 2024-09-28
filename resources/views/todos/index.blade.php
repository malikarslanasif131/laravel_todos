<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-lime-700 dark:text-lime-900 leading-tight">
            {{ __('Your To-Do List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Alert with Close Button using Alpine.js -->
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 relative" role="alert">
                    <p>{{ session('success') }}</p>
                    <button @click="show = false" class="absolute top-0 bottom-0 right-0 px-4 py-3 text-green-700">
                        <svg class="fill-current h-6 w-6 text-green-700" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.354 5.646a.5.5 0 1 0-.708.708L9.293 10l-3.647 3.646a.5.5 0 0 0 .707.707L10 10.707l3.646 3.647a.5.5 0 0 0 .708-.707L10.707 10l3.646-3.646a.5.5 0 0 0 0-.707z"/>
                        </svg>
                    </button>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('todos.create') }}" class="bg-blue-500 text-white text-sm hover:bg-blue-700 font-bold py-2 px-4 rounded float-right">
                        {{ __('Create New To-Do') }}
                    </a>
                </div>

                <div class="p-6">
                    @if($todos->isEmpty())
                        <p class="text-gray-900 dark:text-gray-100">
                            <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-md font-medium text-yellow-900 ring-1 ring-inset ring-yellow-800/10">
                                {{ __('You have no to-dos.') }}</p>
                             </span>
                    @else
                        <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('No.') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Task') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Status') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Add Date') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Start Time') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Complete Time') }}
                                    </th>
                                    <th class="px-5 py-3 bg-gray-100 dark:bg-gray-800 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $key => $todo)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            {{ $todo->title }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            <span class="{{ $todo->completed ? 'inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20' : 'inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20' }}">
                                                {{ $todo->completed ? __('Completed') : __('Pending') }}
                                                 </span>                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            {{ $todo->add_date }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            {{ $todo->start_time }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            {{ $todo->complete_time ?? '-' }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
                                            <a href="{{ route('todos.edit', $todo->id) }}" class="bg-yellow-500 hover:bg-yellow-700 font-bold mx-1 py-1 px-3 rounded text-white">
                                                {{ __('Edit') }}
                                            </a>

                                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 font-bold m-1 py-1 px-3 rounded text-white">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
