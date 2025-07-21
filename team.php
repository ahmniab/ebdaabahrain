<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فريق الإبداع</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/team.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section class="section" id="team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">فريق الإبداع</h2>
                <hr class="lines" />
                <p class="section-subtitle ar-dir">نكون معا، هذه هي البداية، والبقاء معا هو التقدم، والعمل معا هو النجاح.</p>
            </div>
            <!-- CEO Highlighted Card -->
            <div class="ceo-card-wrapper mb-5 d-flex justify-content-center">
                <div class="ceo-card team-card position-relative" data-toggle="modal" data-target="#KhaledModal" style="max-width: 480px; width:100%; padding:2.5rem 2rem 2rem 2rem; box-shadow: 0 12px 40px 0 rgba(46,143,54,0.18);">
                    <!-- <div class="ceo-badge" style="position:absolute;top:18px;left:18px;background:linear-gradient(90deg,#FFD700,#FFF7C2);color:#2E8F36;font-weight:700;padding:6px 18px;border-radius:16px;font-size:1.1rem;box-shadow:0 2px 8px rgba(255,215,0,0.10);">الرئيس التنفيذي</div> -->
                    <img src="assets/img/team/Khaled.jpg" alt="خالد الغزاوي" class="team-img" style="width:140px;height:140px;border-width:6px;">
                    <div class="team-name" style="font-size:1.7rem;">د/ خالد الغزاوي</div>
                    <div class="team-role" style="font-size:1.15rem;">الرئيس التنفيذي</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#KhaledModal" style="font-size:1.1rem;padding:12px 36px;">السيرة الذاتية</button>
                </div>
            </div>
            <div class="team-grid">
                <!-- Team Member 2 -->
                <div class="team-card" data-toggle="modal" data-target="#YousefModal">
                    <img src="assets/img/team/Yousef.jpg" alt="يوسف قمبر" class="team-img">
                    <div class="team-name">يوسف قمبر</div>
                    <div class="team-role">مسؤول موارد بشرية وإدارية</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#YousefModal">السيرة الذاتية</button>
                </div>
                <!-- Team Member 3 -->
                <div class="team-card" data-toggle="modal" data-target="#aliModal">
                    <img src="assets/img/team/ali.jpg" alt="علي عيسى محمد" class="team-img">
                    <div class="team-name">علي عيسى محمد</div>
                    <div class="team-role">مسؤول تكنولوجيا المعلومات</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#aliModal">السيرة الذاتية</button>
                </div>
                <!-- Team Member 4 -->
                <div class="team-card" data-toggle="modal" data-target="#hanaModal">
                    <img src="assets/img/team/hana.jpg" alt="هناء سلمان" class="team-img">
                    <div class="team-name">هناء سلمان</div>
                    <div class="team-role">مسؤول أول أتمان</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#hanaModal">السيرة الذاتية</button>
                </div>
                <!-- Team Member 5 -->
                <div class="team-card" data-toggle="modal" data-target="#MashaelModal">
                    <img src="assets/img/team/Mashael.jpg" alt="مشاعل صالح" class="team-img">
                    <div class="team-name">مشاعل صالح</div>
                    <div class="team-role">مدير مالي</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#MashaelModal">السيرة الذاتية</button>
                </div>
                <!-- Team Member 6 -->
                <div class="team-card" data-toggle="modal" data-target="#hamzaModal">
                    <img src="assets/img/team/hamza_new.jpg" alt="حمزة القطيشات" class="team-img">
                    <div class="team-name">حمزة القطيشات</div>
                    <div class="team-role">مسؤول أول تحصيل</div>
                    <button class="team-bio-btn" data-toggle="modal" data-target="#hamzaModal">السيرة الذاتية</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals for Team Bios -->
    <div class="modal fade team-modal" id="KhaledModal" tabindex="-1" role="dialog" aria-labelledby="KhaledModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="KhaledModalLabel">خالد الغزاوي - الرئيس التنفيذي</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    في 2014/04/01، انضم د. خالد وليد الغزاوي كرئيس تنفيذي لشركة الإبداع للتمويل متناهي الصغر في البحرين حاملاً معه ما يزيد عن 19 عاماً من الخبرة في مجال التمويل الأصغر وأكثر من ثمانية سنوات من الخبرة في القطاع المالي والمصرفي.<br>
                    د. الغزاوي يحمل شهادة دكتوراه مهنية في إدارة الأعمال الدولية من الولايات المتحدة الأمريكية، ودرجتي الماجستير والبكالوريوس في إدارة الأعمال والتمويل من الأردن، مدرّب مجاز في عدة مجالات في علم التمويل الأصغر، مثل التخطيط للأعمال، إدارة التعثر، ضبط معدل الفائدة، المحاسبة، إدارة الأخطار التشغيلية والتحليل المالي. <br>
                    قبل انضمامه لأسرة أبداع البحرين ، شغل د. الغزاوي منصب المدير العام لشركة جرامين-جميل للتمويل الأصغر محدودة المسؤولية في دبي – الإمارات العربية المتحدة، وقبلها كمستشار مقيم لصندوق الخليج العربي للتنمية (الأجفند) في لبنان، حيث قاد هناك الجهود الرامية لإنشاء شركة الابداع للتمويل الأصغر في لبنان، واستطاع تدريب وبناء كفاءة فريق من العاملين وإطلاق أنشطة البنك التمويلية للفقراء ومحدودي الدخل خلال فترة لم تتجاوز 90 يومًا. <br>
                    قبل ذلك مباشرة، وبين عامي 2009 و2012، عمل د. الغزاوي كرئيس تنفيذي للمؤسسة الأولى للتمويل متناهي الصغر في مصر والتي تتبع لوكالة الأغا خان للتمويل متناهي الصغر ومقرها جنيفا – سويسرا، ومستشار لشركة جودة التمويل الدولية والتي تعمل من القاهره في الفترة بين 2007 و2009، وفي الفترة من بداية عام 2006 وحتى منتصف 2007، عمل د. الغزاوي في الولايات المتحدة الأمريكية كمدير لبرنامج الشرق الأوسط الكبير في بنوك القرية العالمية (فينكا)، وقبلها مباشرة وبين عامي 1999 و 2005، كان د. الغزاوي أحد المؤسسين والرئيس التنفيذي للشركة الأردنية لتمويل المشاريع الصغيرة (تمويلكم) وهي إحدى الشركات الرائدة في مجال التمويل الأصغر في الأردن تملكها بالكامل مؤسسة الملكة نور الحسين ومولتها الوكالة الأميركية للتنمية الدولية، وفي عهده أصبحت (تمويلكم) واحدة من أهم الشركات المقدمة لخدمات التمويل الأصغر في الأردن، وحازت جوائز عالمية مرموقة في مناسبات مختلفة نظير شفافيتها وتفانيها في الحدّ من الفقر والحاكمية الرشيدة.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="YousefModal" tabindex="-1" role="dialog" aria-labelledby="YousefModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="YousefModalLabel">يوسف قمبر - مسؤول موارد بشرية وإدارية</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    انضم السيد يوسف قمبر لأسرة أبداع البحرين منذ تأسيسه في يوليو 2009 كمنسق إداري في قسم الموارد البشرية والشئون الإدارية، ليتسلم في يوليو 2011 مهام سكرتير تنفيذي بمكتب الرئيس التنفيذي، وسكرتير لمجلس الإدارة، ثم تدرج في مكتب الرئيس التنفيذي حتى استلم مهام مدير مكتب الرئيس التنفيذي، وقد أظهر السيد يوسف مهارات متميزة في العمل واستمر في التدرج في الوظائف حتى استلامه منصب مشرف أول لقسم الموارد البشرية والشئون الإدارية في البنك في ابريل 2016. <br>
                    يحمل السيد يوسف دبلوم متخصص من معهد البحرين للتدريب ويدرس حالياً في الجامعة العربية المفتوحة للحصول على درجة البكالوريوس في إدارة الأعمال، كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على العديد من الشهادات في مجال صناعة التمويل الأصغر وشهادات متخصصة في الموارد البشرية والشئون الإدارية.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="aliModal" tabindex="-1" role="dialog" aria-labelledby="aliModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aliModalLabel">علي عيسى محمد - مسؤول تكنولوجيا المعلومات</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    يعمل السيد علي محمد في شركة ابداع البحرين منذ عام 2018 ويحمل شهادة دبلوم الوطنية من معهد البحرين في تخصص نظم المعلومات.<br>
                    عمل السيد علي قبل انضمامه الى اسرة أبداع البحرين في شركة المؤيد للمقاولات في قسم تقنية المعلومات لمدة تسع سنوات قبل ان ينظم الى اسرة أبداع البحرين بوظيفة داعم نظم معلومات، ثم تسلق السلم الوظيفي الى ان وصل الى منصب مسؤول اول تقنية المعلومات. كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على أكثر من رخصة عالمية في مجال تقنية المعلومات.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="hanaModal" tabindex="-1" role="dialog" aria-labelledby="hanaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hanaModalLabel">هناء سلمان - مسؤول أول أتمان</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    انضمت الآنسة هناء سلمان لشركة ابداع البحرين في اغسطس 2016 كأخصائية اقراض في دائرة العمليات، وسرعان ما أثبتت نفسها للعمل بكل اخلاص وتفاني، وبدأت هناء بالتدرج في عملها لتتسلم مهام مشرف مجموعة في مايو 2017 حيث تميزت بإتقانها للمهارات القيادية واستمرت في التدرج وبذل ما في وسعها في نفس الدائرة إلى أن وصلت إلى منصب مدير فرع في مايو 2018، ولكونها متميزة وحريصة على تحقيق أهدافها تشغل اليوم هناء منصب مسئول أول للائتمان حيث قد عينت بذلك المنصب منذ أكتوبر 2019.<br>
                    هناء من الفئة المخلصة والمثابرة لعملها كما تطمح دائماً لتحقيق اهدافها من خلال تميزها وحرصها على أن تكون دائماً لأفضل مستوى، حيث أنها اضافت الكثير لهذه الشركة لكونها من الاشخاص الذين لديهم ولاء كبير لعملائهم<br>
                    الآنسة هناء تحمل شهادة البكالوريوس في إدارة الاعمال من الجامعة العربية المفتوحة تخصص النظم الادارية، وحصلت أيضا على العديد من الشهادات التدريبية التي تهتم بشكل أساسي في التمويل الأصغر، وخدمات الزبائن والادارة ومهارات القيادة. شاركت هناء في العديد من المحافل الدولية والعديد من الفعاليات التي تخدم الشركة والمجتمع البحريني كافة
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="MashaelModal" tabindex="-1" role="dialog" aria-labelledby="MashaelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MashaelModalLabel">مشاعل صالح - مدير مالي</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    تحمل الآنسة مشاعل عدنان صالح شهادة البكالوريوس في المحاسبة من جامعة بوليتكنيك البحرين، وقد عملت في بنك سيتي الاسلامي الاستثماري لمدة سنتين قبل ان تنضم لأسرة أبداع البحرين بوظيفة محاسب، وما لبثت أن ترقت خلال فترة وجيزة نظراً لكفائتها وعملها المتميز إلى منصب المحاسب الرئيسي للبنك اعتباراً من الربع الأول من عام 2018، وقد حضرت الآنسة مشاعل دورات متعددة في العمل المصرفي والإدارة المالية والتخطيط المالي.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="hamzaModal" tabindex="-1" role="dialog" aria-labelledby="hamzaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hamzaModalLabel">حمزة القطيشات - مسؤول أول تحصيل</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    يعمل السيد حمزه القطيشات في بتك الأبداع منذ مارس 2015، وتدرج في عدة مناصب وظيفية حتى وصل إلى منصب مسؤول تحصيل اول بداية عام 2018.<br>
                    بدأ حمزه مسيرته في البنك كأخصائي قروض (ضابط قروض)، ثم تم تحويله الى قسم التحصيل (ضابط تحصيل داخلي)، وقد أظهر السيد حمزه مهارات متميزة في العمل حتى استلامه مسؤول تحصيل في فرع عالي ثم جرى ترفيعه إلى مسؤول تحصيل اول. كما حضر العديد من المؤتمرات والدورات الاحترافية وحصل على العديد من الشهادات في مجال صناعة التمويل الأصغر.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>