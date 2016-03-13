import csv

fname = "sickcount.csv"
name = fname.split(".")
name = name[0]

with open(fname, 'rb') as csvfile:
    reader = csv.reader(csvfile)
    for line in reader:
        line = '; '.join(line)
        if line.startswith(("0780", "0180", "0780", "0980", "1080", "1480", "1780", "2380", "2480", "2580")):
            pieces = line.split(";")
            city = pieces[0]
            number = pieces[3]
            print city, number

