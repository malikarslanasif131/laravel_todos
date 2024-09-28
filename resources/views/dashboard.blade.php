<x-app-layout>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message and Overview -->
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-center">
                <h3 class="font-semibold text-2xl text-lime-700 dark:text-lime-300 leading-tight text-center">Welcome Dashboard,  Manage Your Tasks Effortlessly</h3>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    This dashboard helps you keep track of all your tasks in one place. You can create new tasks, track when they started, and mark them complete. The app makes task management easy and intuitive, ensuring you stay on top of your daily to-dos!
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">View Your To-Do List</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Check your tasks, update their status, or delete them when completed.</p>
                        <a href="{{ route('todos.index') }}" class="bg-gradient-to-r from-orange-500 to-red-500 hover:bg-red-600 font-bold py-3 px-4 rounded-tl-lg rounded-bl-sm rounded-tr-sm rounded-br-lg border-orange p-4 shadow-md font-sans text-base font-normal text-grey-lightest text-white">
                            View To-Do List
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Create a New Task</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Add a new task to your list and keep track of its progress.</p>
                        <a href="{{ route('todos.create') }}" class="bg-gradient-to-r from-red-500 to-orange-500 hover:bg-green-600 font-bold py-3 px-4 rounded-tl-sm rounded-bl-lg rounded-tr-lg rounded-br-sm border-orange p-4 shadow-md font-sans text-base font-normal text-grey-lightest text-white">
                            Create New Task
                        </a>
                    </div>
                </div>
            </div>

            <!-- Task Completion Reminder -->
            <div class="mt-10 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-center">
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Stay on Track</h4>
                <p class="text-gray-600 dark:text-gray-300">
                    Make sure to regularly check and complete your tasks to stay productive and organized. Your to-do list will help you stay focused on what’s important.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
