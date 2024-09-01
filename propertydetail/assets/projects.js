function calculateEMI() {
	var principal = parseFloat(document.getElementById("principal").value);
	var rate = parseFloat(document.getElementById("rate").value) / 12 / 100;
	var years = parseInt(document.getElementById("years").value);
	var additionalMonths = parseInt(document.getElementById("months").value || 0);
	var n = years * 12 + additionalMonths;

	if (principal <= 0 || rate <= 0 || n <= 0) {
		alert("Please enter valid numbers in all fields.");
		return;
	}

	var emi =
		(principal * rate * Math.pow(1 + rate, n)) / (Math.pow(1 + rate, n) - 1);
	var totalPayment = emi * n;
	var totalInterest = totalPayment - principal;

	document.getElementById("emiDetails").style.display = "block";
	document.getElementById("monthlyEmi").innerHTML = `Monthly EMI: ${emi.toFixed(
		2
	)}`;
	document.getElementById(
		"totalInterest"
	).innerHTML = `Total Interest: ${totalInterest.toFixed(2)}`;
	document.getElementById(
		"totalPayment"
	).innerHTML = `Total Payment (Principal + Interest): ${totalPayment.toFixed(
		2
	)}`;

	var ctx = document.getElementById("emiChart").getContext("2d");
	var myChart = new Chart(ctx, {
		type: "pie",
		data: {
			labels: ["Total Interest", "Principal Amount"],
			datasets: [
				{
					label: "EMI Distribution",
					data: [totalInterest, principal],
					backgroundColor: [
						"rgba(255, 99, 132, 0.2)",
						"rgba(54, 162, 235, 0.2)",
					],
					borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)"],
					borderWidth: 1,
				},
			],
		},
		options: {
			responsive: true,
			plugins: {
				legend: {
					position: "top",
				},
				title: {
					display: true,
					text: "EMI Distribution (Principal vs. Interest)",
				},
			},
		},
	});
}
