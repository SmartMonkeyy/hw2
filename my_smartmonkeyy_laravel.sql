-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 14, 2022 alle 12:44
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_smartmonkeyy_laravel`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articles`
--

CREATE TABLE `articles` (
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `paragraph` mediumtext DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `total_likes` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articles`
--

INSERT INTO `articles` (`img`, `title`, `heading`, `paragraph`, `type`, `updated_at`, `created_at`, `id`, `total_likes`) VALUES
('crypto_1', 'Cosa succede se non dichiaro le criptovalute?', 'In Italia le criptovalute sono considerate alla stregua di valute estere: quali sono le possibili sanzioni in caso di mancata dichiarazione?', 'Cos’è il quadro RW? In sostanza è un prospetto che il contribuente deve compilare per adempiere agli obblighi di monitoraggio fiscale. Praticamente i residenti in Italia sono obbligati ad inserire in tale sede le attività estere di natura finanziaria. Ma le criptovalute cosa c’entrano con gli investimenti all’estero? Ad oggi un orientamento dell’Agenzia delle Entrate del 2016 considera le criptovalute alla stregua di valute estere, quindi meritevoli di essere inserite nel quadro RW. Per questo motivo il contribuente dovrebbe inserire il tale prospetto il controvalore in euro di tutte le criptovalute detenute nella totalità dei suoi wallet alla data del 31 dicembre. E se non lo fa? Ebbene, l’omessa o irregolare compilazione del quadro RW prevede una sanzione dal 3% al 15% del valore dei possedimenti non dichiarati.', 'crypto', '2022-04-05', '2022-04-05', 1, 2),
('stocks_1', 'Borsa Usa, Wall Street in rialzo su rimbalzo titoli \'growth\', crolla Twitter', '(Reuters) - Wall Street guadagna terreno sulla scia dei titoli \'growth\', al termine di una settimana segnata dai timori per il peggioramento delle prospettive di crescita economica, mentre Twitter scivola dopo che Elon Musk ha sospeso l\'operazione per acquisire la società di social media.', 'Alle ore 17,00 italiane, il Dow Jones balza di 430,77 punti, o dell\'1,36%, a 32.161,07, l\'S&P 500 guadagna 77,69 punti, o l\'1,97%, a 4.007,77, e il Nasdaq scambia in rialzo di 342,89 punti, o del 3,02%, a 11.713,85.\r\n\r\nTutti gli 11 principali settori dell\'S&P scambiano in rialzo, con il settore tech e il settore dei beni di consumo discrezionali che guadagnano rispettivamente il 2,7% e il 3,3%.\r\n\r\nI titoli \'growth\' come Apple (NASDAQ:AAPL), Alphabet (NASDAQ:GOOGL), Amazon.com (NASDAQ:AMZN) e Nvidia, guadagnano tra il 2,5% e il 7,4%, dopo aver perso terreno per buona parte della settimana.\r\n\r\nIl presidente della Fed Jerome Powell ha ribadito ieri di prevedere che la banca centrale aumenterà i tassi di interesse di mezzo punto percentuale in ciscuna delle prossime due riunioni sulla politica monetaria, promettendo tuttavia di essere <<pronti a fare di più>> nel caso i dati andassero nella direzione sbagliata.\r\n\r\nI mercati monetari prezzano al 73% la possibilità di un rialzo di 75 punti base da parte della Fed a giugno. \r\n\r\nTwitter crolla del 9% dopo che il Ceo di Tesla (NASDAQ:TSLA), Elon Musk, ha dichiarato che l\'accordo da 44 miliardi di dollari per l\'acquisizione della società è <<temporaneamente sospeso>>, pur ribadendo il proprio impegno nell\'acquisizione.\r\n\r\nTesla balza del 5,4%.\r\n\r\nRobinhood Markets guadagna il 22% dopo che Samuel Bankman-Fried, Ceo e fondatore della borsa di criptovalute FTX, ha rivelato di avere una partecipazione del 7,6% nella società.\r\n\r\nOccidental Petroleum balza del 6,7% dopo che Berkshire Hathaway, controllata da Warren Buffett, ha rivelato di aver acquistato in settimana ulteriori azioni della major.', 'stocks', '2022-04-05', '2022-04-05', 2, 1),
('business_1', 'Quanti metri quadri si possono costruire in terreni agricoli, boschivi o edificabile', 'Come si calcolano e da cosa dipendono i metri quadri che si possono costruire su terreni agricoli, boschivi e edificabili: cosa prevedono leggi in vigore nel 2022', 'Secondo quanto fissato dalle leggi 2022 aggiornate, su un terreno agricolo, così come boschivo ed edificabile, si possono realizzare costruzioni di dimensioni differenti in base alle zone e ai luoghi di interesse. I metri quadri che si possono costruire su un terreno agricolo dipendono, infatti, dall’indice di edificabilità, o di fabbricabilità, che viene assegnato ad un determinato lotto, che permette di sapere quanti mq si possono costruire su un terreno, in modo da gestire al meglio la densità edilizia di un territorio, e che viene fissato da ogni singolo Comune.\r\n\r\n\r\nQuanti metri quadri si possono costruire in un terreno agricolo, boschivo o edificabile? Le leggi 2022 aggiornate permettono di costruire su un terreno agricolo, boschivo o edificabile case a altre costruzioni, e, per quanto riguarda il terreno agricolo, la possibilità di costruire vale solo per imprenditori agricoli professionali e coltivatori diretti, perché la casa deve essere utilizzata come residenza del proprietario del terreno o per ospitare operai che lavorano nel terreno.\r\n\r\nIn ogni caso, per costruire su un terreno agricolo, boschivo o edificabile in modo legale servono sempre appositi permessi e autorizzazioni. Vediamo ora di quali dimensioni può essere una costruzione da realizzare su un terreno agricolo, boschivo o edificabile. \r\n\r\nQuanti metri quadri si possono costruire in un terreno agricolo\r\nQuanti metri quadri si possono costruire in un terreno boschivo o edificabile\r\nQuanti metri quadri si possono costruire in un terreno agricolo\r\nUn terreno agricolo può diventare edificabile solo se soddisfa specifici requisiti previsti dalla legge, come essere situato all’interno di un’area già edificata, se si trova in un’area con servizi di urbanizzazione presenti come gli acquedotti, fognature etc. In ogni caso, per costruire su un terreno agricolo bisogna rispettare regole precise, a partire dalla grandezza di una stessa costruzione che vi si può realizzare. \r\n\r\nSecondo quanto fissato dalle leggi 2022 aggiornate, su un terreno agricolo si possono realizzare costruzioni di dimensioni differenti in base alle zone e ai luoghi di interesse. I metri quadri che si possono costruire su un terreno agricolo dipendono, infatti, dall’indice di edificabilità, o di fabbricabilità, che viene assegnato ad un determinato lotto, che permette di sapere quanti mq si possono costruire su un terreno, in modo da gestire al meglio la densità edilizia di un territorio, e che viene fissato da ogni singolo Comune.\r\n\r\nDi solito sui terreni agricoli si può costruire una casa di superficie pari al massimo l\'1% del terreno. \r\n\r\nPer esempio, su un terreno agricolo con superficie di un ettaro, è possibile costruire 300 mq di fabbricato, più o meno un’abitazione di 100 mq di superficie considerando un interpiano di 3 metri. \r\n\r\nNel caso di un terreno di 5.000 mq, si può costruire una casa di superficie massima pari a 50 mq.', 'business', '2022-04-05', '2022-04-05', 3, 1),
('music_release', 'I Maneskin mandano dai microfoni di RTL 102.5 un messaggio a Mahmood e Blanco', 'La band ha parlato ampiamente del nuovo singolo, “Supermodel”', 'Oggi in occasione dell’uscita del loro nuovo singolo, Supermodel, i Maneskin sono stati ospiti di The Flight, il programma condotto da Paola Di Benedetto, Matteo Campese e Francesco Taranto su Rtl 102.5. La band ha colto l’occasione per mandare un messaggio a Mahmood e Blanco, rappresentanti italiani dell’Eurovision 2022.\r\n       \r\nIl messaggio per Mahmood e Blanco, loro successori nel rappresentare l’Italia all’Eurovision 2022, manifestazione che è tornata nel nostro paese proprio grazia alla vittoria dei Maneskin, è questo…\r\n\r\n“Spaccate tutto, portatela a casa. In bocca al lupo!”', 'music', '2022-04-05', '2022-04-05', 4, 1),
('crypto_2', 'Un validatore di Terra vorrebbe abbandonare il vecchio network per creare \'una chain totalmente nuova\'\r\n\r\n   ', 'Il CEO di DSRV, importante validatore dell\'ecosistema Terra, ha invitato la community a rifiutare un hard fork e di creare invece una nuova blockchain maggiormente decentralizzata    ', 'Mentre la community discute su quali dovrebbero essere i prossimi passi per l\'ecosistema Terra, il CEO di un validatore in Corea del Sud ritiene che la vecchia blockchain dovrebbe essere chiusa permanentemente.\r\n\r\nJiyun Kim, CEO della società di soluzioni blockchain DSRV, ha pubblicato un pezzo d\'opinione sul sito web dell\'azienda, nel quale invita i validatori dell\'ecosistema Terra a rifiutare un hard fork a favore di una nuova blockchain guidata interamente dalla comunità.\r\n\r\nDSRV gestisce un nodo validatore su Terra, con il 9,36% del potere di voto on-chain: l\'azienda ha sofferto ingenti perdite in seguito al collasso del token LUNA.\r\n\r\nKim ha scritto che la decisione di fermare la blockchain in data 12 maggio non è stata presa alla leggera dalla Terra Validator League, successivamente ribattezzata \"Terra Rebirth League\". Ha tuttavia affermato che team di Terra non ha notificato correttamente l\'evento utilizzando il termine \"Confirm\", per indicare ai validatori che avrebbero dovuto arrestare la chain. Un evento che lo ha fatto sentire \"tradito\"\r\n\r\nL\'8 maggio, un sell-off di UST ha scatenato il panico nel mercato, facendo collassare il prezzo di LUNA da circa 73$ ad appena 0,000000999967$. UST, il cui prezzo dovrebbe essere di 1$ in quanto stablecoin, è attualmente di appena 0,14$.    ', 'crypto', '2022-04-05', '2022-04-05', 5, 2),
('crypto_3', 'Mercato NFT: CRO e la sua etichetta Two Sides investono nei token non fungibili    ', 'Con oltre mezzo decennio di attività, il NFT progressi del mercato nel campo musicale con l\'aggiunta di nuovi partecipanti. Di recente, il rapper tedesco CRO e la sua etichetta discografica Two Sides, hanno investito parte dei suoi fondi nel sito web virtuale \'NFT FUEL\'', 'FUEL, il sito virtuale dedicato al mercato dei token non fungibili, riceve Carlo Waibel, meglio conosciuto come CRO nel mondo artistico. Secondo quanto riferito, l\'interfaccia supporterebbe il cantante tedesco così da poter creare i suoi primi pezzi virtuali con l\'etichetta che lo rappresenta.\r\n\r\nL\'interfaccia NFT ha lanciato il suo primo batch finanziario per marzo 2022. FUEL si è distinto per essere un sito Web per la creazione, l\'amministrazione e la vendita di parti virtuali che funzionano in modo autonomo da OpenSea, la più grande casa d\'aste NFT virtuale sul mercato. Secondo i rapporti, CRO entrerebbe nell\'elenco dei clienti in primo piano in FUEL.\r\n\r\nL\'uomo d\'affari Osojnik David, CEO di Bitcamp, parteciperà anche al creatore di FUEL e Pennington Michael Gumtree.\r\n\r\nGli sviluppi di FUEL sono senza dubbio guidati dal commercio virtuale basato su NFT. Secondo i suoi creatori, il mercato dei non fungibili si adatta al campo musicale. Gli NFT conferiscono a ogni pezzo un valore d\'acquisto, che aumenta il legame tra il fan e l\'artista che ha sviluppato l\'immagine.\r\n\r\nMa l\'agente capo della casa discografica Two Sides ritiene che il campo musicale debba essere rinnovato e il mercato dei non fungibili offre questa opportunità. La casa discografica crede anche che FUEL sia un pezzo cruciale per l\'evoluzione virtuale, ed è per questo che sono felici di usarlo.\r\n\r\nL\' Progetto virtuale FUEL è stato lanciato ufficialmente nel 2021 sotto la guida di Binh Thanh e Barabasi Csongor. È una semplice interfaccia impegnata a spiegare il mercato e l\'accesso a molti fan. Nei mesi precedenti, il commercio dei non fungibili si è aperto a importanti artisti musicali come Snoop Dog ed Eminem.\r\n\r\nIl mercato virtuale ha anche rinnovato il campo sportivo essendo valido per vari giocatori negli Stati Uniti e in altri paesi. Inizialmente, le NFT hanno beneficiato dell\'area artistica, ma i loro sviluppi hanno mostrato che le loro operazioni vanno oltre.   ', 'crypto', '2022-04-05', '2022-04-05', 6, 1),
('business_2', 'What if the Fed can\'t tame inflation?\r\n', 'New York (CNN Business)To badly misquote John Lennon: Everybody\'s talking about inflation, stagflation, capitulation, globalization, stagnation, this-ation, that-ation, -ation, -ation, -ation. All we are saying is please make it end. ', 'Americans view inflation, which is near 40-year highs, as the top problem facing the country today by a very wide margin. No other concern comes close. \r\nMembers of the Federal Reserve, the central bank tasked with deflating inflation from 8.3% to its goal of around 2%, are now raising interest rates in an attempt to cool the economy. \r\nA policy-induced economic slowdown is a painful endeavor: Markets briefly crashed into bear territory Friday and many analysts believe a recession is unavoidable. \r\nThat\'s okay: Medicine doesn\'t have to go down easy if it works fast and it works well. But inflation rates have been increasing sharply since August 2021 and have been out of the normal 2%-to-4% range for a full year. Now a growing distrust in the Fed\'s capabilities and a belief that they\'ve become entangled in a policy error has raised the question: What happens if the Fed can\'t get inflation under control and we\'re stuck in a long term cycle of elevated inflation and recession? \r\nWhy it matters: Record high inflation has created a multi-layered crisis. At its core, it represents a political crisis for the Democrats defending their very tight majority in Congress, and a crisis of faith for economists who misjudged the persistence and significance of rising prices as a \"transitory\" blip and may have missed their chance to get ahead of the curve. \r\nMost importantly, it\'s a crisis for the American wallet. The average price for a gallon of gas has surpassed $4 in all 50 states for the first time ever. Food prices were 9.4% higher in April 2022 than in April 2021, the largest annual increase in 41 years. Americans have seemingly shifted into survival mode: Target and Walmart reported last week that discretionary spending is easing as customers struggle to cover basics like food, fuel and shelter. ', 'business', '2022-04-05', '2022-04-05', 7, 2),
('business_3', 'Mercati appesi anche alla politica in Usa e Cina, ecco cosa può succedere', 'In autunno si misurerà la distanza tra Biden e gli americani e la solidità di Xi Jinping. Ci vorranno un paio d’anni per consolidare un nuovo ordine globale, non è il momento di rincorrere i top e i bottom di mercato', 'Rapido flashback. Gennaio 2017, Trump ha appena vinto e Xi Jinping è accolto a Davos come il garante del libero scambio e del mercato contro il protezionismo del nuovo Presidente USA. Dopo quattro anni di guerra dei dazi, il nuovo inquilino della Casa Bianca Biden non cambia registro, anzi salgono le tensioni tra le due superpotenze sul terreno del primato tecnologico e delle pretese di Pechino su Taiwan. Xi si concentra sulla politica interna, si mette di traverso ai colossi cinesi di Internet ma intanto gli esplodono le bolle immobiliari. Poi arriva il Covid, la Cina torna un esempio globale per come riesce a contrastarlo e a ripartire prima e meglio di tutti. Inizio febbraio 2022, Xi accoglie Putin a Pechino come il partner di un’alleanza ‘senza limiti’, lo zar russo si sente le spalle coperte e qualche settimana dopo invade l’Ucraina, intanto il virus rispunta in Cina costringendo a nuovi lockdown costosissimi per l’economia. A Putin la guerra lampo non riesce e anzi ricompatta l’Occidente che sanziona i russi e rifornisce senza limiti di armi e dollari l’Ucraina, mentre da Pechino arriva solo un debole supporto vocale a Mosca.\r\nUN DOPPIO APPUNTAMENTO\r\nLa costruzione del nuovo ordine mondiale procede per assestamenti tettonici e si avvicina a un doppio appuntamento quasi in contemporanea: le elezioni di midterm a inizio novembre in USA e il Congresso di partito in Cina che dovrebbe tenersi per ottobre. Il gradimento degli americani per Biden è ai minimi, il 20 maggio le rilevazioni Rasmussen lo davano 10 punti sotto Trump 4 anni prima, con il tasso di approvazione al record negativo di -30. A novembre si vota per il Congresso e non per la presidenza, che probabilmente nel 2024 non sarà un match Biden-Trump. I Repubblicani potrebbero riprendersi la Camera e potrebbero emergere nuove leadership in entrambi i partiti. Elon Musk annusa il vento e da quasi padrone di Twitter cambia campo e passa dai Dem ai Rep mentre anche il patron di Amazon Bezos si occupa sempre più di politica. Biden continua a essere la faccia dei Dem ma è un’identificazione che non fa bene al partito, mentre anche su Trump, oltre all’età, pesa l’onta indelebile dell’assalto a Capitol Hill.\r\n', 'business', '2022-04-05', '2022-04-05', 8, 2),
('stocks_2', 'Greggio in rialzo sostenuto da domanda carburante Usa, offerta limitata', 'LONDRA (Reuters) - I prezzi del petrolio sono in rialzo grazie alla domanda di carburante degli Stati Uniti, all\'offerta limitata e a un dollaro leggermente più debole.', 'Alle 12,00 i futures del Brent salgono di 1,42 dollari o dell\'1,24% a 113,94 dollari al barile, mentre i futures del greggio U (WTI) guadagnano 96 centesimi, o lo 0,9%, a 111,55 dollari al barile, estendendo i deboli guadagni della scorsa settimana per entrambi i contratti.\r\n\r\nNegli Stati Uniti la stagione in cui si guida di più inizia tradizionalmente nel fine settimana del Memorial Day, alla fine di maggio, e termina a settembre con il Labor Day.\r\n\r\nGli analisti hanno detto che, nonostante i timori per l\'impennata dei prezzi del carburante che potrebbe intaccare la domanda, i dati sulla mobilità di TomTom e Google (NASDAQ:GOOGL) sono aumentati nelle ultime settimane e hanno mostrato più autisti in strada in luoghi come gli Stati Uniti.\r\n\r\nAnche l\'indebolimento del dollaro statunitense contribuisce a far salire il petrolio, rendendo il greggio più conveniente per gli acquirenti che detengono altre valute.\r\n\r\nTuttavia, i guadagni del mercato sono stati limitati dalle preoccupazioni per gli sforzi della Cina di arginare la diffusione del Covid-19 con i lockdown, nonostante la riapertura di Shanghai, prevista per l\'1 giugno.\r\n\r\nL\'incapacità dell\'Unione europea di raggiungere un accordo definitivo per l\'embargo sul petrolio russo in seguito all\'invasione dell\'Ucraina, che Mosca definisce \"operazione speciale\", ha impedito ai prezzi del petrolio di crescere ulteriormente.', 'stocks', '2022-04-05', '2022-04-05', 9, 1),
('stocks_3', 'Forex, dollaro perde terreno, Cina riaccende speranze crescita\r\n', 'SINGAPORE (Reuters) - Il dollaro perde terreno, con gli investitori che tagliano le scommesse su ulteriori guadagni della divisa Usa legati al rialzo dei tassi, mentre tornano a nutrire speranze sulla crescita globale con l\'allentamento dei lockdown in Cina.', 'Migliora la performance delle valute a più alto rendimento. Il dollaro australiano guadagna circa lo 0,9% nel cross con il biglietto verde.\r\n\r\n\"E\' un inizio di settimana ragionevolmente positivo\", commenta Ray Attrill di National Australia Bank. \"Il dollaro Usa sembra, al momento, perdere lo slancio al rialzo\".\r\n\r\nSale l\'euro, a +0,35% contro il dollaro che a sua volta perde intorno allo 0,2% nel confronto con lo yen.\r\n\r\nL\'indice del biglietto verde - a metà maggio in rialzo di circa il 16% nei dodici mesi, ai massimi da vent\'anni - flette dello 0,54% contro un paniere di sei valute.\r\n\r\nShanghai sta uscendo dall\'isolamento e la sorpresa del taglio dei tassi in Cina la settimana scorsa è stata presa come un segnale del fatto che le autorità forniranno supporto alla ripresa.\r\n\r\nPer lo yuan la scorsa settimana è stata la migliore da fine 2020.\r\n\r\n9:20\r\n\r\nCAMBIO RIC BID ASK CHIUSURA\r\n\r\nEURO/DOLLARO 1,0595 1,0599 1,0560\r\n\r\nDOLLARO/YEN 127,6300 127,6600 127,8500\r\n\r\nEURO/YEN 135,2500 135,2900 135,0300\r\n\r\nEURO/STERLINA 0,8431 0,8436 0,8457\r\n\r\nORO SPOT 1.853,90 1.854,80 1845,68\r\n\r\nNOME INDICE RIC VALORE VAR. % CHIUSURA\r\n\r\nINDICE DOLLARO 102,5890 -0,54 103,1500', 'stocks', '2022-04-05', '2022-04-05', 10, 1),
('music_release', 'Kendrick Lamar\'s new album breaks 2022 record for biggest first-week debut\r\n', 'The Alright rapper had the biggest album debut of any artist this year, with his fifth studio release earning record sales numbers, reports Variety.', 'Mr. Morale is the rapper\'s first album in five years, and his fourth to reach No. 1 on the Billboard 200 album chart.\r\n\r\nThe release earned 295,500 equivalent album units in the United States from its release on 13 May to the week\'s end on 19 May, according to Luminate. Around 35,000 digital album sales were processed during that week.\r\n\r\nKendrick\'s record is now the highest-selling album in its first week of release for 2022, and the highest since Adele\'s 30 debuted in November last year.\r\n\r\nMr. Morale was second-biggest on streaming, with Bad Bunny\'s Un Verano Sin Ti still holding the record for the most-streamed album in its debut week. Kendrick\'s record earned 343.02 million on-demand streams.\r\n\r\nVariety attributes the difference to Un Verano Sin Ti\'s higher track count, with 23 songs on the album compared to Mr. Morale\'s 18.\r\n\r\nMr. Morale & the Big Steppers will be released on physical CD on 27 May.', 'music', '2022-04-05', '2022-04-05', 11, 2),
('news', '\r\nFedez e J-Ax annunciano un nuovo concerto insieme per beneficenza\r\n', 'Giù il sipario sul nuovo progetto sul nuovo progetto benefico di Fedez e J-Ax', 'I due rapper hanno svelato tutti i dettagli sul grande regalo che hanno preparato per la loro città, Milano, in una conferenza stampa tenuta nella mattinata del 23 maggio, a poche ore dall’annuncio della pace fatta. Non sarà un singolo a unirli, stavolta, bensì un nuovo concerto insieme, gratuito, proprio nella città che gli ha dato i natali. Scopriamo insieme la data e tutti i dettagli su questa notizia che ha fatto esplodere la gioia tra i fan.\r\n\r\nFedez e J-Ax in concerto insieme\r\nDa San Siro a Piazza del Duomo, da un simbolo di Milano a un altro. Dalla “finale” a Love Mi. Fedez e J-Ax tornano insieme e lo fanno riprendendo da dove si erano interrotti: da un grande concerto nella loro città, Milano. Stavolta però con scopi benefici.\r\n\r\nA motivarli è stata infatti la voglia di raccogliere fondi per Together to Go, una fondazione specializzata nella riabilitazione di bambini e bambine con problematiche neurologiche complesse.\r\n\r\nL’annuncio è stato dato in conferenza stampa al Palazzo Reale di Milano dagli stessi rapper, che hanno svelato tutti i dettagli su questo nuovo evento. La data da segnare con un circoletto rosso sul calendario è il 28 giugno, alle ore 18. I biglietti? Non serviranno. L’evento è infatti assolutamente gratuito, come svelato in questa attesa conferenza.', 'music', '2022-04-05', '2022-04-05', 12, 2),
('Robbie-Hawkins-Robbie-Robertson-The-Band', 'È morto Ronnie Hawkins, il ricordo di Robbie Robertson', 'La storia di The Band, gruppo chiave del rock americano legato alle radici che ha condiviso un pezzo di strada con Bob Dylan, è iniziata con Hawkins. «Era il nostro mentore»', 'Senza Ronnie Hawkins, grande musicista morto ieri a 87 anni d’età, forse non ci sarebbero stati gli Hawks come li abbiamo conosciuti. E dagli Hawks è nata The Band, la formazione che ha segnato il rock americano legato alle radici e che ha condiviso un pezzo di strada con Bob Dylan negli anni ’60 e ’70.\r\n\r\nGli anni di Ronnie James Dio con i Black Sabbath diventano un libro\r\nL\'ologramma di Ronnie James Dio va in tour\r\nQuando Robbie Robertson, membro chiave di The Band e musicista dalla lunga storia, ha saputo della notizia ha avuto «un tuffo al cuore». Lo racconta in un questo scritto in cui ricorda Hawkins come mentore del suo gruppo, che è nato proprio per accompagnare The Hawk, Il Falco, com’era noto il musicista scomparso ieri. «Ci ha insegnato le regole sulla strada».\r\n\r\nHo avuto un tuffo al cuore quando ho letto che The Hawk era volato via. La storia di The Band è iniziata con Ronnie Hawkins. Era il nostro mentore. Ci ha insegnato le regole della strada.\r\n\r\nÈ stato lui a portarmi dal Canada giù al Delta del Mississippi quando avevo 16 anni. Ha registrato due mie canzoni, pensava avessi talento. Mi ha fatto provare a suonare chitarra e basso, ma c’era un problema: ero troppo giovane per suonare nei club, non avevo alcuna esperienza, non ero ancora un musicista sufficientemente bravo e non c’erano canadesi nei gruppi Southern rock e rock’n’roll dell’epoca. Mi sono esercitato fino a consumarmi le dita e alla fine, contro ogni previsione, mi ha preso.\r\n\r\nRon era orgoglioso di avere musicisti di alto livello nel suo gruppo. Siamo stato io e Levon Helm, il suo batterista negli Hawks, a convincerlo a ingaggiare Rick Danko a basso e voce, Richard Manuel a piano e voce e Garth Hudson a organo e sax. La combinazione di questi musicisti era qualcosa di magico.\r\n\r\nRonnie è stato il padrino, l’uomo che ha fatto sì che tutto ciò accadesse. Ci faceva provare di continuo fino a notte fonda. Non ci piaceva, ma facendolo siano diventati sempre più bravi. Era il nostro obiettivo, che ne fossimo consci o meno.\r\n\r\nDopo aver lasciato Ron ed esserci messi in proprio, abbiamo iniziato a suonare con Bob Dylan. Gli Hawks sono diventati The Band e il resto come si suol dire è storia.\r\n\r\nMa tutto è iniziato con Ronnie Hawkins. Non era solo un grande artista e un performer e bandleader eccezionale. Aveva anche un suo senso dell’umorismo ineguagliabile. Era spassoso e unico. Sì, Dio ne ha fatto uno solo del suo stampo. Vivrà per sempre nei nostri cuori.\r\n\r\nLe mie più sentite condoglianze alla famiglia. Che sia benedetta la sua anima.', 'music', '2022-05-31', '2022-05-31', 16, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `likes`
--

CREATE TABLE `likes` (
  `user` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `likes`
--

INSERT INTO `likes` (`user`, `post`, `updated_at`, `created_at`) VALUES
(2, 1, '2022-04-30', '2022-04-30'),
(2, 2, '2022-06-14', '2022-06-14'),
(2, 3, '2022-06-14', '2022-06-14'),
(2, 4, '2022-06-14', '2022-06-14'),
(2, 5, '2022-06-14', '2022-06-14'),
(2, 6, '2022-06-14', '2022-06-14'),
(2, 7, '2022-04-30', '2022-04-30'),
(2, 8, '2022-06-14', '2022-06-14'),
(2, 9, '2022-06-14', '2022-06-14'),
(2, 10, '2022-05-31', '2022-05-31'),
(2, 11, '2022-05-31', '2022-05-31'),
(2, 12, '2022-05-31', '2022-05-31'),
(2, 16, '2022-05-31', '2022-05-31'),
(9, 1, '2022-05-31', '2022-05-31'),
(9, 5, '2022-05-31', '2022-05-31'),
(9, 7, '2022-05-31', '2022-05-31'),
(9, 8, '2022-05-31', '2022-05-31'),
(9, 11, '2022-05-31', '2022-05-31'),
(9, 12, '2022-05-31', '2022-05-31');

--
-- Trigger `likes`
--
DELIMITER $$
CREATE TRIGGER `likes_trigger` AFTER INSERT ON `likes` FOR EACH ROW BEGIN
UPDATE articles 
SET total_likes = total_likes + 1
WHERE id = new.post;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `unlikes_trigger` AFTER DELETE ON `likes` FOR EACH ROW BEGIN
UPDATE articles 
SET total_likes = total_likes - 1
WHERE id = old.post;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` int(11) UNSIGNED DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `updated_at`, `created_at`) VALUES
(1, 'root', 'e5afe57f631062d1de26481c1ecc24dad9b22e8429f2eda683cfcf5857d50268', 57237, '2022-05-01', '2022-05-01'),
(2, 'mrnickaa', '21ebaaae0476de9649b3df79b217b772dff99079c91b7d091b4ee1d4b45b2832', 78172, '2022-05-01', '2022-05-01'),
(9, 'luigi', 'be9be331602dd6d10be3c47f105317fc125820c15f95055f10e0c530f6d0d01f', 73248, '2022-05-31', '2022-05-31');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`user`,`post`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
