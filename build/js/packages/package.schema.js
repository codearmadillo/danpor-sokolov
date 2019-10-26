var packageSchema = {
    init:function(){
        var data = JSON.stringify(packageSchema.renderCompany());
        var script = $("<script></script>").attr("type","application/ld+json");
        script.append(data).appendTo("head");

        return true;
    },
    renderCompany:function(){
        return {
            "@context":"http://schema.org",
            "@type":"AccountingService",
            "name":"Danpor Sokolov s.r.o.",
            "legalName":"Danpor Sokolov s.r.o.",
            "description":"Daně a mzda, insolvence či daňové přiznání. Poskytujeme služby v oblasti daňového poradenství a účetnictví.",
            "openingHours":"Mo,Tu,We,Th,Fr 08:00-14:00",
            "address":{
                "@context":"http://schema.org",
                "@type":"PostalAddress",
                "streetAddress":"Karla Havlíčka Borovského 377",
                "addressLocality":"Sokolov, Česká republika",
                "postalCode":"35601"
            },
            "logo":"http://danporsokolov.cz/wp-content/themes/danpor/res/favicon-228.png",
            "image":"http://danporsokolov.cz/wp-content/themes/danpor/res/favicon-228.png",
            "url":"http://danporsokolov.cz/",
            "publicAccess":true,
            "telephone":"+420352603122",
            "email":"danporsokolov@volny.cz",
            "foundingDate":new Date("1993-01-22"),
            "foundingLocation":"Sokolov",
            "founder":[
                {
                    "@context":"http://schema.org",
                    "@type":"Person",
                    "name":"Jiří Královec",
                    "email":"danporsokolov@volny.cz",
                    "jobTitle":["Owner","Accountant"],
                    "telephone":"+420777706982"
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Person",
                    "name":"Mgr. Iveta Královcová",
                    "email":"danporsokolov@volny.cz",
                    "jobTitle":["Owner","Accountant"],
                    "telephone":"+420777706986"
                },
            ],
            "employees": [
                {
                    "@context":"http://schema.org",
                    "@type":"Person",
                    "name":"Jiří Královec",
                    "email":"danporsokolov@volny.cz",
                    "jobTitle":["Owner","Accountant"],
                    "telephone":"+420777706982"
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Person",
                    "name":"Mgr. Iveta Královcová",
                    "email":"danporsokolov@volny.cz",
                    "jobTitle":["Owner","Accountant"],
                    "telephone":"+420777706986"
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Person",
                    "name":"Lucie Hanáčková",
                    "email":"danporsokolov@volny.cz",
                    "jobTitle":["Accountant"],
                    "telephone":"+420777706987"
                },
            ],
            "contactPoint":{
                "@context":"http://schema.org",
                "@type":"ContactPoint",
                "contactType":"reservations",
                "telephone":"+420352603122",
                "email":"danporsokolov@volny.cz"
            },
            "subOrganization":{
                "@context":"http://schema.org",
                "@type":"Organization",
                "name":"Danpor Kamenice s.r.o.",
                "legalName":"Danpor Kamenice s.r.o.",
                "description":"Daně a mzda, insolvence či daňové přiznání. Poskytujeme služby v oblasti daňového poradenství a účetnictví."
            },
            "makesOffer":[
                {
                    "@context":"http://schema.org",
                    "@type":"Offer",
                    "name":"Zpracování mezd",
                    "description":"Kompletní zpracování mezd, vedení personálních spisů či měsíční přehledy pro zdravotní pojišťovny."
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Offer",
                    "name":"Zpracování daňové evidence",
                    "description":"Zpracování účetních dokladů či vedení všech zákonem stanovených evidencí a knih."
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Offer",
                    "name":"Daňové poradenství",
                    "description":"Daňové přiznání, silniční daň či daň z přijmu a další služby spojené s daněním."
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Offer",
                    "name":"Insolvence a osobní bankrot",
                    "description":"Zpracujeme Vám insolvenční návrh a pomůžeme Vám během insolvenčního řízení"
                },
                {
                    "@context":"http://schema.org",
                    "@type":"Offer",
                    "name":"Založení obchodní společnosti",
                    "description":"Pomůžeme Vám se založením společnosti a všemi náležitostmi."
                }
            ]
        }
    }
}