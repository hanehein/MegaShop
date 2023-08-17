//daily subscriber display bar chart
const ctx = document.getElementById("myChart");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: dates,
    datasets: [
      {
        label: "Daily Numbers of Subscriber",
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

// '#003366',
// '#000066',
// '#004D99'
// '#66CC33',
// '#33CC4C',
// '#B3CC33'
