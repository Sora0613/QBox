<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Questions
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- 質問サンプル1 -->
                    <div class="border p-4 mb-6 rounded-md">
                        <h3 class="text-lg font-semibold">Question 1</h3>
                        <p>質問〜〜〜〜〜〜〜〜</p>
                        <div class="mt-2">
                            <x-reply-button class="mr-2">Reply</x-reply-button>
                            <x-delete-button class="bg-red-500">Delete</x-delete-button>
                        </div>
                    </div>

                    <!-- 質問サンプル2 -->
                    <div class="border p-4 mb-6 rounded-md">
                        <h3 class="text-lg font-semibold">Question 2</h3>
                        <p>質問〜〜〜〜〜〜〜〜</p>
                        <div class="mt-2">
                            <x-reply-button class="mr-2">Reply</x-reply-button>
                            <x-delete-button class="bg-red-500">Delete</x-delete-button>
                        </div>
                    </div>

                    <!-- 質問サンプル3 -->
                    <div class="border p-4 mb-6 rounded-md">
                        <h3 class="text-lg font-semibold">Question 3</h3>
                        <p>質問〜〜〜〜〜〜〜〜</p>
                        <div class="mt-2">
                            <x-reply-button class="mr-2">Reply</x-reply-button>
                            <x-delete-button class="bg-red-500">Delete</x-delete-button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

