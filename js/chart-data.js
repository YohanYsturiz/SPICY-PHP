function readCookie(name) {
  var nameEQ = name + '=';
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) {
      return decodeURIComponent( c.substring(nameEQ.length,c.length) );
    }

  }
  return null;
}

var todos_evento_iniciado = readCookie( 'eventos_iniciado' );
var todos_evento_solicitud = readCookie( 'eventos_solicitud' );
var todos_evento_desarrollo = readCookie ( 'eventos_desarrollo' );
var todos_evento_finalizado = readCookie ( 'eventos_finalizado' );

var todos_investigaciones_iniciado = readCookie ( 'investigaciones_iniciado' );
var todos_investigaciones_solicitud = readCookie ( 'investigaciones_solicitud' );
var todos_investigaciones_desarrollo = readCookie ( 'investigaciones_desarrollo' );
var todos_investigaciones_finalizado = readCookie ( 'investigaciones_finalizado' );
var todos_investigaciones_aprobado = readCookie ( 'investigaciones_aprobado' );

var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	
	var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]

		}
		
	var barChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				},
				{
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 0.8)",
					highlightFill : "rgba(48, 164, 255, 0.75)",
					highlightStroke : "rgba(48, 164, 255, 1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]
	
		}

	var pieData = [
				{
					value: todos_evento_iniciado,
					color:"#30a5ff",
					highlight: "#62b9fb",
					label: "iniciado"
				},
				{
					value: todos_evento_desarrollo,
					color: "#ffb53e",
					highlight: "#fac878",
					label: "Desarrollo"
				},
				{
					value: todos_evento_finalizado,
					color: "#1ebfae",
					highlight: "#1ebfae",
					label: "Finalizado"
				},
				{
					value: todos_evento_solicitud,
					color: "#f9243f",
					highlight: "#f6495f",
					label: "En solicitud"
				}

			];
			
	var doughnutData = [
					{
						value: todos_investigaciones_iniciado,
						color:"#30a5ff",
						highlight: "#62b9fb",
						label: "Iniciado"
					},
					{
						value: todos_investigaciones_solicitud,
						color: "#f6495f",
						highlight: "#f6495f",
						label: "Solicitud"
					},
					{
						value: todos_investigaciones_desarrollo,
						color: "#ffb53e",
						highlight: "#ffb53e",
						label: "Desarrollo"
					},
					{
						value: todos_investigaciones_finalizado,
						color: "#1ebfae",
						highlight: "#1ebfae",
						label: "Finalizado"
					},

					{
						value: todos_investigaciones_aprobado,
						color: "#85E61A",
						highlight: "#85E61A",
						label: "Aprobado"
					}
	
				];

window.onload = function(){
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive : true
	});
	var chart3 = document.getElementById("doughnut-chart-estadistica").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
	});
	
};