
/* Estadisticas por usuario eventos */
var usuario_todos_evento_iniciado = readCookie( 'usuario_evento_iniciado' );
var usuario_todos_evento_desarrollo = readCookie ( 'usuario_evento_desarrollo' );
var usuario_todos_evento_finalizado = readCookie ( 'usuario_evento_finalizado' );
var usuario_todos_evento_solicitud = readCookie( 'usuario_evento_solicitud' );
var usuario_todos_evento_aprobado = readCookie ( 'usuario_evento_aprobado' );

/* Estadisticas por usuario investigaciones */
var usuario_todos_investigaciones_iniciado = readCookie ( 'usuario_investigacion_iniciado' );
var usuario_todos_investigaciones_solicitud = readCookie ( 'usuario_investigacion_solicitud' );
var usuario_todos_investigaciones_desarrollo = readCookie ( 'usuario_investigacion_desarrollo' );
var usuario_todos_investigaciones_finalizado = readCookie ( 'usuario_investigacion_finalizado' );
var usuario_todos_investigaciones_aprobado = readCookie ( 'usuario_entregado_enero');

/* Variables estadisticas por meses para cada usuario "entregados" */
var usuario_entregado_enero = readCookie ( 'usuario_entregado_enero' );
var usuario_entregado_febrero = readCookie ( 'usuario_entregado_febrero' );
var usuario_entregado_marzo = readCookie ( 'usuario_entregado_marzo' );
var usuario_entregado_abril = readCookie ( 'usuario_entregado_abril' );
var usuario_entregado_mayo = readCookie ( 'usuario_entregado_mayo' );
var usuario_entregado_junio = readCookie ( 'usuario_entregado_junio' );
var usuario_entregado_julio = readCookie ( 'usuario_entregado_julio' );
var usuario_entregado_agosto = readCookie ( 'usuario_entregado_agosto' );
var usuario_entregado_septiembre = readCookie ( 'usuario_entregado_septiembre' );
var usuario_entregado_octubre = readCookie ( 'usuario_entregado_octubre' );
var usuario_entregado_noviembre = readCookie ( 'usuario_entregado_noviembre' );
var usuario_entregado_diciembre = readCookie ( 'usuario_entregado_diciembre' );

/* Variables estadisticas por meses para cada usuario "en desarrollo" */
var usuario_desarrollo_enero = readCookie ( 'usuario_desarrollo_enero' );
var usuario_desarrollo_febrero = readCookie ( 'usuario_desarrollo_febrero' );
var usuario_desarrollo_marzo = readCookie ( 'usuario_desarrollo_marzo' );
var usuario_desarrollo_abril = readCookie ( 'usuario_desarrollo_abril' );
var usuario_desarrollo_mayo = readCookie ( 'usuario_desarrollo_mayo' );
var usuario_desarrollo_junio = readCookie ( 'usuario_desarrollo_junio' );
var usuario_desarrollo_julio = readCookie ( 'usuario_desarrollo_julio' );
var usuario_desarrollo_agosto = readCookie ( 'usuario_desarrollo_agosto' );
var usuario_desarrollo_septiembre = readCookie ( 'usuario_desarrollo_septiembre' );
var usuario_desarrollo_octubre = readCookie ( 'usuario_desarrollo_octubre' );
var usuario_desarrollo_noviembre = readCookie ( 'usuario_desarrollo_noviembre' );
var usuario_desarrollo_diciembre = readCookie ( 'usuario_desarrollo_diciembre' );

/* Variables estadisticas por meses para cada usuario " finalizadas y aprobadas" */
var usuario_aprobadas_enero = readCookie ( 'usuario_aprobadas_enero' );
var usuario_aprobadas_febrero = readCookie ( 'usuario_aprobadas_febrero' );
var usuario_aprobadas_marzo = readCookie ( 'usuario_aprobadas_marzo' );
var usuario_aprobadas_abril = readCookie ( 'usuario_aprobadas_abril' );
var usuario_aprobadas_mayo = readCookie ( 'usuario_aprobadas_mayo' );
var usuario_aprobadas_junio = readCookie ( 'usuario_aprobadas_junio' );
var usuario_aprobadas_julio = readCookie ( 'usuario_aprobadas_julio' );
var usuario_aprobadas_agosto = readCookie ( 'usuario_aprobadas_agosto' );
var usuario_aprobadas_septiembre = readCookie ( 'usuario_aprobadas_septiembre' );
var usuario_aprobadas_octubre = readCookie ( 'usuario_aprobadas_octubre' );
var usuario_aprobadas_noviembre = readCookie ( 'usuario_aprobadas_noviembre' );
var usuario_aprobadas_diciembre = readCookie ( 'usuario_aprobadas_diciembre' );

