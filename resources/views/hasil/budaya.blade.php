@extends('layouts.app')

@section('title', 'Hasil Penilaian Budaya Organisasi')

@section('content')
<div class="container main-container">
    <div class="text-center mb-4">
                <div class="mb-3">
                    <i class="fas fa-trophy fa-3x text-primary"></i>
                </div>
        <h1 class="text-primary fw-bold">Hasil Penilaian Budaya Organisasi</h1>
        <p class="text-muted">Gabungan Empat Aspek dalam Satu Diagram Cartesius</p>
    </div>

    <div class="chart-card">
        <div class="chart-title text-primary">Diagram Cartesius: PriKer, Leadership, People, System</div>
        <div style="height: 500px;">
            <canvas id="combinedChart"></canvas>
        </div>
        <div class="legend-custom">
            <div class="legend-item"><div class="legend-color" style="background:#007dc5;"></div> PriKer</div>
            <div class="legend-item"><div class="legend-color" style="background:#28a745;"></div> Leadership</div>
            <div class="legend-item"><div class="legend-color" style="background:#dc3545;"></div> People</div>
            <div class="legend-item"><div class="legend-color" style="background:#ffc107;"></div> System</div>
        </div>
    </div>
</div>
@endsection

@push('styles')
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
        font-size: 1.6rem;
        font-weight: 700;
        color: #007dc5;
        margin-bottom: 20px;
    }
    .legend-custom {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 25px;
        justify-content: center;
    }
    .legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 1rem;
        font-weight: 500;
    }
    .legend-color {
        width: 16px;
        height: 16px;
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
            // === PriKer ===
            {
                label: 'PriKer',
                data: [
                    { x: 2.8, y: 3.5, label: 'Harmonis' },
                    { x: 3.1, y: 3.7, label: 'Kompeten' },
                    { x: 3.2, y: 3.8, label: 'Berorientasi Pelayanan' },
                    { x: 3.5, y: 3.8, label: 'Loyal' },
                    { x: 3.6, y: 3.9, label: 'Akuntabel' }
                ],
                backgroundColor: '#007dc5',
                pointRadius: 10,
                pointHoverRadius: 15,
                showLine: false
            },
            {
                label: 'PriKer Line',
                data: [
                    { x: 2.8, y: 3.5 },
                    { x: 3.1, y: 3.7 },
                    { x: 3.2, y: 3.8 },
                    { x: 3.5, y: 3.8 },
                    { x: 3.6, y: 3.9 }
                ],
                borderColor: '#007dc5',
                backgroundColor: 'transparent',
                borderDash: [6, 6],
                showLine: true,
                pointRadius: 0,
                hidden: true,
                tension: 0
            },

            // === Leadership ===
            {
                label: 'Leadership',
                data: [
                    { x: 2.9, y: 3.4, label: 'Pengembangan Tim' },
                    { x: 3.2, y: 3.6, label: 'Apresiasi' },
                    { x: 3.3, y: 3.7, label: 'Feedback Rutin' },
                    { x: 3.4, y: 3.8, label: 'Keteladanan' },
                    { x: 3.7, y: 3.9, label: 'Visi Jelas' }
                ],
                backgroundColor: '#28a745',
                pointRadius: 10,
                pointHoverRadius: 15,
                showLine: false
            },
            {
                label: 'Leadership Line',
                data: [
                    { x: 2.9, y: 3.4 },
                    { x: 3.2, y: 3.6 },
                    { x: 3.3, y: 3.7 },
                    { x: 3.4, y: 3.8 },
                    { x: 3.7, y: 3.9 }
                ],
                borderColor: '#28a745',
                backgroundColor: 'transparent',
                borderDash: [6, 6],
                showLine: true,
                pointRadius: 0,
                hidden: true,
                tension: 0
            },

            // === People ===
            {
                label: 'People',
                data: [
                    { x: 3.0, y: 3.5, label: 'Kompetensi' },
                    { x: 3.1, y: 3.9, label: 'Kolaborasi Tim' },
                    { x: 3.2, y: 3.7, label: 'Ramah & Cekatan' },
                    { x: 3.4, y: 3.8, label: 'Jujur & Tanggung Jawab' },
                    { x: 3.5, y: 3.6, label: 'Inisiatif Tinggi' }
                ],
                backgroundColor: '#dc3545',
                pointRadius: 10,
                pointHoverRadius: 15,
                showLine: false
            },
            {
                label: 'People Line',
                data: [
                    { x: 3.0, y: 3.5 },
                    { x: 3.1, y: 3.9 },
                    { x: 3.2, y: 3.7 },
                    { x: 3.4, y: 3.8 },
                    { x: 3.5, y: 3.6 }
                ],
                borderColor: '#dc3545',
                backgroundColor: 'transparent',
                borderDash: [6, 6],
                showLine: true,
                pointRadius: 0,
                hidden: true,
                tension: 0
            },

            // === System ===
            {
                label: 'System',
                data: [
                    { x: 2.7, y: 3.2, label: 'SOP Jelas' },
                    { x: 2.9, y: 3.4, label: 'Penghargaan' },
                    { x: 3.2, y: 3.7, label: 'Media Keluhan' },
                    { x: 3.3, y: 3.6, label: 'Komunikasi Rutin' },
                    { x: 3.6, y: 3.8, label: 'Teknologi Pendukung' }
                ],
                backgroundColor: '#ffc107',
                pointRadius: 10,
                pointHoverRadius: 15,
                showLine: false
            },
            {
                label: 'System Line',
                data: [
                    { x: 2.7, y: 3.2 },
                    { x: 2.9, y: 3.4 },
                    { x: 3.2, y: 3.7 },
                    { x: 3.3, y: 3.6 },
                    { x: 3.6, y: 3.8 }
                ],
                borderColor: '#ffc107',
                backgroundColor: 'transparent',
                borderDash: [6, 6],
                showLine: true,
                pointRadius: 0,
                hidden: true,
                tension: 0
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        onClick: (evt, elements) => {
            if (elements.length > 0) {
                const clickedIndex = elements[0].datasetIndex;
                const chart = elements[0].element.$context.chart;

                // Toggle dataset berikutnya (diasumsikan pasangan garisnya)
                const lineIndex = clickedIndex + 1;
                if (chart.data.datasets[lineIndex]) {
                    chart.data.datasets[lineIndex].hidden = !chart.data.datasets[lineIndex].hidden;
                    chart.update();
                }
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        if (context.raw.label) {
                            return `${context.dataset.label} - ${context.raw.label}: (${context.raw.x}, ${context.raw.y})`;
                        } else {
                            return false; // hide tooltip for line
                        }
                    }
                }
            },
            legend: {
                display: false
            }
        },
        scales: {
            x: {
                min: 2.5,
                max: 4,
                border: {
                    display: true,
                    width: 2,
                    color: '#000000'
                },
                grid: {
                    display: true,
                    lineWidth: 1,
                    color: '#bbbbbb'
                },
                title: {
                    display: true,
                    text: 'Nilai Kinerja (Performance)',
                    font: { size: 16, weight: 'bold' }
                },
                ticks: {
                    font: { size: 14, weight: '500' }
                }
            },
            y: {
                min: 2.5,
                max: 4,
                border: {
                    display: true,
                    width: 2,
                    color: '#000000'
                },
                grid: {
                    display: true,
                    lineWidth: 1,
                    color: '#bbbbbb'
                },
                title: {
                    display: true,
                    text: 'Nilai Harapan (Expectation)',
                    font: { size: 16, weight: 'bold' }
                },
                ticks: {
                    font: { size: 14, weight: '500' }
                }
            }
        }
    }
});
</script>
@endpush
