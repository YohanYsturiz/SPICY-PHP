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
var todos_evento_aprobado = readCookie ( 'eventos_aprobado' );

var todos_investigaciones_iniciado = readCookie ( 'investigaciones_iniciado' );
var todos_investigaciones_solicitud = readCookie ( 'investigaciones_solicitud' );
var todos_investigaciones_desarrollo = readCookie ( 'investigaciones_desarrollo' );
var todos_investigaciones_finalizado = readCookie ( 'investigaciones_finalizado' );
var todos_investigaciones_aprobado = readCookie ( 'investigaciones_aprobado' );

/* Variables estadisticas por meses para cada usuario "entregados" */
var entregado_enero = readCookie ( 'entregado_enero' );
var entregado_febrero = readCookie ( 'entregado_febrero' );
var entregado_marzo = readCookie ( 'entregado_marzo' );
var entregado_abril = readCookie ( 'entregado_abril' );
var entregado_mayo = readCookie ( 'entregado_mayo' );
var entregado_junio = readCookie ( 'entregado_junio' );
var entregado_julio = readCookie ( 'entregado_julio' );
var entregado_agosto = readCookie ( 'entregado_agosto' );
var entregado_septiembre = readCookie ( 'entregado_septiembre' );
var entregado_octubre = readCookie ( 'entregado_octubre' );
var entregado_noviembre = readCookie ( 'entregado_noviembre' );
var entregado_diciembre = readCookie ( 'entregado_diciembre' );

/* Variables estadisticas por meses para cada usuario "en desarrollo" */
var desarrollo_enero = readCookie ( 'desarrollo_enero' );
var desarrollo_febrero = readCookie ( 'desarrollo_febrero' );
var desarrollo_marzo = readCookie ( 'desarrollo_marzo' );
var desarrollo_abril = readCookie ( 'desarrollo_abril' );
var desarrollo_mayo = readCookie ( 'desarrollo_mayo' );
var desarrollo_junio = readCookie ( 'desarrollo_junio' );
var desarrollo_julio = readCookie ( 'desarrollo_julio' );
var desarrollo_agosto = readCookie ( 'desarrollo_agosto' );
var desarrollo_septiembre = readCookie ( 'desarrollo_septiembre' );
var desarrollo_octubre = readCookie ( 'desarrollo_octubre' );
var desarrollo_noviembre = readCookie ( 'desarrollo_noviembre' );
var desarrollo_diciembre = readCookie ( 'desarrollo_diciembre' );

/* Variables estadisticas por meses para cada usuario " finalizadas y aprobadas" */
var aprobadas_enero = readCookie ( 'aprobadas_enero' );
var aprobadas_febrero = readCookie ( 'aprobadas_febrero' );
var aprobadas_marzo = readCookie ( 'aprobadas_marzo' );
var aprobadas_abril = readCookie ( 'aprobadas_abril' );
var aprobadas_mayo = readCookie ( 'aprobadas_mayo' );
var aprobadas_junio = readCookie ( 'aprobadas_junio' );
var aprobadas_julio = readCookie ( 'aprobadas_julio' );
var aprobadas_agosto = readCookie ( 'aprobadas_agosto' );
var aprobadas_septiembre = readCookie ( 'aprobadas_septiembre' );
var aprobadas_octubre = readCookie ( 'aprobadas_octubre' );
var aprobadas_noviembre = readCookie ( 'aprobadas_noviembre' );
var aprobadas_diciembre = readCookie ( 'aprobadas_diciembre' );

/* Funciones de Estadisticas por meses */
var ScalingFactor = function(){ return Math.round(1)*1};
var enero_desarrollo = function(){ return Math.round(desarrollo_enero)*1};
var febrero_desarrollo = function(){ return Math.round(desarrollo_febrero)*1};
var marzo_desarrollo = function(){ return Math.round(desarrollo_marzo)*1};
var abril_desarrollo = function(){ return Math.round(desarrollo_abril)*1};
var mayo_desarrollo = function(){ return Math.round(desarrollo_mayo)*1};
var junio_desarrollo = function(){ return Math.round(desarrollo_junio)*1};
var julio_desarrollo = function(){ return Math.round(desarrollo_julio)*1};
var agosto_desarrollo = function(){ return Math.round(desarrollo_agosto)*1};
var septiembre_desarrollo = function(){ return Math.round(desarrollo_septiembre)*1};
var octubre_desarrollo = function(){ return Math.round(desarrollo_octubre)*1};
var noviembre_desarrollo = function(){ return Math.round(desarrollo_noviembre)*1};
var diciembre_desarrollo = function(){ return Math.round(desarrollo_diciembre)*1};

var enero = function(){ return Math.round(entregado_enero)*1};
var febrero = function(){ return Math.round(entregado_febrero)*1};
var marzo = function(){ return Math.round(entregado_marzo)*1};
var abril = function(){ return Math.round(entregado_abril)*1};
var mayo = function(){ return Math.round(entregado_mayo)*1};
var junio = function(){ return Math.round(entregado_junio)*1};
var julio = function(){ return Math.round(entregado_julio)*1};
var agosto = function(){ return Math.round(entregado_agosto)*1};
var septiembre = function(){ return Math.round(entregado_septiembre)*1};
var octubre = function(){ return Math.round(entregado_octubre)*1};
var noviembre = function(){ return Math.round(entregado_noviembre)*1};
var diciembre = function(){ return Math.round(entregado_diciembre)*1};

