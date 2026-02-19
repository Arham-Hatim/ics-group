$(function () {
	"use strict";


	// chart 1 - Total Users
	var options1 = {
		series: [{
			name: "Total Users",
			data: [800, 950, 1100, 1050, 1200, 1248]
		}],
		chart: {
			type: "line",
			height: 40,
			toolbar: { show: !1 },
			zoom: { enabled: !1 },
			sparkline: { enabled: !0 }
		},
		markers: { size: 0 },
		stroke: { show: !0, width: 2.5, curve: "smooth" },
		colors: ["#ff6632"],
		tooltip: { theme: "dark", x: { show: !1 } }
	};
	if (document.querySelector("#chart1")) new ApexCharts(document.querySelector("#chart1"), options1).render();

	// chart 2 - Active Bookings
	var options2 = {
		series: [{
			name: "Active Bookings",
			data: [40, 60, 50, 85, 90, 96]
		}],
		chart: {
			type: "bar",
			height: 40,
			toolbar: { show: !1 },
			sparkline: { enabled: !0 }
		},
		colors: ["#ff6632"],
		tooltip: { theme: "dark", x: { show: !1 } }
	};
	if (document.querySelector("#chart2")) new ApexCharts(document.querySelector("#chart2"), options2).render();

	// chart 3 - Upcoming Trips
	var options3 = {
		series: [{
			name: "Upcoming Trips",
			data: [10, 25, 15, 30, 35, 42]
		}],
		chart: {
			type: "line",
			height: 40,
			toolbar: { show: !1 },
			sparkline: { enabled: !0 }
		},
		stroke: { show: !0, width: 2.5, curve: "smooth" },
		colors: ["#ff6632"],
		tooltip: { theme: "dark", x: { show: !1 } }
	};
	if (document.querySelector("#chart3")) new ApexCharts(document.querySelector("#chart3"), options3).render();

	// chart 4 - Active Packages
	var options4 = {
		series: [{
			name: "Active Packages",
			data: [12, 14, 15, 16, 17, 18]
		}],
		chart: {
			type: "bar",
			height: 40,
			toolbar: { show: !1 },
			sparkline: { enabled: !0 }
		},
		colors: ["#ff6632"],
		tooltip: { theme: "dark", x: { show: !1 } }
	};
	if (document.querySelector("#chart4")) new ApexCharts(document.querySelector("#chart4"), options4).render();

	// chart 5 - Bookings Analysis
	var options5 = {
		series: [{
			name: "Bookings",
			data: [120, 150, 180, 140, 160, 210, 190, 240, 250, 280, 230, 260]
		}],
		chart: {
			type: "area",
			stacked: true,
			height: 280,
			toolbar: { show: !1 },
			zoom: { enabled: !1 }
		},
		colors: ["#ff6632"],
		xaxis: {
			categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
		},
		fill: {
			type: 'gradient',
			gradient: {
				shade: 'light',
				type: 'vertical',
				opacityFrom: 0.5,
				opacityTo: 0.1,
			}
		},
		tooltip: { theme: "dark" }
	};
	if (document.querySelector("#chart5")) new ApexCharts(document.querySelector("#chart5"), options5).render();

	// chart 6 - Booking Types (Doughnut)
	if (document.getElementById('chart6')) new Chart(document.getElementById('chart6'), {
		type: 'doughnut',
		data: {
			labels: ["Business", "Personal"],
			datasets: [{
				backgroundColor: ["#ff6632", "#ff681a"],
				data: [35, 65]
			}]
		},
		options: {
			maintainAspectRatio: false,
			cutoutPercentage: 85,
			legend: { display: false }
		}
	});

	// chart 7 - Most Bookmarked Trend
	var options7 = {
		chart: {
			height: 150,
			type: 'area',
			sparkline: { enabled: true }
		},
		stroke: { curve: 'smooth', width: 2 },
		fill: {
			type: 'gradient',
			gradient: { opacityFrom: 0.5, opacityTo: 0.1 }
		},
		colors: ["#ff681a"],
		series: [{
			name: 'Bookmarks',
			data: [100, 150, 200, 180, 250, 300, 324]
		}],
	}
	if (document.querySelector("#chart7")) new ApexCharts(document.querySelector("#chart7"), options7).render();

});
