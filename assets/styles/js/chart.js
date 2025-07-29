import Chart from 'chart.js/auto';

// Example usage:
const ctx = document.getElementById('myChart');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar'],
        datasets: [{
            label: 'Sales',
            data: [100, 200, 150],
            backgroundColor: ['red', 'green', 'blue']
        }]
    }
});
