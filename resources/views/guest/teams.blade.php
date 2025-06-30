@extends('layouts.master')

@section('title', 'Teams')

@section('content')
    <div class="max-w-6xl mx-auto mt-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold">Our Teams</h1>
            <p>Our team is made up of talented individuals who are passionate about what they do.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-25">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                <x-card.teams
                    name="Josep Ronaldo Francis Siregar"
                    image="{{ asset('assets/img/developer/JRFS.png') }}"
                    position="Lead Team & Website Developer"
                    instagram="https://instagram.com/mrjrfs"
                    linkedin="https://linkedin.com/mrjrfs"
                    github="https://github.com/mrjrfs"
                />
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                <x-card.teams
                    name="M. Avriansyah"
                    image="{{ asset('assets/img/developer/JRFS.png') }}"
                    position="Data Analyst"
                    instagram="https://instagram.com/alice"
                    linkedin="https://linkedin.com/alice"
                    github="https://github.com/alice"
                />
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                <x-card.teams
                    name="Muhamad Rafli Ashari"
                    image="{{ asset('assets/img/developer/JRFS.png') }}"
                    position="Data Engineer"
                    instagram="https://instagram.com/alice"
                    linkedin="https://linkedin.com/alice"
                    github="https://github.com/alice"
                />
            </div>
        </div>
    </div>
@endsection
