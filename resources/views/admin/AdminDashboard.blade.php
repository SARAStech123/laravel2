<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    @include('header')
    <p></p>
    <div>
    <canvas id="schoolsChart" width="200" height="200"></canvas>
    </div>
    <script>
        var ctx = document.getElementById('schoolsChart').getContext('2d');
        var schoolsChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pending Schools', 'Approved Schools', 'Total Schools'],
                datasets: [{
                    label: 'Schools',
                    data: [{{ $pendingSchools }}, {{ $approvedSchools }}, {{ $totalSchools }}],
                    backgroundColor: [
                        'rgba(255, 255, 0, 1)',
                        'rgba(0, 128, 0, 1)',
                        'rgba(54, 162, 235, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 255, 0, 1)',
                        'rgba(0, 128, 0, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                },
                cutout: '70%',
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + ' schools';
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
