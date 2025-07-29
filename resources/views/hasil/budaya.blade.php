@extends('layouts.app')

@section('title', 'Hasil Penilaian Budaya Organisasi')

@section('content')
<div class="container main-container">
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold">Hasil Penilaian Budaya Organisasi</h1>
        <p class="text-muted">Gabungan Empat Aspek dalam Satu Diagram Cartesius</p>
    </div>

    <div class="chart-card">
        <div class="chart-title text-primary">Diagram Cartesius: PriKer, Leadership, People, System</div>
        <div style="height: 500px;">
            <canvas id="combinedChart"></canvas>
        </div>
        <div class="legend-custom mt-3">
            <div class="legend-item"><div class="legend-color" style="background:#007dc5;"></div> PriKer</div>
            <div class="legend-item"><div class="legend-color" style="background:#28a745;"></div> Leadership</div>
            <div class="legend-item"><div class="legend-color" style="background:#dc3545;"></div> People</div>
            <div class="legend-item"><div class="legend-color" style="background:#ffc107;"></div> System</div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Tambahan CSS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f4f8;
    }
    .main-container {
        margin-top: 80px;
    }
    .chart-card {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .chart-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #007dc5;
        margin-bottom: 20px;
    }
    .legend-custom {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 20px;
    }
    .legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .legend-color {
        width: 14px;
        height: 14px;
        border-radius: 50%;
    }
</style>
@endpush


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('combinedChart').getContext('2d');

    const combinedChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [
                {
                    label: 'PriKer',
                    data: [
                        { x: 3.2, y: 3.8, label: 'Berorientasi Pelayanan' },
                        { x: 3.6, y: 3.9, label: 'Akuntabel' },
                        { x: 3.1, y: 3.7, label: 'Kompeten' }
                    ],
                    backgroundColor: '#007dc5',
                    pointRadius: 7,
                    pointHoverRadius: 10
                },
                {
                    label: 'Leadership',
                    data: [
                        { x: 3.3, y: 3.7, label: 'Feedback Rutin' },
                        { x: 3.4, y: 3.8, label: 'Keteladanan' },
                        { x: 3.2, y: 3.6, label: 'Apresiasi' }
                    ],
                    backgroundColor: '#28a745',
                    pointRadius: 7,
                    pointHoverRadius: 10
                },
                {
                    label: 'People',
                    data: [
                        { x: 3.2, y: 3.7, label: 'Ramah & Cekatan' },
                        { x: 3.4, y: 3.8, label: 'Jujur & Tanggung Jawab' },
                        { x: 3.0, y: 3.5, label: 'Kompetensi' }
                    ],
                    backgroundColor: '#dc3545',
                    pointRadius: 7,
                    pointHoverRadius: 10
                },
                {
                    label: 'System',
                    data: [
                        { x: 2.9, y: 3.4, label: 'Penghargaan' },
                        { x: 3.2, y: 3.7, label: 'Media Keluhan' },
                        { x: 3.3, y: 3.6, label: 'Komunikasi Rutin' }
                    ],
                    backgroundColor: '#ffc107',
                    pointRadius: 7,
                    pointHoverRadius: 10
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.dataset.label} - ${context.raw.label}: (${context.raw.x}, ${context.raw.y})`;
                        }
                    }
                },
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Nilai Kinerja'
                    },
                    min: 1,
                    max: 4
                },
                y: {
                    title: {
                        display: true,
                        text: 'Nilai Harapan'
                    },
                    min: 1,
                    max: 4
                }
            }
        }
    });
</script>
@endpush

