<!DOCTYPE html>
<html>
<body>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>
const xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15, 16];
// Define the array of month names
const monthNames = [
  "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
// Convert x-values to month names
const monthLabels = xValues.map((xValue) => monthNames[xValue - 1]);
new Chart("myChart", {
  type: "line",
  data: {
    labels: monthLabels,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: { display: false },
    scales: {
      yAxes: [{ ticks: { min: 6, max: 16 } }],
    }
  }
});
</script>
</body>
</html>