/* Funciones de Estadisticas por meses */
var ScalingFactor = function(){ return Math.round(1)*1};
var enero_desarrollo = function(){ return Math.round(usuario_desarrollo_enero)*1};
var febrero_desarrollo = function(){ return Math.round(usuario_desarrollo_febrero)*1};
var marzo_desarrollo = function(){ return Math.round(usuario_desarrollo_marzo)*1};
var abril_desarrollo = function(){ return Math.round(usuario_desarrollo_abril)*1};
var mayo_desarrollo = function(){ return Math.round(usuario_desarrollo_mayo)*1};
var junio_desarrollo = function(){ return Math.round(usuario_desarrollo_junio)*1};
var julio_desarrollo = function(){ return Math.round(usuario_desarrollo_julio)*1};
var agosto_desarrollo = function(){ return Math.round(usuario_desarrollo_agosto)*1};
var septiembre_desarrollo = function(){ return Math.round(usuario_desarrollo_septiembre)*1};
var octubre_desarrollo = function(){ return Math.round(usuario_desarrollo_octubre)*1};
var noviembre_desarrollo = function(){ return Math.round(usuario_desarrollo_noviembre)*1};
var diciembre_desarrollo = function(){ return Math.round(usuario_desarrollo_diciembre)*1};

var enero = function(){ return Math.round(usuario_entregado_enero)*1};
var febrero = function(){ return Math.round(usuario_entregado_febrero)*1};
var marzo = function(){ return Math.round(usuario_entregado_marzo)*1};
var abril = function(){ return Math.round(usuario_entregado_abril)*1};
var mayo = function(){ return Math.round(usuario_entregado_mayo)*1};
var junio = function(){ return Math.round(usuario_entregado_junio)*1};
var julio = function(){ return Math.round(usuario_entregado_julio)*1};
var agosto = function(){ return Math.round(usuario_entregado_agosto)*1};
var septiembre = function(){ return Math.round(usuario_entregado_septiembre)*1};
var octubre = function(){ return Math.round(usuario_entregado_octubre)*1};
var noviembre = function(){ return Math.round(usuario_entregado_noviembre)*1};
var diciembre = function(){ return Math.round(usuario_entregado_diciembre)*1};

var enero_aprobadas = function(){ return Math.round(usuario_aprobadas_enero)*1};
var febrero_aprobadas = function(){ return Math.round(usuario_aprobadas_febrero)*1};
var marzo_aprobadas = function(){ return Math.round(usuario_aprobadas_marzo)*1};
var abril_aprobadas = function(){ return Math.round(usuario_aprobadas_abril)*1};
var mayo_aprobadas = function(){ return Math.round(usuario_aprobadas_mayo)*1};
var junio_aprobadas = function(){ return Math.round(usuario_aprobadas_junio)*1};
var julio_aprobadas = function(){ return Math.round(usuario_aprobadas_julio)*1};
var agosto_aprobadas = function(){ return Math.round(usuario_aprobadas_agosto)*1};
var septiembre_aprobadas = function(){ return Math.round(usuario_aprobadas_septiembre)*1};
var octubre_aprobadas = function(){ return Math.round(usuario_aprobadas_octubre)*1};
var noviembre_aprobadas = function(){ return Math.round(usuario_aprobadas_noviembre)*1};
var diciembre_aprobadas = function(){ return Math.round(usuario_aprobadas_diciembre)*1};

/* Indicador de Cumplimiento "Meta" */

var usuario_indicador_cumplimiento = readCookie( 'usuario_indicador_cumplimiento' );
var usuario_indicador_cumplimiento_presente = readCookie( 'usuario_indicador_cumplimiento_presente' );
/* funcion de indicador cumplimiento meta */
var meta_cumplimiento = function(){ return Math.round(usuario_indicador_cumplimiento)*1};
var cumplimiento_presente = function(){ return Math.round(usuario_indicador_cumplimiento_presente)*1};

