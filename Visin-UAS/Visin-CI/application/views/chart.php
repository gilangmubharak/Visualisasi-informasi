<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Task', 'Hours per Day'],
				['Work',     6],
				['Eat',      4],
				['Commute',  5],
				['Watch TV', 4],
				['Sleep',    6]
			]);
			var options = {
				title: 'My Daily Activities',
				pieHole: 0.4,
			};
			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
	</script>
</head>
<body>
<div id="donutchart" style="width: 400px; height: 250px;"></div>
</body>
</html>
