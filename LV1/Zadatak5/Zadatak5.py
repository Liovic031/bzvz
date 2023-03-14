# otvaramo datoteku song.txt u načinu čitanja
try:
    with open("song.txt", 'r') as file:
        # stvaramo prazan rječnik
        word_count = {}

        # prolazimo kroz sve linije u datoteci
        for line in file:
            # razbijamo liniju u riječi
            words = line.split()

            # prolazimo kroz sve riječi u liniji
            for word in words:
                # povećavamo broj pojavljivanja riječi u rječniku
                if word in word_count:
                    word_count[word] += 1
                else:
                    word_count[word] = 1

        # računamo broj riječi koje se pojavljuju samo jednom
        count = 0
        for word in word_count:
            if word_count[word] == 1:
                count += 1
                print(word)

        print(f"Broj riječi koje se pojavljuju samo jednom:", count)
except FileNotFoundError:
    print("Datoteka nije pronađena.")