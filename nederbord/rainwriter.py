import csv
import os.path

csvlist = ["goteborg.csv", "karlskrona.csv", "karlstad.csv", "lulea.csv", "ostersund.csv", "umea.csv", "vaxjo.csv", "visby.csv", "stockholm.csv"]

filehandle = open(os.path.dirname(__file__) + '/../weather.js')

filehandle.write("Nederbord")

for thing in csvlist:
    raincount = 0
    fname = thing
    city = fname.split(".")
    city = city[0]

    with open(fname, 'rb') as csvfile:
        reader = csv.reader(csvfile)
        for line in reader:
            line = ', '.join(line)
            if not line.startswith('2014-') : continue
            pieces = line.split(";")
            rain = pieces[3]
            raincount += float(rain)
    
    writethis = city, round(raincount)
    writethis = str(writethis)
    filehandle.write(writethis)
    filehandle.write("\n")