<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form method="POST" action="{{ route('user.submitNumbers') }}">
        @csrf
        <div id="numbers" class="justify-center">
            <input type="text" name="numbers[]" v-model="number" v-for="(number, index) in numbers" :key="index" class="appearance-none rounded-none relative mr-2 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
            <button @click.prevent="addNumber" class="bg-emerald-500 text-white px-3 py-1 rounded hover:bg-emerald-700 transition-colors focus:ring-1 focus:ring-emerald-700 ring-offset-1">Add Number</button>
        </div>
        <button class="bg-indigo-500 mt-3 text-white px-3 py-1 rounded hover:bg-indigo-700 transition-colors focus:ring-1 focus:ring-indigo-700 ring-offset-1" type="submit">Submit Numbers</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
