import Chart from 'chart.js/auto';

// dashboard charts
const ctx = document.getElementById('revenueChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Revenue',
            data: [5000, 8000, 6000, 9000],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});


// revenue charts
new Chart(document.getElementById('monthlyRevenueChart'), {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Revenue',
            data: [1200, 1500, 1100, 1800],
            borderColor: '#dc3545',
            fill: true,
            backgroundColor: 'rgba(220, 53, 69, 0.1)'
        }]
    }
});
