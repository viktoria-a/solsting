import csv

csvlist = ["goteborg.csv", "karlskrona.csv", "karlstad.csv", "lulea.csv", "ostersund.csv", "umea.csv", "vaxjo.csv", "visby.csv", "stockholm.csv"]

for thing in csvlist:
    suncount = 0
    fname = thing
    city = fname.split(".")
    city = city[0]

    with open(fname, 'rb') as csvfile:
        reader = csv.reader(csvfile)
        for line in reader:
            line = ', '.join(line)
            if not line.startswith('2014-') : continue
            pieces = line.split(";")
            sun = pieces[2]
            suncount += float(sun)
            sunhours = suncount / 3600
    
    print city, "sunhours =", round(sunhours)

