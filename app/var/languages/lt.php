<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'Anglų',
        'download'                        => 'Atsisiųsti',
        'documentation'                   => 'Dokumentacija',
        'forum'                           => 'Forumas',
        'blog'                            => 'Tinklaraštis',
        'support'                         => 'Palaikymas',
        'donate'                          => 'Paaukoti',
        'store'                           => 'Parduotuvė',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> yra WEB karkasas realizuotas kaip C plėtinys, siūlantis <a href=':1:'>didelį našumą</a> ir žemesnį išteklių sunaudojimą",
        'the_fastest_php_framework'       => 'Greičiausias<br/>PHP Karkasas',
        'try_online'                      => 'Išbandykite Internete',
        'see_screencasts'                 => 'Žiūrėti Įrašus',
        'everything_you_need_upper'       => 'VISKAS KO JUMS REIKIA',
        'full_mvc_applications'           => "Visos <a href=':1:'>MVC</a> programos",
        'single_module'                   => 'Vieno modulio',
        'multi_module'                    => 'Kelių modulių',
        'micro_applications'              => 'Mikro programos',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transakcijos',
        'behaviors'                       => 'Elgsenos',
        'relations'                       => 'Santykiai',
        'phql'                            => 'PHQL',
        'events'                          => 'Įvykiai',
        'validations'                     => 'Patikros',
        'hydration'                       => 'Hidratacija',
        'logging'                         => 'Registravimas',
        'profiling'                       => 'Profiliavimas',
        'sharding'                        => 'Skirstymas',
        'odm_for_mongo'                   => 'ODM Mongo',
        'template_engine_volt'            => 'Šablonų Sistema (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Įvykių Valdymas',
        'encryption'                      => 'Šifravimas',
        'http_request'                    => 'HTTP Užklausa',
        'http_response'                   => 'Atsakas',
        'http_cookies'                    => 'Slapukai',
        'escaping'                        => 'Vengimas',
        'filtering'                       => 'Filtravimas',
        'forms_builder'                   => 'Formų Daryklė',
        'forms_validation'                => 'Patikra',
        'flash_messages'                  => 'Skubūs Pranešimai',
        'cache'                           => 'Podėlis',
        'pagination'                      => 'Puslapiavimas',
        'annotations'                     => 'Komentarai',
        'security'                        => 'Saugumas',
        'translations'                    => 'Vertimai',
        'assets_management'               => 'Išteklių Valdymas',
        'universal_auto_loader'           => 'Universalioji Auto-Paleidyklė',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON FORUMAS',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'PARAŠYKITE EL. LAIŠKĄ',
        'services_upper'                  => 'PASLAUGOS',
        'consulting_upper'                => 'KONSULTAVIMAS',
        'requirements_analysis'           => 'Reikalavimų Analizė',
        'implementation'                  => 'Realizavimas',
        'ongoing_support'                 => 'Nuolatinis Palaikymas',
        'read_more'                       => 'Skaityti daugiau',
        'hosting_upper'                   => 'PRIEGLOBA',
        'phalcon_can_be_installed'        => 'Phalcon gali būti įdiegtas',
        'main_upper'                      => 'PAGRINDINIS',
        'consulting'                      => 'Konsultavimas',
        'hosting'                         => 'Priegloba',
        'support_upper'                   => 'PALAIKYMAS',
        'forum_community'                 => 'Forumas / Bendruomenė',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Klaidų Sekėjas',
        'get_involved_upper'              => 'ĮSITRAUKTI',
        'team'                            => 'Komanda',
        'about'                           => 'Apie',
        'roadmap'                         => 'Veiklos grafikas',
        'donate_to_phalcon'               => 'Paaukoti Phalcon:',
        'or'                              => 'arba',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Mūsų nuostabūs pagalbininkai',

        'download_phalcon'                => 'Atsisiųsti Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'Kūrėjo Įrankiai',
        'download_ide_stubs'              => 'IDE patarimai',
        'download_note'                   => 'Phalcon yra C plėtinys, dėl to jums reikia atsisiųsti dvejetainį failą jūsų platformai arba sukompiliuoti jį iš pirminio kodo.',
        'download_compilation'            => 'Kompiliavimas',
        'download_compilation_1'          => 'Linux operacinėje sistemoje jūs galite lengvai sukompiliuoti ir įdiegti plėtinį iš pirminio kodo.',
        'download_requirements'           => 'Reikalavimai',
        'download_requirements_1'         => 'Mums reikia kai kurių paketų įdiegtų anksčiau:',
        'download_requirements_2'         => 'PHP 5.x kūrimo ištekliai',
        'download_requirements_3'         => 'GCC kompiliatorius',
        'download_compilation_11'         => '1. Norėdami sukurti plėtinį iš C kodo, sekite šiuos žingsnius:',
        'download_compilation_12'         => '2. Įtraukite plėtinį į savo php.ini:',
        'download_compilation_13'         => '3. Galiausiai, paleiskite iš naujo serverį',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "Ten yra saugykla, kurią maloningai pasiūlė <a href=':1:'>FortRabbit</a>. <a href=':2:'>Čia</a>",
        'download_debian_2'               => 'Paketo pavadinimas yra php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Ten yra PKGBUILD, kuri yra skirta ArchLinux. Prieinama <a href=':1:'>čia</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Yra prieinamas paketas <a href=':1:'>čia</a> (ačiū <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Prievadas yra prieinamas FreeBSD sistemai. Jums reikia šių komandų, kad įdiegtumėte tai:',
        'download_dependencies'           => 'Priklausomybės',
        'download_dependencies_1'         => 'Nors Phalcon neturi dvejetainės nuorodos į kitus plėtinius, ji kai kuriuos naudoja, kad pasiūlytų platesnį funkcionalumą. Naudojami plėtiniai yra:',
        'download_dependencies_2'         => 'Nėra būtina visiems plėtiniams būti įdiegtiems sistemoje, kurioje yra Phalcon. Jūs galite įdiegti tik jums būtinus. Pavyzdžiui, jei jūs naudojate MySQL duomenų bazę, tada jūs galite įkelti PDO ir PDO/MySQL, praleisdami Oracle, SQlite, Postgresql ir Mongo.',
        'download_need_help'              => 'Reikia pagalbos?',
        'download_need_help_1'            => "Peržiūrėkite mūsų <a href=':1:'>palaikymo puslapį</a> norėdami gauti pagalbą. Mes padarysime viską, kad jums padėtumėme.",

        'download_windows_note'           => 'Mes ypač jums rekomenduojame naudoti naujausią PHP versiją, kuri atitinka mūsų DLL, kad gautumėte visų Phalcon funkcijų privalumus.',
        'download_windows_stable'         => 'Stabilios/Bazinės versijos',
        'download_windows_installation'   => 'Įdiegimas',
        'download_windows_installation_1' => "Norėdami naudoti Phalcon Windows operacinėje sistemoje, jūs galite atsisiųsti DLL biblioteką. Redaguokite php.ini, pridėkite prie pabaigos, ir paleiskite iš naujo serverį, kad įkeltumėte plėtinį. <a href=':1:'>Plačiau</a>.",
        'download_windows_guides'         => 'Susiję Gidai',
        'download_windows_guides_xampp'   => 'Diegimas per XAMPP',
        'download_windows_guides_wamp'    => 'Diegimas per WAMP',
        'download_windows_alpha'          => 'Alfa/Beta versijos',
        'download_source_code'            => "Pirminis Kodas: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Pirminis Kodas (prašome pereiti prie atitinkamos šakos): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'Šiuo metu nėra prieinamų alfa/beta versijų.',
        'download_windows_older'          => 'Senesnės versijos',

        'download_devtools_1'             => 'Šie įrankiai yra naudingų skriptų rinkinys, kad sugeneruotų kodo griaučius. Pagrindiniai jūsų programos komponentai gali būti sugeneruoti su paprasta komanda, kuri jums leidžia lengvai kurti programos su Phalcon.',
        'download_devtools_docs'          => "Dokumentacija: <a href=':1:'>Phalcon Kūrėjo Įrankiai</a>",
        'download_devtools_composer'      => 'Diegimas per Composer',
        'download_devtools_composer_1'    => 'Įdiekite Composer bendroje vietoje arba savo projekte:',
        'download_devtools_composer_2'    => 'Sukurkite composer.json failą, kaip nurodyta:',
        'download_devtools_composer_3'    => 'Paleiskite Composer diegimo programą:',
        'download_devtools_composer_4'    => 'Sukurkite virtualiąją nuorodą į phalcon.php:',
        'download_devtools_download'      => 'Jūs galite atsisiųsti arba klonuoti platformos paketą, kuriame yra kūrėjo įrankiai iš  <a href=":1:">Github</a>.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant Boxes',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> is an excellent tool to create and configure lightweight, reproducible, and portable development environments.",
        'download_vagrant_2'              => "Use any of the following boxes to test or develop with Phalcon on a pre-configured environment.",
        'download_box_1'                  => "Box #1",
        'download_box_2'                  => "Box #2",
        'download_box_user_pass'          => "MySQL User: :1: Password: :2:",
        'download_box_doc_root'           => "Document Root: :1:",
        'download_examples'               => "Pre-Installed examples",
        'download_examples_1'             => "The following examples are pre-installed on each vagrant box:",

        'consulting_header'               => "Mes siūlome konsultacines paslaugas Phalcon <br />ir/arba PHP realizacijoms",
        'requirements_analysis_1'         => 'Viena iš didžiausių problemų, su kuria susiduria kūrėjai yra faktas, kad daug projektų neturi pakankamai apibrėžtų reikalavimų. Todėl, dažniau nei niekada, klientų norai yra visiškai skirtingi nuo kūrėjo supratimo ir vėlesnio pristatymo.',
        'requirements_analysis_2'         => 'Mes galime pasiūlyti reikalavimų analizės paslaugas, aptarti su klientais ir paversti jų viziją į tikslius reikalavimus kūrėjams.',
        'implementation_1'                => 'Jei jūs norite mus pasamdyti, kad sukurtumėme jūsų programą, mes būtume daugiau nei laimingi galėdami tai padaryti. Naudodami naujausias technologijas, mes galime pasiūlyti patikimą sprendimą jūsų užduočiai ar projektui su testais ir dokumentacija.',
        'ongoing_support_1'               => 'Klientams, kurie yra suinteresuoti nuolatiniu palaikymu, mes galime pasiūlyti pagalbą jų projektams nuolatos. Klientai gali įsigyti paramos valandų (mažiausiai 2 valandos) už 50 USD per valandą.',
        'ongoing_support_2'               => 'Pagalbos valandos neturi galiojimo termino ir gali būti panaudotos kai reikia. Klientams, kurie nori naudoti nuolatinės pagalbos schemą, siūlome lanksčius planus, kurie geriau atitiktų jūsų poreikius.',
        'sponsors'                        => 'Rėmėjai',
        'sponsors_1'                      => 'Tiems, kurie nori remti mūsų darbą ir tolesnę Phalcon plėtrą, siūlome įvairias rėmimo galimybes, kurios tiks, bet kokiam biudžetui.',
        'sponsors_2'                      => 'Papildomai, klientai gali norėti tam tikrų realizuotų funkcijų, kurios paprastai truktų daug ilgiau ir ne dėl jų populiarumo ar sudėtingumo. Mes tikrai galime prisitaikyti prie tokių prašymų prie mūsų įprastinių normų.',
        'contact'                         => 'Kontaktai',
        'contact_1'                       => "Drąsiai <a href=':1:'>susisiekite</a> norėdami aptarti jūsų reikalavimus ir leiskite mums pasiūlyti sprendimą, kuris jums geriausiai tiks pagal jūsų poreikius ir jūsų biudžetą. Joks projektas yra per didelis ar per mažas.",

        'phalcon_team'                    => 'Phalcon Komanda',
        'team_andres_1'                   => 'Andres nėra svetimas atvirojo kodo projektuose. Per pastaruosius devynerius metus, jis sukūrė ir išleido PHP karkasus ir buvo įtrauktas į WEB kūrimą - jo pagrindinę aistrą.',
        'team_andres_2'                   => "TR35 nugalėtojas, Andres pagrindinė misija yra visada pasirinkti ir realizuoti ar naudoti tinkamus įrankiu darbui, daugiausia orientuotus į našumą. Todėl 2011 metais gimė nauja idėja: sukurti naujo tipo PHP karkasą kūrėjams, kurie orientuojasi į patogumą, funkcijas ir daugiausia į našumą.",
        'team_andres_3'                   => 'Per šį naują novatorišką požiūri gimė Phalcon. PHP karkasas parašytas C kalba, kuris siūlo daugybę funkcijų kūrėjams, tuo pačiu maksimaliai didinant našumą ir išlaikant mažą išteklių panaudojimą.',
        'team_andres_4'                   => 'Andres yra vienas iš pagrindinių Phalcon kūrėjo ir jo įkvėpimas.',
        'team_nikos_1'                    => 'Nikos jau dirba IT pramonėje daugiau nei 20 metų. Jis įsitraukė į PHP pasaulį 2000 metais ir naudoja ją, bet kokiems asmeniniams projektams, kaip ir projektams savo darbdaviams.',
        'team_nikos_2'                    => 'Jis mėgsta atrasti naujas technologijas ir būdus, kaip juos integruoti į egzistuojančias programas ir taip gauti jų siūlomos naudos.',
        'team_nikos_3'                    => 'Jis yra aistringas Test Driven Development (TDD) šalininkas ir visada stengiasi visiškai aprėpti savo kodą.',
        'team_nikos_4'                    => "Nikos tęstinis susidomėjimas naujomis ir iniciatyvomis technologijomis padėjo lengvai prisijungti prie Phalcon. Jis prisijungė į pagrindinę komandą ir jo užduotys daugiausia susijusios su NFR koordinavimu ir klaidų pataisymu, pagalba su testais ir dokumentacija. Nikos yra taip pat atsakingas už Windows DLL ir pagalbos siūlymą kai įmanoma.",
        'team_nikolay_1'                  => 'Nikolay kuria internetines programas virš 10 metų. Jis dalyvavo didelio našumo ir sudėtingų dizainų projektuose.',
        'team_nikolay_2'                  => 'Nikolay dirbo su atvirojo kodo projektais jau ilgą laiką, naudojo juos kai leido reikalavimai. Todėl jis skyrė savo asmeninį laiką, norėdamas pagelbėti bendruomenei, siūlydamas architektūros pakeitimus ir kitus pasiūlymus, taip pat ir našumo pasiūlymus. Jis padėjo gerinti atvirojo kodo TVS projektus, iš kurių gavo teigiamus atsiliepimus.',
        'team_nikolay_3'                  => 'Jo nuolatinis dalyvavimas atvirojo kodo projektuose padėjo jam patobulinti technines žinias.',
        'team_nikolay_4'                  => 'Nikolay yra aistringas maksimalaus našumo projektuose rėmėjas. Kai jis prisijungė prie Phalcon, jis nusprendė tęsti ir naudoti projektą ir tapti jo Evangelistu. Jis yra Rusijos bendruomenės lyderis ir siūlo įvairius išteklius rusakalbiams kūrėjams.',
        'team_nikolay_5'                  => "Jo įnašai yra: dubliuojamoji svetainė (<a href=':1:'>http://www.phalconphp.ru</a>), dubliuojamoji dokumentacija (<a href=':2:'>http://docs.phalconphp.ru</a>), nuolatiniai pakeitimai ir pataisymai dokumentacijoje angliškai, grupė socialiniame tinkle Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Įsitraukti',
        'about_description_1'             => "Nuostabiems projektams reikia nuostabių rankų. Mes galbūt jūsų dar nežinome, tačiau mes manome, kad jūs puikiai tiksite kurdami geresnį internetą. Kartu, mes esame pasiruošę pakeisti pasaulį! Čia Phalcon, mes kuriame naujos kartos PHP karkasą; mes norime jums suteikti įspūdingą našumą, tuo pačiu padėdami jums kurti lengvu ir smagiu keliu.",
        'about_description_2'             => 'Mes tikimės, kad jums patiks Phalcon kaip ir mums. Mūsų rankos visada atviros priimti jūsų bendradarbiavimą dėl įvairių dalykų, nes šis projektas reikalauja:',
        'about_translations_1'            => "Mes siekiame pritraukti kuo daugiau kūrėjų sulaužant kalbos barjerus. Mes naudojame <a href=':1:'>:2:</a>, kad tvarkytume visus žodžius ar sakinius, kuriuos reikia išversti šiai svetainei. Projekto saugykla yra <a href=':3:'>čia</a> ir žemiau jūs galite matyti dabartinę vertimų būseną.",
        'documentation_upper'             => 'DOKUMENTACIJA',
        'about_documentation_1'           => 'Šios svetainės saugykla yra prieinama per GitHub. Drąsiai tobulinkite ją, taisykite spausdinimo klaidas, pridėkite pavyzdžių, straipsnių ir pan. Tai pat, jei jūs norite išversti turinį į kitą kalbą, mes būsime labai dėkingi!',
        'screencasts'                     => 'Vaizdo įrašai',
        'about_screencasts_1'             => "Mes visi mėgstame vaizdo pamokas. Jei jūs turite papildomo laiko ir norite padėti bendruomenei su keliais vaizdo įrašais, mokančiais kurių nors karkaso funkcijų, tai labai sveikintina. Patikrinkite mūsų <a href=':1:'>Vimeo kanalą</a> kaip gidą.",
        'tests'                           => 'Testai',
        'about_tests_1'                   => "Nėra programinės įrangos be klaidų. Jei jūs pastebėsite kokių nors, prašome nedvejodami pasakyti mums. Mes turime testų rinkinį su daugiau nei <a href=':1:'>8000</a> testų. Tačiau, bloko testų nėra gana. Padėkite mums pagerinti mūsų rinkinį pridėdami daugiau testų ar patobulinkite dabartinius. Kiekvienas pridėtas testas padaro karkasą stabilesniu.",
        'sample_applications'             => 'Programų Pavyzdžiai',
        'about_sample_apps_1'             => 'Dideli pavyzdžiai padeda kitiems geriau suprasti kaip dideli dalykai gali būti sukurti su Phalcon. Jauskitės laisvai dalijantis saugyklomis į jūsų pavyzdines programas, kurios padeda kitiems su jų darbu ir leidžia kitiems duoti atsaką apie jūsų darbą!',
        'evangelism'                      => 'Evangelizmas',
        'about_evangelism_1'              => "Yra dar daug žmonių, kurie dar nežino, kad Phalcon egzistuoja ar, kad jis iš tiesų veikia. Esame tikri, kad daugeliui kūrėjų būtų naudinga išgirsti apie tai, kas yra Phalcon ir kaip jis gali padėti jiems. Jei jūs žinote kokių nors PHP renginių/susitikimų ir jūs norėtumėte kalbėti apie projektą, jūs turite mūsų visišką palaikymą. Kas nenorėtų sužinoti apie įrankį, kuris PHP plėtrą?",
        'share_your_experiences'          => 'Pasidalinkite savo patirtimi',
        'about_share_experiences_1'       => "Nebūkite drovūs, nedvejodami pasidalinkite būdus, kuriais Phalcon buvo jums naudingas su mūsų bendruomene. Jei Phalcon yra jums sėkmingas, leiskite mums pasidalinti tai su bendruomene. Taip pat, aptarkite, kuriems komponentams reikėjo papildomo darbo, kokios naudos jūs gavote naudodami Phalcon. Nors ne viskas gali būti realizuota iš karto, jūsų indėlis į naujų funkcijų užklausas gali labai padėti mums formuoti projekto ateitį. Jūsų atsiliepimai padeda mums visiems.",
        'about_blog_1'                    => "Jei jums patinka rašyti, prisiminkite, kad <a href=':1:'>mūsų tinklaraštis</a> yra atviras jūsų sukurtoms pamokoms. Jei jūs turite savo tinklaraštį ir turite ką nors parašę apie Phalcon, mes galime tai pasidalinti savo socialinių tinklų puslapiuose, kad pasiektumėme didžiausią matomumą. Jei jūsų tinklaraščio įrašas yra ne anglų kalba, mes norime pasidalinti juo ir galbūt jį išversti, jei įmanoma. Jei jūs žinote tinklaraščius susijusius su PHP, kurie orientuojasi į projekto pristatymą savo auditorijai, prašome mums pranešti.",
        'donations_sponsoring'            => 'Parama / Rėmimas',
        'about_sponsoring_1'              => "Mes esame maža, bet efektyvi pagrindinė kūrėjų komanda, kuri dirba išsijuosus. Mes stengiamės išleisti kuo daugiau laiko prie projekto. Visa mūsų aistra šiam projektui verčia mus tobulėti kiekvieną dieną. Phalcon yra atvirojo kodo taikomoji programinė įranga ir savanorių pastangos yra reikalingos nuolatiniam tobulėjimui. Jūs galite mums padėti išlaikyti aktyvų kūrimą, aukodami projektui ar remdami kūrimą. Daugiau laiko ir išteklių skiriamų projektui, reiškia daugiau veiklos, daugiau patobulinimų, geresnio palaikymo, daugiau įspūdingų funkcijų ir pan.",
        'social_networks'                 => 'Socialiniai Tinklai',
        'about_social_networks_1'         => "Phalcon vystosi kasdien, dėl mūsų noro padaryti jį geresniu. Socialiniai tinklai yra mūsų gyvenimo dalis dabar, ir mes norime bendrauti su kitais per juos. Dalijimasis jūsų Phalcon patirtimi su jūsų socialiniais ratais gali labai padidinti projekto matomumą. Vis daugiau ir daugiau žmonių įsitrauks į mūsų bendruomenę, todėl Phalcon taps dar stipresnis, dar daugiau turtingesnis funkcijų ir populiarus. Pamėkite, '+1', pasidalinkite įrašais, kuriuos mes nuolatos parašome socialiniuose tinkluose, dalyvaukite diskusijose dėl šių įrašų. Žmonės, kurie atras Phalcon per jūsų ryšius, jums padėkos!",
        'about_social_networks_2'         => "Mes esame daugelyje populiariausių socialinių tinklų. Sekdami mus, jūs mums padedate padidinti projekto matomumą:",
        'follow_on_twitter'               => 'Sekite mus per Twitter',
        'facebook_page'                   => 'Facebook puslapis',
        'google_plus_page'                => 'Google+ Puslapis',
        'official_blog'                   => 'Oficialus Tinklaraštis',
        'star_on_github'                  => 'Pažymėkite projektą žvaigždute per GitHub',
        'thank_you'                       => 'Ačiū!',
        'about_thank_you_1'               => 'Mes norėtumėme padėkoti visiems padėjėjams ir bendruomenės nariams, kurie stumia mus, kad padarytume Phalcon geriausiu karkasu savo grupėje. Jūsų geri žodžiai ir dalyvavimas yra tai, kas mus skatina kurti geriau. Mes tikimės įvykdyti ir viršyti jūsų pasitikėjimą Phalcon.',
        'flying_with_phalcon'             => 'Ačiū, kad skriejate su Phalcon! &lt;3',

        'hosting_description'             => 'Phalcon gali būti įdiegtas kiekvienoje mašinoje, kurios prieglobos tiekėjas siūlo SSH root prieigą (arba sudo). Žemiau yra gerbiamų kompanijų sąrašas, kurie siūlo šias paslaugas:',
        'hosting_fortrabbit_1'            => 'Fortrabbit siūlo įvairius prieglobos planus (vienas yra kūrėjams ir jis nemokamas - su tam tikrais apribojimais), kurie patenkintų daugumos kūrėjų poreikius, kurie nori išbandyti Phalcon ar įdiegti savo programas.',
        'hosting_fortrabbit_2'            => "Jie siūlo įvairius <a href=':1:'>plėtinius</a>, kurie patenkintų net išrankiausią projektą.",
        'hosting_fortrabbit_3'            => 'Stabilios Phalcon versijos yra įdiegtos iš anksto, jūs galite juos aktyvuoti iš administravimo skydelio.',
        'hosting_webfaction_1'            => 'WebFaction Priegloba kūrėjams. Visiškasis apvalkalo priėjimas prie greitų serverių su visais jūsų mėgstamiausiais iš anksto įdiegtais įrankiais ir prižiūrimais vartotojui.',
        'hosting_webfaction_2'            => "Norėdami įdiegti Phalcon PHP per WebFaction, sekite šias <a href=':1:'>instrukcijas</a>.",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud suteikia išplečiamą, apskaičiuotą talpą debesyje.',
        'hosting_amazon_ec2_2'            => "Pasirinkite iš anksto sukonfigūruotą Amazon Machine Image (AMI) norėdami iš karto veikti. Arba sukurkite AMI su savo programomis, bibliotekomis, duomenimis, ir susietais konfigūracijos nustatymais. <a href=':1:'>Žiūrėti daugiau</a>",
        'hosting_linode_1'                => "Įdiekite ir valdykite Linux virtualius serverius per Linode Cloud. Gaukite veikiantį serverį per kelias sekundes su jūsų pasirinkta Linux distribucija, ištekliais ir mazgo vieta. <a href=':1:'>Žiūrėti daugiau</a>",
        'hosting_digital_ocean_1'         => "Liepsnojančiai greita debesų technologija. Sukurta kūrėjams. Įdiekite SSD debesį per 55 sekundes. <a href=':1:'>Žiūrėti daugiau</a>",
        'hosting_rackspace_1'             => "Debesų serveriai yra virtualiosios mašinos veikiančios Linux ar Windows&reg; serveriuose, kurias gausite per Rackspace Cloud. Jūs galite keisti išteklius, kaip CPU, atmintį ir talpą, padidinti ar sumažinti pagal jūsų poreikius. Geriausia, jūs galite mokėti už tiek kiek jums reikia. <a href=':1:'>Žiūrėti daugiau</a>",
        'hosting_install_instructions'    => 'Įdiekite Phalcon naudodami standartines diegimo instrukcijas.',
        'hosting_azure_1'                 => "<a href=':1:'>Windows Azure cloud</a> suteikia jums labai išplečiamą ir valdomą Windows prieglobą jūsų WEB programoms. Naudokite Phalcon, kad sumažintumėte savo išlaidas.",
        'hosting_azure_2'                 => "Sekite žingsnius šiame <a href=':1:'>SitePoint straipsnyje</a>, kad įdiegtumėte Phalcon.",

        'testimonials'                    => 'Atsiliepimai',
        'testimonials_description'        => "Žemiau yra atsiliepimų ir sėkmės istorijų rinkinys, iš jūsų, kūrėjų ir Phalcon PHP vartotojų. Mes visada laukiame el. laiškų su sėkmės istorijomis ir jas skelbiame savo tinklaraštyje. Jei jūs norite mums atsiųsti savo sėkmės istoriją ar susisiekti su mumis, drąsiai rašykite mums adresu <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Greetings, Phalcon team! I have a project, built on Phalcon framework. It's a Guitarama (<a href=':1:'>:2:</a>) - guitars tabs and chords catalog. The site is aimed at the Russian audience, and uses the Russian language, but I hope, there will be no problem to understand most of pages. The site was re-launched on a new platform in the beginning of January, 2013 and has since shown steady growth. Current daily visits: ~1500 unique visitors, ~5000 page views. The site is running on an old physical server 1хP4-3Ghz, 4GB RAM. Once again, thank you for a great framework and all what you are doing :)  Michael.",
        'testimonials_2'                  => "Hello, Phalcon team. I would like to share with you our success story of using Phalcon in <a href=':1:'>:2:</a> and <a href=':3:'>:4:</a> projects, the most visited and highloaded sites in Kazakhstan, ranked in TOP-10 classified sites in the CIS. Both sites work on single RESTful-like API written on Phalcon\Mvc\Micro. On peak loads API processes something like 400 req/sec and this is not a limit. Moving to Phalcon allowed us to reduce response generation time and the consumption of CPU and RAM, as well as to reduce the time of development process. We will continue using Phalcon in our new projects. Thank you for the great work you are doing! Best regards, Nikita Vershinin, Lead Developer, Kolesa.kz and krisha.kz",
        'testimonials_3'                  => "Phalcon komanda, Karkasas, kurį jūs sukūrėte yra nuostabus. Aš dar niekada nenaudojau karkaso, kuris kartu turi greitį, efektyvumą, glaustumą ir visa tai viename pakete. Aš ketinu prisidėti prie šio projekto kaip galiu. Aš neseniai prisidėjau prie ~800 valandų projekto ir esu laimingas, sakydamas, kad jis naudoja Phalcon karkasą. Bravo. Brian Seymour",
        'testimonials_4'                  => "Sveiki vyrukai, Aš neseniai perbėgau per Phalcon ir jis yra tiesiog nuostabus! Aš tik norėjau jums pasakyti, kokie esate nuostabūs! Taigi, ačiū už šį karkasą ir išlaikykite gerą darbą! Ivan Penchev",
        'testimonials_5'                  => "Hi Guys, i wrote simple url-shortener service with phalcon. That was amazing! really. <a href=':1:'>:2:</a>. Demo is here <a href=':3:'>:4:</a> :) Murat Küçükosman ",
        'testimonials_6'                  => "Hello Phalcon Team, I created a small project designed for Polish users using your framework. I have to admit that the performance is amazing, congratulations good job. Service to validate the content of the web pages in Polish language <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "Hi guys! Just wanted to share with you the latest release of our old project - <a href=':1:'>:2:</a>. Switching to phalcon allowed us to halve the server load compared to the previous framework, which is great!",

        'support_note'                    => "Daugelis klaidų atsiranda, nes vartotojai nenaudoja naujausios versijos. Prašome apsilankyti :1:, atsisiųsti naujausią versiją (arba ją sukompiliuoti) ir patvirtinti, ar klaida, kurią jūs patiriate, iš tiesų yra klaida.",
        'support_download_page'           => "atsisiuntimų puslapis",
        'support_documentation_1'         => "Prašome naudoti :1: prieš ką nors kita. Jūs taip pat galite naudoti paieškos funkciją mūsų dokumentuose, kad surastumėte tai, ko jūs ieškote. Jei jūsų klausimas dar neatsakytas, žemiau yra daugiau galimybių.",
        'support_phalcon_forum'           => "Phalcon Forumas",
        'support_forum_1'                 => "Jūs galite užduoti klausimą mūsų <a href=':1:'>Diskusijų Forume</a>",
        'support_irc'                     => "IRC kanalas",
        'support_irc_1'                   => "Jūs galite mus rasti :1: kanale per Freenode.",
        'support_stack_overflow_1'        => "Jei jūs esate susipažinę ar jums mielesnis Stack Overflow, čia yra  <a href=':1:'>phalcon</a> žymė, kurią jūs galite naudoti paieškoje ar pažymėti savo klausime.",
        'support_please_note'             => "Atkreipkite dėmesį:",
        'support_please_note_1'           => "Stack Overflow nėra skirta remti Phalcon",
        'support_please_note_2'           => "Prašome nerašykite čia naujų klaidų. Prašome naudoti <a href=':1:'>klaidų sekėją</a> GitHub sistemoje",
        'support_please_note_3'           => "Prašome čia neklauskite dėl naujų funkcijų užklausų. Prašome naudoti <a href=':1:'>klaidų sekėją</a> GitHub sistemoje",
        'support_please_note_4'           => "Įsitikinkite, kad įtraukėte 'phalcon' žymę prie savo klausimo",
        'support_please_note_5'           => "Įsitikinkite, kad jūs paminėjote 'Phalcon' klausime",
        'support_reporting_a_bug'         => "Pranešimas apie klaidą",
        'support_reporting_a_bug_1'       => "Prašome pranešti apie klaidas, kai jūs išnaudojate visas galimybes, kurios yra žemiau, naudodami <a href=':1:'>klaidų sekėją</a> GitHub sistemoje.",


    );

    // return $messages;