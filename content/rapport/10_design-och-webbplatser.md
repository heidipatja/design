---
---
Responsivitet
=======================

I rapporten har jag tittat på tre olika bildrika webbplatser och hur de jobbar med responsivitet på bilder.


Urval
-----------------------
Jag valde att titta på bröllopsfotografers webbplatser eftersom jag antog att dessa skulle ha stort fokus på att visa upp bildmaterial. Urvalet gjordes genom att googla på "bröllopsfotograf" och välja ut tre webbplatser som hade bilder av olika storlekar på sidan, detta för att enklare kunna göra jämförelser.

De webbplatser som undersöktes var:

- [Hanna Keiser](https://hannakeiser.se/brollopsfotograf-linkoping/)  
- [Emerald Weddings](https://elcada.se/)
- [Frida Furberg](https://fridafurberg.se/)



Metod
-----------------------

Eftersom vissa av bröllopsfotograferna erbjöd flera olika fotograftjänster, valde jag att titta på respektive bröllopsfotografsida. Det innebär att jag ibland har tittat på fotografens startsida och ibland, om även andra tjänster ges, på en undersida. Dock är dessa jämförbara i utseende och karaktär. På varje fotografs sida har jag tittat på tre bilder av olika storlekar för att se hur de beter sig responsivt, hur det sker rent tekniskt och eventuella effekter som det får. Jag valde att titta på en bild i fullbredd, en med ca 1/2 bredd och en med ca 1/3 bredd på samtliga webbplatser.

Jag använde en Chrome Extension, [Full Page Screen Capture](https://mrcoles.com/full-page-screen-capture-chrome-extension/), för att ta en snapshot av webbplatsen. Jag använde även [Chrome DevTools](https://developers.google.com/web/tools/chrome-devtools) för att titta på bildstorlekar och brytpunkter och hur responsivitet uppnås.

Resultat
-----------------------

###Hanna Keiser

#### Allmänt

Bilderna har fem olika srcset-bredder: 480w, 768w, 992w, 1200w, 1600w och 2048w. Dock blir de flesta bilder aldrig så stora som de största seten.

Som en allmän notering verkar bildstorlekar hanteras på många olika sätt. Jag valde t.ex. inte den översta bilden i full bredd eftersom den var satt som bakgrundsbild och därför alltid laddas in med samma storlek. Jag noterade även att vissa kolumner som har tre bilder med tillhörande text istället använder flexbox för att styra bildens bredd, så bilden har 100% bredd men ligger i kolumner med 33,33333% bredd. Vid 992w får bilden täcka upp 100% av skärmen. Det verkar alltså skilja sig beroende på hur bilden används. Jag kommer dock använda mig av nedan observationer.

#### Bild 1: Full bredd i desktopläge
Bilden får sin bredd genom en element style som anger 100% av bredden. För bilden anges 100vw under sizes, vilket gör att den tar upp hela den kolumnen.

#### Bild 2: ca 1/2 av skärmbredd i desktopläge
Bilden får sin bredd genom en element style som anger 49,3% av bredden. För bilden anges 100vw under sizes, vilket gör att den tar upp hela den kolumnen. De två bilderna som ligger bredvid varandra ligger kvar på samma sätt vid alla brytpunkter och hamnar t.ex. aldrig under varandra.

[FIGURE src="image/rapporter/responsiva-bilder/hanna-keiser.png" class="center" caption="Bilder med halv skärmbredd"]

[FIGURE src="image/rapporter/responsiva-bilder/hanna-keiser-mobil.png" class="center" caption="Samma två bilder på mobil"]

#### Bild 3: ca 1/3 av skärmbredd i desktopläge
Bilden får sin bredd genom en element style som anger 32,4% av bredden. För bilden anges 100vw under sizes, vilket gör att den tar upp hela den kolumnen. De tre bilderna som ligger bredvid varandra ligger kvar på samma sätt vid alla brytpunkter och hamnar t.ex. aldrig under varandra.


### Emerald Weddings

#### Allmänt

Bilderna finns i tre olika storlekar --img-small, --img-medium och --img-large. Brytpunkterna för när storleken byts till medium och small är 1025px och 768px.

#### Bild 1: Full bredd i desktopläge

Viewport-enheten 100vh i kombinationen med 100% width används för att bilden alltid ska täcka upp hela skärmen oavsett storlek på den. Det innebär att bilden blir beskuren på olika sätt.

[FIGURE src="image/rapporter/responsiva-bilder/emerald-ipad-pro.png" class="center" caption="Bild med 100vh på iPad Pro"]

[FIGURE src="image/rapporter/responsiva-bilder/emerald-iphone-x-liggande.png" class="center" caption="Bild med 100vh på iPhone X liggande"]

#### Bild 2: ca 1/2 av skärmbredd i desktopläge

Bildens höjd anges i relativa enheten rem, vilket innebär att storleken är relativ till rot-elementet. På stora skärmar är bildens höjd 33.6875rem och bredden 100%, vilket innebär att bilden blir beskuren och behåller proportionerna även om skärmen blir mindre.

Vid 768px får bilden full bredd och går även från landskapsformat till porträttformat. Då anges endast höjd, 25 rem, vilket innebär att förhållandena mellan höjd och bredd ändras beroende på skärmstorlek.


#### Bild 3: 1/3 av skärmbredd i desktopläge

Bildernas storlek anges i rem och för stora skärmar räknas bredden ut genom calc(100% / 3 - 1.375rem) och höjden är 29.6875rem. Det innebär att bilderna blir beskurna och har alltid samma relativa bredd. I fullbredd är de 19.6875rem vardera, vilket innebär att det även finns stora marginaler. Vid 768px får bilderna fullbredd och blir även beskurna i landskapsformat och får en textplatta över sig som annars endast var synlig vid hover. Storleken bestäms genom att ange höjd (29.6875rem), vilket innebär att proportionerna varierar.

[FIGURE src="image/rapporter/responsiva-bilder/emerald-3.png" class="center" caption="Tre bilder i bredd"]

[FIGURE src="image/rapporter/responsiva-bilder/emerald-3fullbredd.png" class="center" caption="En av tre bilder i fullbredd, beskuren"]




### Frida Furberg

#### Bild 1: Full bredd i desktopläge

Bilden har sex olika srcset: 600w, 900w, 1500w, 2000w, 2560w och 3000. Dock används aldrig de största. Under sizes anges 100vw.

#### Bild 2: ca 1/2 av skärmbredd i desktopläge

Bilden har sex olika srcset: 950w, 550w, 400w, 300w, 200w och 150w. Viewport-enheter anges under sizes och på desktop är bredden satt till 50vw och vid 700px blir den 100vw.


#### Bild 3: 1/3 av skärmbredd i desktopläge

Bilden har sju olika srcset: 880w, 827w, 800w, 768w, 440w, 400w och 200w. För skärmbredd på minst 1200px är bildbredd satt till 33.33333vw och fyller därmed upp en tredjedel, men vid max 1000 är bredd blir bildbredden 50vw och bilderna hamnar därmed under varandra i två kolumner istället för tre.

[FIGURE src="image/rapporter/responsiva-bilder/frida-furberg.png" class="center" caption="Tre kolumner i desktopläge"]

[FIGURE src="image/rapporter/responsiva-bilder/frida-furberg-iphone-x.png" class="center" caption="Samma bilder på iPhone X, nu i två kolumner"]


###Slutsats###

Det finns onekligen olika sätt att jobba med responsiva bilder. På Frida Furbergs webbplats används det relativa måttet viewport width (vw) för att ange hur stor del av skärmen bilden ska ta. Fördelen är att förhållandena blir samma oavsett skärmstorlek.

På Emerald Weddings sidor används också relativa enheter, men vilket som används varierar. För den första stora bilden används 100vh i kombination med 100% width för att bilden ska täcka upp hela skärmen oavsett skärmstorlek, vilket jag inte såg någon annanstans. För övriga bilder verkar rem användas, ibland i kombination med 100%. Det innebär att man antingen höjd eller bredd behåller sina mått, medan den andra ändras beroende av skärmens storlek.

Alla tre sidor använder olika storlekar på sina bilder, men hur det sker skiljer sig åt. Emerald Weddings har tre olika bildstorlekar som läses in beroende på maxbredd/minbredd på skärmen medan man på Frida Furbergs och Hanna Keisers sidor använder srcset och dubbelt så många olika brytpunkter, varav de största dock aldrig blir använda i praktiken. Srcset anger gruppen av bilder som webbläsaren kan välja mellan och bild-slotens verkliga bredd, som antingen kan anges i px (w) eller relativa enheter som vw. Frida Furbergs site har också olika srcset beroende på storlek på bilden, så för bilder som tar upp hela bredden ligger bredderna på 600w-3000w medan bilder som tar upp en tredjedel har srcset på 200w-880w, medan Hanna Kaiser har samma srcset för alla bilder oberoende av tänkt storlek. Genom att variera srcset-storlekar beroende på bildens planerade storlek blir storlekarna mer exakta relativt den storlek de slutligen får på skärmen, eftersom hoppen blir mindre, vilket i slutändan bör ge lägre laddningstider.

Min slutsats är man kan välja att arbeta med responsivitet på olika sätt beroende på vilka effekter man vill få. Vill man t.ex. att hela skärmen ska tas upp av en bild, fungerar en kombination som 100vh och 100% width fint. Det är effektfullt och fungerar bra för bildsidor om man vill styra exakt hur det första intrycket blir. Enheten vw fungerar på liknande sätt men för att behålla bredden. Vill man behålla antingen höjd eller bredd men beskära den andra kan man använda en kombination av % eller rem, men vill man styra exakt hur bilden visas är det kanske inte att föredra, eftersom bilden då blir beskuren på olika sätt.

Alla siter skiftade inte kolumnlayout på det sätt jag hade förväntat mig. På Hanna Keisers webbplats behölls ibland två- och trekolumnersutseendet även på de minsta skärmarna, vilket gjorde att bilderna blev mycket små. I de fall då det fanns en text till bilden ändrades dock kolumnlayouten, så variationen bland bildstorlekar blev ganska stor.

Att undersöka responsivitet för bilder var svårare än jag trodde, men mycket lärorikt, och jag har lärt mig en hel del nya saker som t.ex. viewport-enheter, calc() och vilken effekt användandet olika måttenheter (och kombinationer av dessa) kan få.

Referenser och hjälpmedel
-----------------------

[1] [Full Page Screen Capture](https://mrcoles.com/full-page-screen-capture-chrome-extension/)

[2] [Chrome DevTools](https://developers.google.com/web/tools/chrome-devtools)

[3] [Hanna Keiser](https://hannakeiser.se/brollopsfotograf-linkoping/)  

[4] [Emerald Weddings](https://elcada.se/)

[5] [Frida Furberg](https://fridafurberg.se/)

[6] [MDN - Values and units](https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Values_and_units)

[7] [MDN - Responsive images](https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images)

[8] [MDN - calc()](https://developer.mozilla.org/en-US/docs/Web/CSS/calc)




Övrigt
-----------------------

Rapporten har skrivits av Heidi Patja.
