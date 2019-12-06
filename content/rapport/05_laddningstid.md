---
---
Laddningstid
=======================

I rapporten har vi tittat på tre olika webbplatser och analyserat laddningstid och användbarhet.


Urval
-----------------------

Vi valde att titta på webbplatser inom samma kategori eftersom de borde ha jämförbart innehåll på sina sidor. Vi valde ut tre olika riksdagspartier med lite spridning på den politiska skalan - [Centerpartiet](https://www.centerpartiet.se), [Moderaterna](https://www.moderaterna.se/) och [Vänsterpartiet](https://www.vansterpartiet.se).

Metod
-----------------------

För mätningarna använde vi [Chrome DevTools](https://developers.google.com/web/tools/chrome-devtools) för att ta ut data om laddningstid, sidans totala storlek och antal resurser. Vi tittade även på [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) för att se omdöme samt få tips på åtgärder för att minska laddningstiden. Testerna gjordes för både mobil vy och desktop.

För att ta snapshots av webbplatserna använde vi [Full Page Screen Capture](https://mrcoles.com/full-page-screen-capture-chrome-extension/).

Resultat
-----------------------

För detaljerade resultat, se [resultattabell i Google Docs](https://docs.google.com/spreadsheets/d/1k8LpkxeICTt9mIFmHkHPW6Mwel31O0oLrDfoYx-uqFo/).

###Centerpartiet###

Centerpartiet ligger i mitten i våra egna mätningar och har även normala mätvärden i Google PageSpeed. De åtgärder som skulle ge mest är att ta bort resurser som blockerar renderingen av sidan, använda nyare filformat, ladda kritiskt innehåll före bilder som inte syns på skärmen samt ta bort CSS-kod som inte används.

[FIGURE src="image/rapporter/laddningstid/centerpartiet2.png&w=387" class="center" caption="Centerpartiets startsida."]

###Moderaterna###

Moderaternas webbplats har längst laddningstid och det som tar längs tid att ladda är en stor bannerbild i png-format högst upp på sidan (laddar synbart långsamt) samt YouTube-videos. Åtgärder som föreslås är att använda rätt bildstorlek, använda nyare filformat på bilderna, ta bort resurser som blockerar renderingen av sidan, ladda kritiskt innehåll före bilder som inte syns på skärmen samt rensa bort onödig CSS.

[FIGURE src="image/rapporter/laddningstid/moderaterna2.png&w=387" class="center" caption="Moderaternas startsida."]

###Vänsterpartiet###
Vänsterpartiet har utmärkta mätvärden i alla mätningar - i Google PageSpeed får desktopsiten 99 av 100 poäng och laddningstiden på mobiler är under en sekund. Sidans totala storlek är visserligen mindre än övriga partiers, men jämför vi laddningstid per MB ligger Vänsterpartiets sida ändå lägst. Ett förslag på åtgärd för att jobba vidare med den mobila vyn och höja PageSpeed-poängen där är att använda nyare bildformat.

[FIGURE src="image/rapporter/laddningstid/vansterpartiet2.png&w=387" class="center" caption="Vänsterpartiets startsida."]

Analys
-----------------------

###Förbättringsåtgärder###

Den vanligaste förbättringsåtgärden är att använda nyare filformat på bilderna. Andra återkommande förslag är att ta bort resurser som blockerar renderingen av sidan, se till att ladda kritiskt innehåll före bilder som inte syns på skärmen samt att rensa bort onödig CSS-kod.

###Vinnare###

Överlägsen vinnare i testet, alla kategorier, är Vänsterpartiet. Siten har bäst mätvärden och upplevs som snabb. Slutgiltig rangordning:

1. Vänsterpartiet
2. Centerpartiet
3. Moderaterna

###Gräns för laddningstid###

Vi satte gränsvärdet till 3 sekunder. Är laddningstiden längre än så börjar det bli märkbart för oss. Det kan dock påverkas av vilken ordning resurserna på sidan laddas. I Moderaternas fall var bannerbilden högst upp på sidan det som laddade långsammast, vilket också blir mest märkbart eftersom det är det första man ser när man går in på sidan. Sidan fortsätter dessutom att snurra i flera sekunder och om man scrollar kan man t.ex. se att YouTube-videos dyker upp under tiden sidan laddas. Skulle de bara ha haft element längre ner på sidan, eller i bakgrunden, som laddades långsamt hade vi inte nödvändigtvis märkt av det lika mycket. Vi upplever att Vänsterpartiet och Centerpartiets sidor laddar snabbt, medan Moderaternas är lite långsam och det stämmer överens med de mätvärden vi fick fram och gränsen vi satte för  laddningstid.

Referenser och verktyg
-----------------------

[1] [Centerpartiet](https://www.centerpartiet.se/)

[2] [Vänsterpartiet](https://www.vansterpartiet.se/)

[3] [Moderaterna](https://www.moderaterna.se/)

[4] [Full Page Screen Capture](https://mrcoles.com/full-page-screen-capture-chrome-extension/)

[5] [Chrome DevTools](https://developers.google.com/web/tools/chrome-devtools)

[6] [Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/)

Övrigt
-----------------------

Rapporten har skrivits av Heidi Patja tillsammans med [Linnéa Olofsson](http://www.student.bth.se/~lioo19/dbwebb-kurser/design/me/redovisa/htdocs/). Vi gjorde resultat- och analysdelen tillsammans, men har skrivit ihop texterna på varsitt håll, varför de slutgiltiga texterna kan skilja sig åt lite.
