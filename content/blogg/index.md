---
views:
    main:
        template: anax/v2/article/default
        data:
            class: blog

    byline: false
    block-about: false
    article-toc: false

    blog-list:
        region: main
        template: anax/v2/blog-list/default
        sort: 2
        data:
            dateFormat: j F Y
            meta:
                type: toc
                orderby: publishTime
                orderorder: desc

    blog-toc:
        region: sidebar-right
        template: anax/v2/blog-toc/default
        sort: 2
        data:
            meta:
                type: copy
                view: blog-list

    flash:
        region: flash
        template: anax/v2/image/default
        data:
            src: "image/blogg/island_bil.jpg?area=42,0,26,0&f=contrast,-20"

---
Dagens bild
===========================

Välkommen till min bildblogg. Här delar jag en bild om dagen från mina gamla och nya äventyr och presenterar den på lite olika sätt. Häng på!
