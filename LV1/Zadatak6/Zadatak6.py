# otvaranje datoteke SMSSpamCollection.txt
with open('SMSSpamCollection.txt', 'r') as file:
    # inicijalizacija brojaca
    ham_word_count = 0
    ham_message_count = 0
    spam_word_count = 0
    spam_message_count = 0
    exclamation_count = 0
    
    # čitanje datoteke liniju po liniju
    for line in file:
        # dijeljenje linije na labelu i tekst
        label, text = line.split('\t')
        
        # računanje broja riječi u tekstu
        word_count = len(text.split())
        
        # provjera tipa poruke i dodavanje u odgovarajući brojač
        if label == 'ham':
            ham_word_count += word_count
            ham_message_count += 1
        else:
            spam_word_count += word_count
            spam_message_count += 1
            
            # provjera je li poruka završava uskličnikom
            if text.strip().endswith('!'):
                exclamation_count += 1

    # ispis prosječnog broja riječi po tipu poruke
    print("Prosječan broj riječi u ham porukama: {:.2f}".format(ham_word_count/ham_message_count))
    print("Prosječan broj riječi u spam porukama: {:.2f}".format(spam_word_count/spam_message_count))

    # ispis broja spam poruka koje završavaju uskličnikom
    print("Broj spam poruka koje završavaju uskličnikom: {}".format(exclamation_count))