/* Indicador usuario eficacia */
var usuario_indicador_eficacia_presente = readCookie( 'usuario_indicador_eficacia_presente' );
var eficacia_presente = function(){ return Math.round(usuario_indicador_eficacia_presente)*1};



	var lineChartData = {
			labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : [ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(48, 164, 255, 0.5)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor()]
				}

			]

		}
		
	var barChartData = {
			labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					fillColor : "rgba(255,140,0,0.5)",
					strokeColor : "rgba(255,140,0,0.8)",
					highlightFill: "rgba(255,140,0,0.75)",
					highlightStroke: "rgba(255,140,0,1)",
					data : [enero_desarrollo(),febrero_desarrollo(),marzo_desarrollo(),abril_desarrollo(),mayo_desarrollo(),junio_desarrollo(),julio_desarrollo(),agosto_desarrollo(),septiembre_desarrollo(),octubre_desarrollo(),noviembre_desarrollo(),diciembre_desarrollo()]
				},
				{
					fillColor : "rgba(48, 164, 255, 0.5)",
					strokeColor : "rgba(48, 164, 255, 0.8)",
					highlightFill : "rgba(48, 164, 255, 0.75)",
					highlightStroke : "rgba(48, 164, 255, 1)",
					data : [enero(),febrero(),marzo(),abril(),mayo(),junio(),julio(),agosto(),septiembre(),octubre(),noviembre(),diciembre()]
				},
				{
					fillColor : "rgba(0, 128, 0, 0.5)",
					strokeColor : "rgba(0, 128, 0, 0.8)",
					highlightFill : "rgba(0, 128, 0, 0.75)",
					highlightStroke : "rgba(0, 128, 0, 1)",
					data : [enero_aprobadas(),febrero_aprobadas(),marzo_aprobadas(),abril_aprobadas(),mayo_aprobadas(),junio_aprobadas(),julio_aprobadas(),agosto_aprobadas(),septiembre_aprobadas(),octubre_aprobadas(),noviembre_aprobadas(),diciembre_aprobadas()]
				}
			]
	
		}

	var barChartIndicador = {
			labels : ["cumplimiento"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data : [meta_cumplimiento()]
				},

				{
					fillColor : "rgba(48, 164, 255, 0.5)",
					strokeColor : "rgba(48, 164, 255, 0.8)",
					highlightFill : "rgba(48, 164, 255, 0.75)",
					highlightStroke : "rgba(48, 164, 255, 1)",
					data : [cumplimiento_presente()]
				}
			]
	
		}	
		var barChartIndicador_eficacia = {
			labels : ["eficacia"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data : [cumplimiento_presente()]
				},

				{
					fillColor : "rgba(0, 128, 0, 0.5)",
					strokeColor : "rgba(0, 128, 0, 0.8)",
					highlightFill : "rgba(0, 128, 0, 0.75)",
					highlightStroke : "rgba(0, 128, 0, 1)",
					data : [eficacia_presente()]
				}
			]
	
		}

	var pieData = [
				{
					value: usuario_todos_evento_iniciado,
					color:"#30a5ff",
					highlight: "#62b9fb",
					label: "iniciado"
				},
				{
					value: usuario_todos_evento_desarrollo,
					color: "#ffb53e",
					highlight: "#fac878",
					label: "Desarrollo"
				},
				{
					value: usuario_todos_evento_finalizado,
					color: "#1ebfae",
					highlight: "#1ebfae",
					label: "Finalizado"
				},
				{
					value: usuario_todos_evento_solicitud,
					color: "#f9243f",
					highlight: "#f6495f",
					label: "En solicitud"
				},
				{
					value: usuario_todos_evento_aprobado,
					color: "#85E61A",
					highlight: "#85E61A",
					label: "Aprobado"
				}

			];
			
	var doughnutData = [
					{
						value: usuario_todos_investigaciones_iniciado,
						color:"#30a5ff",
						highlight: "#62b9fb",
						label: "Iniciado"
					},
					{
						value: usuario_todos_investigaciones_solicitud,
						color: "#f6495f",
						highlight: "#f6495f",
						label: "Solicitud"
					},
					{
						value: usuario_todos_investigaciones_desarrollo,
						color: "#ffb53e",
						highlight: "#ffb53e",
						label: "Desarrollo"
					},
					{
						value: usuario_todos_investigaciones_finalizado,
						color: "#1ebfae",
						highlight: "#1ebfae",
						label: "Finalizado"
					},

					{
						value: usuario_todos_investigaciones_aprobado,
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
	var chart3 = document.getElementById("doughnut-chart-usuario").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {responsive : true
	});
	var chart4 = document.getElementById("pie-chart-usuario").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {responsive : true
	});
	var chart5 = document.getElementById("bar-chart-indicador").getContext("2d");
	window.myBarindicador = new Chart(chart5).Bar(barChartIndicador, {
		responsive : true
	});
	var chart6 = document.getElementById("bar_chart_indicador_eficacia").getContext("2d");
	window.myBarindicador = new Chart(chart6).Bar(barChartIndicador_eficacia, {
		responsive : true
	});
	
};