@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="max-w-6xl mx-auto mt-8">
        <!-- Input -->
        <div class="bg-white p-3 rounded-xl">
            <input type="text" class="w-full px-4 py-2 border border-none rounded-md focus:outline-none"
                placeholder="Type something...">
        </div>

        <!-- 2-column layout -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Donut Chart Card -->
            <div class="bg-white rounded-xl shadow p-6">
                <canvas id="donutChart"></canvas>
            </div>
            <!-- Text Card -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-semibold mb-2">Chart Description</h2>
                <p class="text-gray-600">This is a sample donut chart. You can update this text to describe the chart or
                    show any relevant information.</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('donutChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow'],
                datasets: [{
                    data: [30, 50, 20],
                    backgroundColor: [
                        'rgb(239,68,68)',
                        'rgb(59,130,246)',
                        'rgb(253,224,71)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                cutout: '70%',
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
@endpush
