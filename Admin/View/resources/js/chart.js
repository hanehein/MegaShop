//daily subscriber display bar chart
const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: dates,
    datasets: [
      {
        label: "",
        data: totalPerson,
        backgroundColor: "#003366",
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

//plan display chart
const ctx1 = document.getElementById("planChart");
const data = {
  labels: ["Basic", "Silver", "Gold"],
  datasets: [
    {
      label: "Suppliers Plan Display Chart",
      data: totalPlan,
      backgroundColor: ["#004D99", "#000066", "#003366"],
      hoverOffset: 4,
    },
  ],
};
const config = {
  type: "pie",
  data: data,
};
new Chart(ctx1, config);

//product horizontal bar chart 
const ctx2 = document.getElementById("productChart");
const today = new Date();
const labels = [];

for (let i = 6; i >= 0; i--) {
  const date = new Date(today);
  date.setMonth(today.getMonth() - i);
  const monthLabel = date.toLocaleString('default', { month: 'short' });
  labels.push(monthLabel);
}
const data2 = {
  labels: labels,
  datasets: [{
    axis: 'y',
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};
const config2 = {
  type: 'bar',
  data: data2,
  options: {
    indexAxis: 'y',
  },
};
new Chart(ctx2, config2);

//donutChart
const ctx3 = document.getElementById("donutChart");
const data3 = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: '',
    data: [300, 50, 100],
    backgroundColor: [
      '#003366',
      '#000066',
      '#006666'
    ],
    hoverOffset: 4
  }]
};
const config3 = {
  type: 'doughnut',
  data: data3,
};
new Chart(ctx3, config3);



