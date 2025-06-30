@extends('layouts.master')

@section('title', 'About')

@section('content')
<div class="max-w-6xl mx-auto mt-10 grid grid-cols-1 md:grid-cols-1 gap-8">
    <!-- Purpose Card -->
    <div class="bg-white rounded-xl shadow p-8 flex flex-col justify-center">
        <h1 class="text-3xl font-bold mb-6 text-sky-800">About This Project</h1>
        <h2 class="text-xl font-semibold mb-2 text-sky-700">Purpose of Project</h2>
        <p class="text-gray-700 leading-relaxed">
            This project aims to provide advanced natural language processing (NLP) solutions for Bahasa Indonesia, enabling users to analyze, process, and extract insights from text data efficiently. The goal is to support research, education, and business applications by offering easy-to-use tools and interfaces for NLP tasks.
        </p>
    </div>
    <!-- Technology Card -->
    <div class="bg-white rounded-xl shadow p-8 flex flex-col justify-center">
        <h2 class="text-2xl font-bold mb-6 text-sky-800">Technology We Used</h2>
        <div class="grid grid-cols-6 gap-6">
            <!-- Laravel -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#F55247"/><path d="M13 34L24 14L35 34H13Z" fill="white"/></svg>
                <span class="text-gray-700 text-sm mt-1">Laravel</span>
            </div>
            <!-- Tailwind CSS -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#38BDF8"/><path d="M24 18c-4 0-6 2-8 6 2-2 4-3 8-3s6 1 8 3c-2-4-4-6-8-6zm-8 8c-4 0-6 2-8 6 2-2 4-3 8-3s6 1 8 3c-2-4-4-6-8-6z" fill="white"/></svg>
                <span class="text-gray-700 text-sm mt-1">Tailwind CSS</span>
            </div>
            <!-- Chart.js -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#FFB400"/><circle cx="24" cy="24" r="10" fill="white"/><path d="M24 14v10l7 7" stroke="#FFB400" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span class="text-gray-700 text-sm mt-1">Chart.js</span>
            </div>
            <!-- JavaScript -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#F7DF1E"/><text x="24" y="32" text-anchor="middle" font-size="18" fill="#222" font-family="Arial, Helvetica, sans-serif" font-weight="bold">JS</text></svg>
                <span class="text-gray-700 text-sm mt-1">JavaScript</span>
            </div>
            <!-- Blade -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#6366F1"/><path d="M24 14l10 20H14L24 14z" fill="white"/></svg>
                <span class="text-gray-700 text-sm mt-1">Blade</span>
            </div>
            <!-- Open Source -->
            <div class="flex flex-col items-center">
                <svg class="w-12 h-12 mb-2" viewBox="0 0 48 48" fill="none"><rect width="48" height="48" rx="8" fill="#10B981"/><circle cx="24" cy="24" r="8" fill="white"/><path d="M24 20v4l3 3" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span class="text-gray-700 text-sm mt-1">Open Source</span>
            </div>
        </div>
    </div>
</div>
@endsection
