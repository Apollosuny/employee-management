<div class="bg-body-tertiary h-100 d-flex justify-content-center align-items-center" style="padding-top: 5rem">
    <div class="bg-body w-95 h-95 p-3">
        <div>
            <h3>Dashboard</h3>
        </div>
       
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>