new Chartist.Line('.ct-chart', {
  labels: ['Falun', 'Gävle', 'Göteborg', 'Halmstad', 'Härnosand', 'Jönköping', 'Kalmar', 'Karlskrona', 'Karlstad', 'Linköping', 'Luleå', 'Malmö', 'Nyköping', 'Stockholm', 'Umeå', 'Uppsala', 'Visby', 'Västerås', 'Växjö', 'Örebro', 'Östersund'],
  series: [
    [12, 9, 7, 8, 5],
    [2, 1, 3.5, 7, 3],
    [1, 3, 4, 5, 6],
    [7, 5, 43, 3, 7]
  ]
}, {
  fullWidth: true,
  chartPadding: {
    right: 40
  }
});
