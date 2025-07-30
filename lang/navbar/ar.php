<?php
return [
    "lang" => "En",
    "lang-flag" => "assets/img/uk_flag.png",
    "items" => [
        [
            "name" => "الرئيسية",
            "href" => "index.php"
        ],
        [
            "name" => "من نحن",
            "submenu" => [
                ["name" => "عن الإبداع", "href" => "about-overview.php"],
                ["name" => "اعضاء مجلس الإدارة", "href" => "team.php?page=about-board "],
                ["name" => "فريق المبدعين", "href" => "team.php"],
                ["name" => "شركاؤنا", "href" => "about-partners.php"],
                ["name" => "التقارير المالية", "href" => "about-financial.php"],
                ["name" => "تقارير الحوكمة", "href" => "about-governance.php"],
            ]
        ],
        [
            "name" => "منتجاتنا",
            "submenu" => [
                ["name" => "قرض سيدتي", "href" => "loan-details.php?id=saydati"],
                ["name" => "قرض الإبداع", "href" => "loan-details.php?id=ebdaa"],
                ["name" => "قرض النجاح", "href" => "loan-details.php?id=najah"],
                ["name" => "قرض الأمل", "href" => "loan-details.php?id=amal"],
                ["name" => "قرض التفوق", "href" => "loan-details.php?id=tafawoq"],
                ["name" => "قرض التميز", "href" => "loan-details.php?id=tamayouz"],
                ["name" => "قرض التميز بلس", "href" => "loan-details.php?id=tamayouz-plus"],
                ["name" => "القرض الموسمى", "href" => "loan-details.php?id=mawsimi"],

            ]
        ],
        [
            "name" => "قصص النجاح",
            "href" => "success-stories.php"
        ],
        [
            "name" => "أخبارنا",
            "href" => "news.php"
        ],
        [
            "name" => "ترغب في الحصول على قرض؟",
            "href" => "application-form.php",
            "active" => true
        ],
        [
            "name" => "تواصل معنا",
            "href" => "index.php#contact"
        ],
    ],
    "logo" => "assets/img/logo-ar-eng-01.webp",
    "logo-alt" => "إبداع البحرين",
    
    ];