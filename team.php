<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فريق الإبداع</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome -->
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " rel="stylesheet">

    <link rel="stylesheet" href="css/team.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="header">
        <h1>الإدارة التنفيذية</h1>
    </div>
    <div class="stuff-item leader" data-toggle="modal" data-target="#KhaledModal">
        <div class="img-container">
            <img loading="lazy" src="assets/img/stuff/pic-all-01.webp" alt="stuff img">
        </div>
        <div class="info-container">
            <h3>الدكتور خالد وليد الغزاوى</h3>
            <p>المدير التنفيذى</p>
        </div>
    </div>
    <div class="stuff-container">
        <div class="d-flex justify-content-around flex-wrap">
            <div class="stuff-item" data-toggle="modal" data-target="#hamzaModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-07.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>حمزة القطشيات</h3>
                    <p>مدير العمليات</p>
                </div>
            </div>
            <div class="stuff-item" data-toggle="modal" data-target="#FatmaModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-06.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>فاطمه كمال</h3>
                    <p>مسؤول اول تدقيق عمليات</p>
                </div>
            </div>
            <div class="stuff-item" data-toggle="modal" data-target="#MashaelModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-02.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>مشاعل عدنان صالح</h3>
                    <p>المدير المالى</p>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-around flex-wrap">
            <div class="stuff-item" data-toggle="modal" data-target="#MoHaddadModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-05.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>محمد الحداد</h3>
                    <p>السكرتير التنفيذي</p>
                </div>
            </div>
            <div class="stuff-item" data-toggle="modal" data-target="#YousefModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-04.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>يوسف قمبر</h3>
                    <p>مسؤول اول الموارد البشرية و الشؤون الإدارية</p>
                </div>
            </div>
            <div class="stuff-item" data-toggle="modal" data-target="#aliModal">
                <div class="img-container">
                    <img loading="lazy" src="assets/img/stuff/pic-all-03.webp" alt="stuff img">
                </div>
                <div class="info-container">
                    <h3>على عيسى</h3>
                    <p>مسؤول اول تكنولوجيا المعلومات</p>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="stuff-item" data-toggle="modal" data-target="#HanaaModal">
            <div class="img-container">
                <img loading="lazy" src="assets/img/stuff/pic-all-05.webp" alt="stuff img">
            </div>
            <div class="info-container">
                <h3>هناء سلمان</h3>
                <p>مسؤول أول أتمان</p>
            </div>
        </div>
        <div class="stuff-item" data-toggle="modal" data-target="#MohannadModal">
            <div class="img-container">
                <img loading="lazy" src="assets/img/stuff/pic-all-04.webp" alt="stuff img">
            </div>
            <div class="info-container">
                <h3>مهند محمد علي</h3>
                <p>نائب مدير العمليات والمبيعات</p>
            </div>
        </div>

    </div>
    </div>
    <!-- Modals for Team Bios -->
    <div class="modal fade team-modal" id="KhaledModal" tabindex="-1" role="dialog" aria-labelledby="KhaledModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
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
                <div class="modal-header" dir="ltr">
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
                <div class="modal-header" dir="ltr">
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
                <div class="modal-header" dir="ltr">
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
                <div class="modal-header" dir="ltr">
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
                <div class="modal-header" dir="ltr">
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
    <div class="modal fade team-modal" id="FatmaModal" tabindex="-1" role="dialog" aria-labelledby="FatmaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="FatmaModalLabel">فاطمة كمال</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>تشغل فاطمة وظيفة مساعد ضابط الامتثال ومسؤول تدقيق العمليات في الوقت الحالي، وقد تخرجت من جامعة البحرين بدرجة البكالوريوس في تخصص الأعمال المصرفية والمالية سنة ( 2012) ، وألتحقت بشهر فبراير 2018 لشركة الإبداع للتمويل متناهي الصغر في وظيفة "موظف استقبال"، ثم تدرجت في الوظائف الى مسؤول خدمات الزبائن في الشركة بالاضافة الى تسلمها مهام مسؤول ائتمان لاحقاً، حتى وصولها لوظيفتها الحالية وهي مسؤول تدقيق العمليات.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="HanaaModal" tabindex="-1" role="dialog" aria-labelledby="HanaaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="HanaaModalLabel">هناء سلمان</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        تشغل هناء منصب مسؤول أول الائتمان، وقد انضمت للشركة 2016 عام حيث بدأت كأخصائي أقراض ومن بعدها تم تعيينها كرئيس مجموعة ولحسن أداؤها وما تتمتع به من شخصية قيادية تم تعيينها مدير فرع، وقد تم ترفيعها في اكتوبر 2019 لتصبح في منصب مسؤول أول الائتمان. تحمل شهادة البكالوريوس في ادارة الاعمال من الجامعة العربية المفتوحة وقد حضرت العديد من الدورات وورش العمل المتخصصة في مجال التمويل الاصغر، وتقوم السيدة هناء في الوقت الحالي استكمال برنامج الدبلوم الدولي للامتثال ICA.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="MohannadModal" tabindex="-1" role="dialog" aria-labelledby="MohannadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="MohannadModalLabel">مهند محمد علي</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        يشغل السيد مهند وظيفة مدير الفرع الرئيسي ونائب مدير العمليات والمبيعات، وقد تم تعيين السيد مهند في الشركة في شهر مارس 2015 في وظيفة ضابط اقراض، وقد تدرج السيد مهند في الوظائف حتى وصوله مؤخراً لوظيفة نائب مدير العمليات ومدير الفرع الرئيسي، ويحمل السيد مهند شهادة البكالوريوس من جامعة النيلين لعلوم الرياضيات والاحصاء.


                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade team-modal" id="MoHaddadModal" tabindex="-1" role="dialog" aria-labelledby="MoHaddadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="ltr">
                    <h5 class="modal-title" id="MoHaddadModalLabel">محمد الحداد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        انضم للشركة عام 2015 حيث بدأ كأخصائي إقراض، ومن بعدها تم ترفيعه كرئيس مجموعة، ولحسن أداؤه وما يتمتع به من شخصية قيادية تم ترفيعه لمدير فرع، ولحسن أداءه تم ترفيعه إلى نائب مسؤول أول تحصيل، وعندما أثبت جدارته وتفانيه أكثر في العمل تم ترفيعه إلى مدير العمليات في عام 2024، وقد يشغل الآن مسؤول العلاقات العامة ومدير المكتب التنفيذي .
                    </p>
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