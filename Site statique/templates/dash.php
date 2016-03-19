
<?php
try {
$VALEUR_hote='localhost';
$VALEUR_nom_bd='activdiab';
$VALEUR_user='root';
$VALEUR_mot_de_passe='Azerty01';
$connexion = new PDO('mysql:host='.$VALEUR_hote.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
}
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
}

?>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe <b class="caret"></b></a>
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
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!--<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Tableau de bord</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tableau de bord <small>Statistics Overview</small>
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
				markerSize:8,
				dataPoints: [

				]
			}
			
			]
		});

chart.render();

/****************

RANDOM VALUES

****************/



var tmp_data = [];
var tmp_time = new Date().getTime();

<?php
$resultats=$connexion->query("SELECT * FROM `rapport`");
$resultats->setFetchMode(PDO::FETCH_OBJ);
$i = 0;
while( $resultat = $resultats->fetch() )
{
        //echo 'Utilisateur : '.$resultat->glycemie.'<br>';
        //echo 'Utilisateur : '.$resultat->uniteInsuline.'<br>';
	   echo "chart.options.data[0].dataPoints[".$i."] = { y: new Date('".$resultat->tmpstamp."'), x: ".$resultat->glycemie."};";

	//   echo 'if (chart.options.data[0].y < 0.5) {chart.options.data[0].dataPoints['.$i.'] =  "red";}';

	   $i++;
}
$resultats->closeCursor();

?>

//chart.options.data[0].dataPoints = tmp_data;
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
<button type="button" class="btn " onclick="next(chart);">Suivant</button>
<button type="button" class="btn " onclick="previous(chart);">Précédent</button>
</div>
	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>

</body>

</html>
