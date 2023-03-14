
filename = input("Unesite ime datoteke:")
total_confidence = 0
count = 0
if filename == 'mbox':
    fhand = open('mbox.txt')
elif filename == 'mbox-short':
    fhand = open('mbox-short.txt')
else:
    print("Datoteka nije pronadjena!")
        
for line in fhand:

    if line.startswith("X-DSPAM-Confidence:"):
        confidence = float(line.split(":")[1])
        total_confidence += confidence
        count += 1

        if count > 0:
            average_confidence = total_confidence / count
            print(f"Average X-DSPAM-Confidence: {average_confidence}")
        else:
            print("Nije pronađena niti jedna linija s pouzdanošću.")

fhand.close()            
