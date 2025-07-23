<?php
return [
    "lang" => "العربية",
    "lang-flag" => "assets/img/Flag_of_Bahrain.svg",
    "items" => [
        [
            "name" => "Home",
            "href" => "index.php"
        ],
        [
            "name" => "About Us",
            "submenu" => [
                ["name" => "Overview", "href" => "about-overview.php"],
                ["name" => "Board Members", "href" => "about-board.php"],
                ["name" => "Team", "href" => "team.php"],
                ["name" => "Partners", "href" => "about-partners.php"],
                ["name" => "Financial Reports", "href" => "about-financial.php"],
                ["name" => "Governance Reports", "href" => "about-governance.php"],
            ]
        ],
        [
            "name" => "Services",
            "submenu" => [
                ["name" => "Sidetie Loan", "href" => "loan-details.php?id=saydati"],
                ["name" => "Ebdaa Loan", "href" => "loan-details.php?id=ebdaa"],
                ["name" => "Najah Loan", "href" => "loan-details.php?id=najah"],
                ["name" => "Amal Loan", "href" => "loan-details.php?id=amal"],
                ["name" => "Tafawaq Loan", "href" => "loan-details.php?id=tafawoq"],
                ["name" => "Tamayouz Loan", "href" => "loan-details.php?id=tamayouz"],
                ["name" => "Tamayouz Plus Loan", "href" => "loan-details.php?id=tamayouz-plus"],
                ["name" => "Mawsimi Loan", "href" => "loan-details.php?id=mawsimi"],

            ]
        ],
        [
            "name" => "Success Stories",
            "href" => "success-stories.php"
        ],
        [
            "name" => "Blog",
            "href" => "news.php"
        ],
        [
            "name" => "Apply for a Loan",
            "href" => "application-form.php",
            "active" => true
        ],
        [
            "name" => "Contact Us",
            "href" => "index.php#contact"
        ],
    ],
    "logo" => "assets/img/logo-ar-eng-02.webp",
];