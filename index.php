
<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Vädersjuk</title>

  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900,300" rel="stylesheet" type="text/css">

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
      <div class="eight columns" style="margin-top: 5%">
        <h1>Är du vädersjuk?</h1>

<!-- TEXTEN HEJ –––––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <h6>Under ett år hade Visby mest sol i hela Sverige och Göteborg hade överlägset mest regn. Påverkar soltimmarna och nedbörden antalet sjukfall som respektive stad har? Nio städer har valts ut för att undersöka sambandet mellan vädret och antalet sjukfall. </h6>

      </div>

      <div class="four columns" style="margin-top: 5%">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <!-- CHART START -->
        <div id="container" style="width:100%; height:400px;"></div>
        <script>
        $(function () {
          //Theme here:
          Highcharts.setOptions({
              colors: ['#8bb0cb', '#394d7e', '#edc302', '#DDDF00', '#24CBE5',
              '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
              chart: {
                  backgroundColor: {
                      linearGradient: [0, 0, 500, 500],
                      stops: [
                          [0, 'rgb(255, 255, 255)'],
                          [1, 'rgb(255, 255, 255)']
                      ]
                  },
                  borderWidth: 0,
                  plotBackgroundColor: 'rgba(255, 255, 255, .9)',
                  plotShadow: false,
                  plotBorderWidth: 1
              },
              subtitle: {
                  style: {
                  }
              },
              xAxis: {
                  gridLineWidth: 0,
                  lineColor: '#ddd',
                  tickColor: '#ddd',
                  labels: {
                      style: {

                      }
                  },
                  title: {
                      style: {

                      }
                  }
              },
              yAxis: {
                  alternateGridColor: null,
                  minorTickInterval: 'auto',
                  lineColor: '#fff',
                  lineWidth: 0,
                  tickWidth: 0,
                  tickColor: '#fff',
                  labels: {
                      style: {

                      }
                  },
                  title: {
                      style: {
                          color: '#ddd',
                      }
                  }
              },
              legend: {
                  itemStyle: {

                  },
                  itemHoverStyle: {
                      color: '#039'
                  },
                  itemHiddenStyle: {
                      color: 'gray'
                  }
              },
              credits: {
                  style: {
                      right: '10px'
                  }
              },
              labels: {
                  style: {
                      color: '#99b'
                  }
              }
          });

          //Chart:
            $('#container').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    text: ' '
                },
                subtitle: {
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

    <div class="row">
      <div class="eight columns" style="margin-top: 5%">

        <p>Det finns många anledningar till att människor blir sjukskrivna.
          Det finns också skillnader i sjukskrivningsstatistiken. Bakgrunden till skillnaderna är komplex, men vi vet några saker som påverkar. Vilket kön du har, vilket yrke du har och var du bor påverkar.
      Vädersjuk visar om även vädret där du bor kan påverka hur du mår. </p>
          Det finns också skillnader i sjukskrivningsstatistiken. Bakgrunden till skillnaderna är komplex, men vi vet några saker som påverkar. Vilket kön du har, vilket yrke du har och var du bor påverkar.
      Vädersjuk.se visar om även vädret där du bor kan påverka hur du mår. </p>
        <p>
        <b>Sjukfall</b> hämtas från Försäkringskassans data över pågående sjukfall. Du räknas som ett pågående sjukfall om du har varit sjukskriven i minst 14 dagar och är mellan 16-65 år. Datan summeras en gång per år. I diagrammet visas sjukfallen per 10 000 invånare i respektive kommun som städerna ligger i.
        </p>
        <p>

<b>Nederbörd</b> hämtas från SMHI:s väderstationer i samma kommuner som städerna. I diagrammet visas nederbörd i mm per år.
</p>
<p>

<b>Soltimmar</b> är från SMHI:s väderstationer som mäter sol och ligger i samma kommun som städerna. Soltimmar visar antalet soltimmar per år. SMHI mäter solsken på 18 platser i Sverige.
</p>

<p>Städerna har valts efter närhet till stationer som mäter både nederbörd och sol.  All data är från år 2014. Datakällorna som har använts är SMHI, SCB och Försäkringskassan. </p>

<h6>Om vädersjuk.se</h6>

Vädersjuk.se skapades av <a href="https://se.linkedin.com/in/sasvensson">Sandra Svensson</a>, <a href="https://twitter.com/viktoriaasp">Viktoria Asp</a> och <a href="https://se.linkedin.com/in/hannahwillen">Hannah Willén</a> under <a href="http://www.hackforsweden.se">Hack for Sweden 2016</a>.
</p>

      </div>

      <div class="four columns" style="margin-top: 5%">
      </div>
    </div>

<div class="row">
    <div class="four columns">
      <img class"u-max-full-width" src="images/gras.jpg">
    </div>
    <div class="four columns">
      <img class"u-max-full-width" src="images/snow.jpg">
    </div>
    <div class="four columns">
      <img class"u-max-full-width" src="images/sun.jpg">
    </div>
</div>

<script src="bower_components/chartist/dist/chartist.min.js"></script>
<script src="js/charttest.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
