<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Solsting</title>

  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,900,300" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="bower_components/chartist/dist/chartist.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Scripts -->
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>

  <!--Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75056002-1', 'auto');
  ga('send', 'pageview');
  </script>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="twelve columns" style="margin-top: 10%">
        <h1>Är du vädersjuk?</h1>
        <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
      </div>
    </div>

<!-- CHARTIST CHART IS HERE:
    <div class="row">
      <div class="twelve columns ct-chart">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <p>
          Next one from highcharts:
        </p>
      </div>
    </div>
-->

    <div class="row">
      <div class="twelve columns">
        <!-- CHART START -->
        <div id="container" style="width:100%; height:400px;"></div>
        <script>
        $(function () {
            $('#container').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    text: ' '
                },
                subtitle: {
                    text: 'Källor: SMHI, SCB & Försäkringskassan'
                },
                xAxis: [{
                    categories: ['Göteborg', 'Karlskrona', 'Karlstad', 'Luleå', 'Stockholm', 'Umeå', 'Visby', 'Växjö', 'Östersund'],
                    crosshair: true
                }],
                yAxis: [{ // Primary yAxis SOLTIMMAR
                    labels: {
                        format: '{value} h',
                        style: {
                            color: Highcharts.getOptions().colors[2]
                        }
                    },
                    title: {
                        text: 'Soltimmar',
                        style: {
                            color: Highcharts.getOptions().colors[2]
                        }
                    },
                    opposite: true

                }, { // Secondary yAxis SJUKDAGAR
                    gridLineWidth: 0,
                    title: {
                        text: 'Sjukfall per 10 000 medborgare',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        format: '{value} ',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    }

                }, { // Tertiary yAxis NEDERBÖRD
                    gridLineWidth: 0,
                    title: {
                        text: 'Nederbörd',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    labels: {
                        format: '{value} mm',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    opposite: true
                }],
                tooltip: {
                    shared: true
                },
                legend: {
                    layout: 'vertical',
                    align: 'left',
                    x: 80,
                    verticalAlign: 'top',
                    y: 55,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                },
                series: [{
                    name: 'Sjukfall',
                    type: 'column',
                    yAxis: 1,
                    data: [288, 227, 249, 266, 230, 306, 276, 259, 403],
                    tooltip: {
                        valueSuffix: ' '
                    }

                }, {
                    name: 'Nederbörd',
                    type: 'spline',
                    yAxis: 2,
                    data: [1095, 700, 979, 361, 614, 541, 540, 732, 505],
                    marker: {
                        enabled: false
                    },
                    dashStyle: 'shortdot',
                    tooltip: {
                        valueSuffix: ' mm'
                    }

                }, {
                    name: 'Soltimmar',
                    type: 'spline',
                    data: [1835, 2121, 1986, 2071, 1805, 1871, 2107, 1612, 1790],
                    tooltip: {
                        valueSuffix: ' h'
                    }
                }]
            });
        });

        </script>
      </div>
    </div>

</div>

<script src="bower_components/chartist/dist/chartist.min.js"></script>
<script src="js/charttest.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>