var enero_aprobadas = function(){ return Math.round(aprobadas_enero)*1};
var febrero_aprobadas = function(){ return Math.round(aprobadas_febrero)*1};
var marzo_aprobadas = function(){ return Math.round(aprobadas_marzo)*1};
var abril_aprobadas = function(){ return Math.round(aprobadas_abril)*1};
var mayo_aprobadas = function(){ return Math.round(aprobadas_mayo)*1};
var junio_aprobadas = function(){ return Math.round(aprobadas_junio)*1};
var julio_aprobadas = function(){ return Math.round(aprobadas_julio)*1};
var agosto_aprobadas = function(){ return Math.round(aprobadas_agosto)*1};
var septiembre_aprobadas = function(){ return Math.round(aprobadas_septiembre)*1};
var octubre_aprobadas = function(){ return Math.round(aprobadas_octubre)*1};
var noviembre_aprobadas = function(){ return Math.round(aprobadas_noviembre)*1};
var diciembre_aprobadas = function(){ return Math.round(aprobadas_diciembre)*1};

var indicador_cumplimiento = readCookie( 'indicador_cumplimiento' );
var indicador_cumplimiento_presente = readCookie( 'indicador_cumplimiento_presente' );
/* funcion de indicador cumplimiento meta */
var meta_cumplimiento = function(){ return Math.round(indicador_cumplimiento)*1};
var cumplimiento_presente = function(){ return Math.round(indicador_cumplimiento_presente)*1};

/* Indicador usuario eficacia */
var indicador_eficacia_presente = readCookie( 'indicador_eficacia_presente' );
var eficacia_presente = function(){ return Math.round(indicador_eficacia_presente)*1};

/*Indicador para cada linea de investigacion */
var indicador_pnfa = readCookie( 'indicador_pnfa' );
var indicador_pnfi = readCookie( 'indicador_pnfi' );
var indicador_pnft = readCookie( 'indicador_pnft' );
var indicador_preescolar = readCookie( 'indicador_preescolar' );
var indicador_trabajo_social = readCookie( 'indicador_trabajo_social' );


/* funcion de indicador cumplimiento meta */
var pnfa_finalizados = function(){ return Math.round(indicador_pnfa)*1};
var pnfi_finalizados = function(){ return Math.round(indicador_pnfi)*1};
var pnft_finalizados = function(){ return Math.round(indicador_pnft)*1};
var preescolar_finalizados = function(){ return Math.round(indicador_preescolar)*1};
var trabajo_social_finalizados = function(){ return Math.round(indicador_trabajo_social)*1};



	
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
					data : [ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor()]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor(),ScalingFactor()]
				}
			]

		}
		
	var barChartData_mensual = {
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

		var barChartData_pnf = {
				labels : ["PNFA","PNFI","PNFT","Preescolar","Trabajo social"],
			datasets : [
				{
					fillColor : "rgba(255,140,0,0.5)",
					strokeColor : "rgba(255,140,0,0.8)",
					highlightFill: "rgba(255,140,0,0.75)",
					highlightStroke: "rgba(255,140,0,1)",
					data : [pnfa_finalizados(),pnfi_finalizados(),pnft_finalizados(),preescolar_finalizados(),trabajo_social_finalizados()]
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

	var pieData_evento = [
							  {
				        value: todos_evento_solicitud,
				        color: "#f9243f",
				        highlight: "#f9243f",
				        label: "Solicitud"
				      },
				      {
				        value: todos_evento_iniciado,
				        color: "#00c0ef",
				        highlight: "#00c0ef",
				        label: "Iniciado"
				      },
				      {
				        value: todos_evento_desarrollo,
				        color: "#ffb53e",
				        highlight: "#ffb53e",
				        label: "Desarrollo"
				      },
				      {
				        value: todos_evento_finalizado,
				        color: "#1ebfae",
				        highlight: "#1ebfae",
				        label: "Finalizado"
				      },
				       {
				        value: todos_evento_aprobado,
				        color: "#85E61A",
				        highlight: "#85E61A",
				        label: "Aprobado"
				      }

							];
			
	var doughnutData_investigaciones = [
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
	window.myBar = new Chart(chart2).Bar(barChartData_mensual, {
		responsive : true
	});
	var chart3 = document.getElementById("doughnut-chart-estadistica").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData_investigaciones, {responsive : true
	});
	var chart4 = document.getElementById("pie-chart-evento").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData_evento, {responsive : true
	});
	var chart5 = document.getElementById("bar-chart-indicador").getContext("2d");
	window.myBarindicador = new Chart(chart5).Bar(barChartIndicador, {
		responsive : true
	});
	var chart6 = document.getElementById("bar_chart_indicador_eficacia").getContext("2d");
	window.myBarindicador = new Chart(chart6).Bar(barChartIndicador_eficacia, {
		responsive : true
	});
	var chart7 = document.getElementById("bar-chart-indicador-pnf").getContext("2d");
	window.myBarindicador = new Chart(chart7).Bar(barChartData_pnf, {
		responsive : true
	});
	
};