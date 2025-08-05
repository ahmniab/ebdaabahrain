<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="موقع بنك الإبداع البحرين - فرص وظيفية، خدمات تمويلية، دعم المشاريع الصغيرة والمتوسطة.">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>من نحن</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- خطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-4.1.1.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/min/main.css">
    <link rel="stylesheet" href="css/min/about-us.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <main class="container py-5" style="background: linear-gradient(135deg, #f8fff8 0%, #e9f9f7 100%); border-radius: 24px; box-shadow: 0 4px 32px rgba(59,168,162,0.07);">
        <header class="section-header mb-5">
            <h2 class="section-title" style="color:#2E8F36;">من نحن</h2>
            <p class="section-subtitle" style="color:#3BA8A2;">
                ندعم مشاريع التمويل الأصغر بفلسفة تمكين وتنمية مهارات الفئات الأقل حظاً، وخصوصاً النساء، لتحسين ظروف حياتهن
            </p>
        </header>

        <nav>
            <ul class="nav nav-tabs about-tabs d-flex justify-content-center mb-4" role="tablist" style="background:rgba(255,255,255,0.7);">
                <li class="nav-item">
                    <a class="nav-link" href="about-overview.php" role="tab">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-board.php" role="tab">أعضاء مجلس الإدارة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.php" role="tab">فريق المبدعين</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-partners.php" role="tab">شركاؤنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-financial.php" role="tab">التقارير المالية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-governance.php" role="tab">تقارير الحوكمة</a>
                </li>
            </ul>
        </nav>
        <div class="text-center my-5">
            <p>يرجى اختيار أحد التبويبات أعلاه للاطلاع على المعلومات.</p>
        </div>
    </main>
    <?php include "footer.php"; ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script>
        // Tab functionality
        const firstTab = document.querySelector(".tabAnchor li:first-child");
        const firstContent = document.querySelector(".tabContent");
        if (firstTab) firstTab.classList.add("active");
        if (firstContent) firstContent.style.display = "block";

        document.querySelectorAll(".tabAnchor li a").forEach(tab => {
            tab.addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelectorAll(".tabAnchor li").forEach(li => li.classList.remove("active"));
                document.querySelectorAll(".tabContent").forEach(content => content.style.display = "none");
                this.parentElement.classList.add("active");
                const targetEl = document.querySelector(this.getAttribute("href"));
                if (targetEl) targetEl.style.display = "block";
            });
        });

        // Initialize accordion if exists
        if (document.getElementById("accordion")) {
            $("#accordion").accordion();
        }
        // Video handling
        function openVideo() {
            const section = document.getElementById("Ebdaa_video");
            if (section) section.scrollIntoView({
                behavior: 'smooth'
            });
            setTimeout(() => {
                $('#Bank_Video1').modal('show');
            }, 800);
        }
    </script>


</body>

</html>