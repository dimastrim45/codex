@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100 dark:bg-gray-900">
    <aside id="sidebar" class="bg-gray-800 dark:bg-gray-900 text-white w-64 p-4 space-y-2 transition-transform lg:translate-x-0 -translate-x-full lg:relative fixed inset-y-0 left-0 z-20">
        <div class="text-xl font-bold mb-4">Menu</div>
        <nav class="space-y-1">
            <a href="{{ route('dashboard') }}" class="block px-2 py-1 rounded hover:bg-gray-700">Dashboard</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-gray-700">{{ auth()->user()->name }}</a>
        </nav>
    </aside>
    <div id="mainContent" class="flex-1 flex flex-col lg:ml-64 transition-all">
        <nav class="bg-white dark:bg-gray-800 dark:text-white shadow px-4 py-2 flex items-center justify-between">
            <button id="sidebarToggle" class="text-gray-600 dark:text-gray-300">☰</button>
            <div class="flex items-center ml-auto gap-4">
                <button id="themeToggle" class="text-gray-600 dark:text-gray-300">🌓</button>
                <button id="notificationBtn" class="text-gray-600">🔔</button>
                <div class="relative">
                    <button id="userMenuBtn" class="text-gray-600">{{ auth()->user()->name }}</button>
                    <div id="userDropdown" class="absolute right-0 mt-2 bg-white border rounded shadow hidden">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block px-4 py-2 hover:bg-gray-100 w-full text-left">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <main class="p-4">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
            <p>Welcome, {{ auth()->user()->name }}</p>
        </main>
    </div>
</div>
@endsection
