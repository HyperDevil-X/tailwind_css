<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<title>Annual Sales - 2015</title>

		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="assets/bootstrap/bootstrap4-alpha3.min.css"> -->
		
		<style>
			body {
				background-color: #C1C1E8;
				/* font-size: 16px; */
				/* line-height: 1.5; */
			}
			
			h1,h2,h3,h4,h5,h6 {
				font-weight: 400;	
			}
			
			#part2 {
				border-bottom: 5px solid #37474F;
				color: #37474F;
				margin-bottom: 1.5rem;
				padding: 1rem 0;
			}
			
			#revenue-tag {
				font-weight: inherit !important;
				border-radius: 0px !important;
			}
			
			.card {
				border:none;
				outline: none;
			}
			
			.card-part2 {
				background-color: #2F7DC2;
				border-radius: 0 !important;
				color:	white;
				margin-bottom: 0;
				padding:	1rem;
			}
			
			.card-block {
				border: 1px solid #cccccc;	
			}
			
			.shadow {
				box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14),
										0 1px 18px 0 rgba(0, 0, 0, 0.12),
										0 3px 5px -1px rgba(0, 0, 0, 0.2);
			}
			
			#revenue-column-chart, #products-revenue-pie-chart, #orders-spline-chart {
				height: 300px;
				width: 100%;
			}	
			/* Box styles */
	.box {
        width: 43.8%;
		height: 363px;
        padding: 20px;
        background-color: white;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
		margin-left: 55%;
		margin-top: -25.6%
    }

    /* Heading styles */
    .box .bt {
        background-color: #2F7DC2; /* Blue background color */
		height: 60.2px;
        color: white;
        padding: 10px;
        margin: -4% 0% 0% -3.5%;
		width: 620px;
		font-weight:600;
		font-size:20px; 
		letter-spacing:3px;  
		font-variant: small-caps;
    }

    /* List styles */
    .box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .box li {
        background-color: #ffffff; /* White background color for list items */
        padding: 10px;
        margin-bottom: 5px;
        border-radius: 4px;		
		font-size: 17px;
		font-weight:600 ;
		font-family: 'Times New Roman', Times, serif;
		font-variant: small-caps;
	}
		</style>
		
		<!-- Scripts -->
		<script src="assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="assets/tether/tether.min.js"></script>
		<script src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
		<script>
			$(function () {
				var totalRevenue = 15341110;
				
				// CanvasJS column chart to show revenue from Jan 2015 - Dec 2015
				var revenueColumnChart = new CanvasJS.Chart("revenue-column-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					axisX: {
						labelFontSize: 14,
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						labelFontSize: 14,
						prefix: "₹"
					},
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					data: [
						{
							type: "column",
							yValueFormatString: "₹###,###.##",
							dataPoints: [
								{ x: new Date("1 Jan 2024"), y: 868800 },
								{ x: new Date("1 Feb 2024"), y: 1071550 },
								{ x: new Date("1 Mar 2024"), y: 1286200 },
								{ x: new Date("1 Apr 2024"), y: 1106900 },
								{ x: new Date("1 May 2024"), y: 1033800 },
								{ x: new Date("1 Jun 2024"), y: 1017160 },
								{ x: new Date("1 Jul 2024"), y: 1458000 },
								{ x: new Date("1 Aug 2024"), y: 1165850 },
								{ x: new Date("1 Sep 2024"), y: 1594150 },
								{ x: new Date("1 Oct 2024"), y: 1501700 },
								{ x: new Date("1 Nov 2024"), y: 1588400 },
								{ x: new Date("1 Dec 2024"), y: 1648600 }
							]
						}
					]
				});
				
				revenueColumnChart.render();
				
				//CanvasJS pie chart to show product wise annual revenue for 2015
				var productsRevenuePieChart = new CanvasJS.Chart("products-revenue-pie-chart", {
					animationEnabled: true,
					theme: "theme2",
					legend: {
						fontSize: 14
					},
					toolTip: {
						borderThickness: 0,
						content: "<span style='\"'color: {color};'\"'>{name}</span>: ₹{y} (#percent%)",
						cornerRadius: 0
					},
					data: [
						{       
							indexLabelFontColor: "#676464",
							indexLabelFontSize: 14,
							legendMarkerType: "square",
							legendText: "{indexLabel}",
							showInLegend: true,
							startAngle:  90,
							type: "pie",
							dataPoints: [
								{  y: 6289855, name:"BMW", indexLabel: "BMW - 20%", legendText: "BMW", exploded: true },
								{  y: 2761400, name:"Audi", indexLabel: "Audi - 18%", legendText: "Audi" },
								{  y: 3681866, name:"LandRover", indexLabel: "LandRover - 24%", legendText: "LandRover", color: "#8064a1" },
								{  y: 2607989, name:"Mercedes", indexLabel: "Mercedes - 17%", legendText: "Mercedes" }
							]
						}
					]
				});
				
				productsRevenuePieChart.render();
				
				//CanvasJS spline chart to show orders from Jan 2015 to Dec 2015
				var ordersSplineChart = new CanvasJS.Chart("orders-spline-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					theme: "theme2",
					toolTip: {
						borderThickness: 0,
						cornerRadius: 0
					},
					axisX: {
						labelFontSize: 14,
						maximum: new Date("31 Dec 2024"),
						valueFormatString: "MMM YYYY"
					},
					axisY: {
						gridThickness: 0,
						labelFontSize: 14,
						lineThickness: 2
					},
					data: [
						{
							type: "spline",
							dataPoints: [
								{ x: new Date("1 Jan 2024"), y: 17376 },
								{ x: new Date("1 Feb 2024"), y: 21431 },
								{ x: new Date("1 Mar 2024"), y: 25724 },
								{ x: new Date("1 Apr 2024"), y: 22138 },
								{ x: new Date("1 May 2024"), y: 20676 },
								{ x: new Date("1 Jun 2024"), y: 25429 },
								{ x: new Date("1 Jul 2024"), y: 29160 },
								{ x: new Date("1 Aug 2024"), y: 23317 },
								{ x: new Date("1 Sep 2024"), y: 31883 },
								{ x: new Date("1 Oct 2024"), y: 30034 },
								{ x: new Date("1 Nov 2024"), y: 31768 },
								{ x: new Date("1 Dec 2024"), y: 41215 }
							]
						}
					]
				});

				ordersSplineChart.render();
				
			});
		</script>
		
	</head>
	<body>
		<div class="part1">
			<div class="row m-b-1">
				<div class="col-xs-12">
					<div class="card shadow" style="margin-top:-3%; width:53%; background-color:white;">
						<h4 class="card-part2" style="font-weight:600;font-size:20px; letter-spacing:3px;  font-variant: small-caps;">Revenue <span class="tag tag-success" id="revenue-tag">₹78,00,000</span></h4>
						<div class="card-block">
							<div id="revenue-column-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->

		<div class="box">
			<div class="bt">Vehicles Book From Countries</div>
				<ul>
					<li>India - 48%</li>
					<li>USA - 60%</li>
					<li>Mexico - 14%</li>
					<li>South Korea - 34%</li>
					<li>UAE - 70%</li>
					<li>France - 40%</li>
				</ul>
		</div>

			<div class="row m-b-1" >
				<div class="col-lg-6">
					<div class="card shadow" style="width:44%;margin-top:1%; margin-left:55%;">
						<h4 class="card-part2" style="font-weight:600;font-size:20px; letter-spacing:3px;  font-variant: small-caps;">Vehicle Available</h4>
						<div class="card-block">
							<div id="products-revenue-pie-chart"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="card shadow" style="margin-top:-25.7%; background-color: white;width:53%;">
						<h4 class="card-part2" style="font-weight:600;font-size:20px; letter-spacing:3px;  font-variant: small-caps;">Total Bookings</h4>
						<div class="card-block">
							<div id="orders-spline-chart"></div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	<!-- </body>
</html> -->