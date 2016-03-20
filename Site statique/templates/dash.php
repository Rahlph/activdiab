<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/highcharts/highcharts.js"></script>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Activ'Diab</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hugo <b
                    class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Tableau de bord
                    <small>Statistics Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Tableau de bord
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default center-block">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Glycémie</h3>
                    </div>
                    <div class="panel-body center-block">
                        <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>
                        <script type="text/javascript" src="./assets/script/jquery.canvasjs.min.js"></script>
                        <script type="text/javascript">


                            function getWeek(el)
                            {
                                el.options.axisX.minimum = new Date(new Date().getTime() - 7 * 24 * 60 * 60 * 1000);

                                el.options.axisX.maximum = new Date().getTime();
                                el.options.axisX.title =  "Temps (semaine)";
                                el.options.axisX.intervalType = "day";
                                el.render();
                            }

                            function getMonth(el)
                            {
                                el.options.axisX.minimum = new Date(new Date().getTime() - 4*7 * 24 * 60 * 60 * 1000);

                                el.options.axisX.maximum = new Date().getTime();
                                el.options.axisX.title =  "Temps (mois)";
                                el.options.axisX.intervalType = "week";
                                el.render();
                            }

                            function getDay(el)
                            {
                                el.options.axisX.minimum = new Date(new Date().getTime() - 24 * 60 * 60 * 1000);

                                el.options.axisX.maximum = new Date().getTime();
                                el.options.axisX.title =  "Temps (jour)";
                                el.options.axisX.intervalType = "day";
                                el.render();
                            }
                            var chart = "";
                            window.onload = function () {
                                chart = new CanvasJS.Chart("chartContainer",
                                    {
                                        title: {
                                            text: "Evolution de la glycémie"
                                        },
                                        animationEnabled: true,
                                        axisX:{
                                            valueFormatString: "DD-MMM" ,
                                            //interval: 1,
                                            title: "Temps (semaine)",
                                            intervalType: "week",
                                            labelAngle: -50,
                                            labelFontColor: "rgb(0,75,141)",
											labelFontSize: 20,
                                            minimum: new Date(2012,06,10),
                                            maximum: new Date(2012,07,17),
                                        },
                                        axisY: {
                                            title: "Glycémie (g/L)",
                                            interlacedColor: "#F0FFFF",
                                            tickColor: "azure",
                                            titleFontColor: "rgb(0,75,141)",
                                            //valueFormatString: "#M,,.",
                                            //interval: 100000000
                                        },
                                        data: [
                                            {
                                                indexLabelFontColor: "darkSlateGray",
                                                name: 'views',
                                                type: "area",
                                                color: "rgba(0,75,141,0.7)",
                                                markerSize:10,
                                                dataPoints: [

                                                ]
                                            }

                                        ]
                                    });
var chart2 = new CanvasJS.Chart("chartContainer2",
		{
			theme: "theme3",
                        animationEnabled: true,
			title:{
				text: "Objectif calorique quotidien",
				fontSize: 30
			},
			toolTip: {
				shared: true
			},			
			axisY: {
				title: "kilocalorie",
                                            minimum: 0,
                                            maximum: 127500,
			},
			axisY2: {
				title: "Millier de pas",
				
                                            minimum: 0,
                                            maximum: 15,
			},		
			data: [ 
			{
				type: "column",	
				name: "Activité réalisée",
				legendText: "Activité réalisée",
				showInLegend: true, 
				dataPoints:[
				{label: "Lundi 14", y: 87571},
				{label: "Mardi 15", y: 95856},
				{label: "Mercredi 16", y: 78742},
				{label: "Jeudi 17", y: 92258},
				{label: "Vendredi 18", y: 83472},
				{label: "Samedi 19", y: 88074},
				{label: "Dimanche 20", y: 98023}

				]
			},
			{
				type: "column",	
				name: "Objectif calorifique minimum recommandé (Poids : 85kg)",
				legendText: "Objectif 10 000 Pas",
				axisYType: "secondary",
				                              color: "#00FF00",
				showInLegend: true,
				dataPoints:[
				{label: "Lundi 14", y: 10},
				{label: "Mardi 15", y: 10},
				{label: "Mercredi 16", y: 10},
				{label: "Jeudi 17", y: 10},
				{label: "Vendredi 18", y: 10},
				{label: "Samedi 19", y: 10},
				{label: "Dimanche 20", y: 10}


				]
			}
			
			],
          legend:{
            cursor:"pointer",
            itemclick: function(e){
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              	e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
            	chart2.render();
            }
          },
        });

chart.render();


chart2.render();


                                chart.render();

                                /****************

                                 RANDOM VALUES

                                 ****************/



                                var tmp_data = [];
                                var tmp_time = new Date().getTime();
								var MAX_POINT = 1400;
								var a = 0.6;
								var b = 0.85;
                                for (var i = 0; i < MAX_POINT;i++)
                                {


                                    tmp_data[i] = { x: new Date(tmp_time - i * 0.5 * 24 * 60 * 60 * 1000), y: (Math.random() * a) + b};
									
									if (i > 75)
									{
										a = 2;
										b = 0.5;
										
									}
									
																		if (i > 150)
									{
										a = 1.5;
										b = 0.35;
										
									}
									
                                   // tmp_data[i] = { x: new Date(tmp_time - i * 0.5 * 24 * 60 * 60 * 1000), y: Math.cos(5*(MAX_POINT-i))*Math.exp(-0.3*(MAX_POINT-i))+1};
                                    if (tmp_data[i].y < 0.75)
                                    {
                                        tmp_data[i].markerColor =  "red";
                                        tmp_data[i].indexLabel =  "!";
//tmp_data[i].markerType = "triangle";
                                    }
									
								 if (tmp_data[i].y > 1.4)
                                    {
                                        tmp_data[i].markerColor =  "yellow";
                                        tmp_data[i].indexLabel =  "!";
//tmp_data[i].markerType = "triangle";
                                    }
									
//chart.options.data.dataPoints[i] = { x: new Date(tmp_time - i * 7 * 24 * 60 * 60 * 1000), y: Math.floor((Math.random() * 3)) + 1};
//tmp_time = new Date(tmp_time.getTime() - 7 * 24 * 60 * 60 * 1000);

                                }
//tmp_data.reverse();
                                chart.options.data[0].dataPoints = tmp_data;
                                /*
                                 var firstDay = new Date(chart.options.axisX.minimum);
                                 var nextWeek = new Date(firstDay.getTime() + 4 * 7 * 24 * 60 * 60 * 1000);
                                 chart.options.axisX.minimum = firstDay;
                                 chart.options.axisX.maximum = nextWeek;
                                 */

                                chart.options.axisX.minimum =Date(new Date().getTime() - 100 * 7 * 24 * 60 * 60 * 1000);

                                chart.options.axisX.maximum = new Date().getTime();

                                chart.options.axisY.minimum = 0;
                                chart.options.axisY.maximum = 5;
                                chart.render();


                                /*******************

                                 Select range

                                 *******************/

//chart.options.axisX.minimum = new Date(new Date().getTime() - 7 * 24 * 60 * 60 * 1000);
                                /*
                                 chart.options.axisX.maximum = new Date().getTime();
                                 chart.options.axisX.title =  "Temps (semaine)";
                                 chart.options.axisX.intervalType = "day";*/
                                getWeek(chart);

                            }

                            function toTimestamp(strDate){
                                var datum = Date.parse(strDate);
                                return datum/1000;
                            }
                            function next(e)
                            {
                                var tmp = e.options.axisX.maximum ;
                                var tmp2 = e.options.axisX.minimum;
                                e.options.axisX.minimum -= tmp-tmp2;
                                e.options.axisX.maximum -= tmp-tmp2;
                                tmp = e.options.axisX.maximum ;
                                tmp2 = e.options.axisX.minimum;
                                e.options.axisX.minimum += tmp-tmp2;
                                e.options.axisX.maximum += tmp-tmp2;
                                e.options.axisX.minimum += tmp-tmp2;
                                e.options.axisX.maximum += tmp-tmp2;
                                e.render();
                            }
                            function previous(e)
                            {
                                var tmp = e.options.axisX.maximum ;
                                var tmp2 = e.options.axisX.minimum;
                                e.options.axisX.minimum -= tmp-tmp2;
                                e.options.axisX.maximum -= tmp-tmp2;
                                e.render();
                            }
                        </script>
                        <div class="center-block">
                            <button type="button" class="btn" onclick="getDay(chart);">Jour</button>
                            <button type="button" class="btn" onclick="return getWeek(chart);">Semaine</button>
                            <button type="button" class="btn " onclick="return getMonth(chart);">Mois</button>
                            <button type="button" class="btn " style="margin-left: 20px" onclick="previous(chart);">Précédent</button>
                            <button type="button" class="btn " onclick="next(chart);">Suivant</button>
                        </div>
                        <div id="chartContainer" style="height: 300px; width: 100%;">
                        </div>
                        <div id="chartContainer2" style="height: 300px; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>