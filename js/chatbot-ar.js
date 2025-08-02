 // تحويل بيانات PHP إلى JavaScript مع تنقية المحتوى
 function sanitizeInput(input) {
    const div = document.createElement('div');
    div.textContent = input;
    return div.innerHTML;
  }

  const loans = {
    "سيدتي": {
      "url": "loan-details.php?id=saydati",
        "title": "قرض سيدتي",
        "description": "الآن إبداع البحرين يقدم قروض صغيرة مخصصة للسيدات المنتجات في المنزل لغايات دعم مشاريعهن وتطويرها. تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.",
        "amount": "200 - 1000 دينار",
        "period": "12 شهر",
        "conditions": [
            "أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.",
            "يجب أن يكون للمقترضة مشروع قائم أو لديها فكرة مشروع.",
            "أن لا يقل عمر المقترضة عن 20 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "إثبات دخل المشروع أو شهادة راتب للموظفات الاتي يرغبن ببدء مشاريعهن.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "الإبداع": {
      "url": "loan-details.php?id=ebdaa",
        "title": "قرض الإبداع",
        "description": "الآن إبداع البحرين يقدم قروض صغيرة مخصصة للذكور الذين لديهم مشاريع تدار من المنزل لغاية دعم مشاريعهم وتطويرها. تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.",
        "amount": "200 - 1000 دينار",
        "period": "12 شهر",
        "conditions": [
            "أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.",
            "يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.",
            "أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "الأمل": {
      "url": "loan-details.php?id=amal",
        "title": "قرض الأمل",
        "description": "الآن إبداع البحرين يقدم قرض الأمل المخصص لدعم المشاريع التجارية والخدماتية والصناعية بشروط ميسرة. تتراوح قيمة القرض بين 1000 و 2400 دينار تسدد على مدة 24 شهر.",
        "amount": "1000 - 2400 دينار",
        "period": "24 شهر",
        "conditions": [
            "أن يستغل القرض لغايات دعم المشاريع الصغيرة أو المتنقلة.",
            "يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.",
            "أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "التميز": {
      "url": "loan-details.php?id=tamayouz",
        "title": "قرض التميز",
        "description": "الآن يقدم إبداع البحرين قرض التميز لدعم المشاريع التجارية والصناعية والخدماتية المرخصة وبشروط ميسرة. تتراوح قيمة القرض بين 1500 و 7000 دينار تسدد على مدة 36 شهرا.",
        "amount": "1500 - 7000 دينار",
        "period": "36 شهر",
        "conditions": [
            "يجب أن يكون للمقترض مشروع مرخص.",
            "أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.",
            "أن لا يقل عمر المشروع عن 3 سنوات.",
            "أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "نسخة من السجل التجاري أو ترخيص المشروع.",
            "إثبات دخل المشروع.",
            "كشف الحساب البنكي للمشروع لآخر ستة شهور.",
            "أن لا تقل صلاحية السجل التجاري عن 6 أشهر.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "الموسمي": {
      "url": "loan-details.php?id=mawsimi",
        "title": "القرض الموسمي",
        "description": "برسوم إدارية بسيطة وإجراءات سريعة وميسرة، شركة إبداع البحرين تمنح أصحاب المشاريع فرصة شراء بضاعة مدرسية إضافية وتقسيطها على 24 شهر، بحيث يبدأ السداد بعد نهاية الشهر الأول.",
        "amount": "حسب النشاط",
        "period": "24 شهر (بدء السداد بعد الشهر الأول)",
        "conditions": [
            "أن لا يقل عمر المقترض عن 23 عام ولا يزيد عن 60 عام.",
            "يجب أن يكون للمقترض مصدر دخل ثابت ومستمر.",
            "أن يستغل القرض لغايات شراء المستلزمات الدراسية."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "آخر سلب راتب لموظفي القطاع الحكومي.",
            "شهادة راتب لموظفي القطاع الخاص.",
            "كشف حساب البنك (آخر ثلاث شهور)."
        ]
    },
    "التفوق": {
      "url": "loan-details.php?id=tafawoq",
        "title": "قرض التفوق",
        "description": "الآن يقدم إبداع البحرين قرض التفوق لدعم المشاريع التجارية والصناعية والخدماتية المرخصة بشروط مرنة وميسرة. تتراوح قيمة القرض بين 1000 و 7000 دينار تسدد على فترة من 6 إلى 24 شهر.",
        "amount": "1000 - 7000 دينار",
        "period": "6 - 24 شهر",
        "conditions": [
            "يجب أن يكون للمقترض مشروع مرخص.",
            "أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.",
            "أن لا يقل عمر المشروع عن 3 سنوات.",
            "أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "نسخة من السجل التجاري أو ترخيص المشروع.",
            "إثبات دخل المشروع.",
            "كشف الحساب البنكي للمشروع لآخر ستة شهور.",
            "أن لا تقل صلاحية السجل التجاري عن 6 أشهر.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "النجاح": {
      "url": "loan-details.php?id=najah",
        "title": "قرض النجاح",
        "description": "الآن يقدم إبداع البحرين قروض صغيرة لأصحاب المشاريع المنزلية والمتنقلة لغايات تطويرها وزيادة رأس مالها العامل. تتراوح قيمة القرض بين 600 و 1400 دينار تسدد خلال 18 شهراً.",
        "amount": "600 - 1400 دينار",
        "period": "18 شهر",
        "conditions": [
            "أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.",
            "يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.",
            "أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز أو رخصة القيادة.",
            "إثبات دخل المشروع أو شهادة راتب.",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    },
    "التميز بلس": {
      "url": "loan-details.php?id=tamayouz-plus",
        "title": "قرض التميز بلس",
        "description": "يقدم قرض التميز+ لدعم المشاريع التجارية والخدماتية والصناعية وبشروط ميسرة. تتراوح قيمة القروض بين 7500 و 10000 دينار، وتسدد خلال 36 شهر.",
        "amount": "7500 - 10000 دينار",
        "period": "36 شهر",
        "conditions": [
            "أن يستغل القرض لغايات دعم مشاريع قائمة أو بدء مشروع.",
            "أن لا يقل عمر المقترض عن 25 ولا يزيد عن 60 عام.",
            "أن لا يقل عمر المشروع عن سنة."
        ],
        "documents": [
            "نسخة من البطاقة الذكية سارية المفعول.",
            "نسخة من الجواز ساري المفعول.",
            "نسخة من السجل التجاري أو ترخيص المشروع.",
            "إثبات دخل المشروع.",
            "فاتورة كهرباء السجل التجاري.",
            "عقد إيجار السجل التجاري.",
            "إثبات الدخل الثابت (في حالة بدء مشروع).",
            "اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."
        ]
    }
};
  const branches = [
    {
        "name": "الإدارة العامة",
        "phone": "17381000",
        "email": "info@ebdaabahrain.com",
        "location": "المنامة - البحرين"
    },
    {
        "name": "فرع العاصمة",
        "phone": "17381003",
        "email": "almanama@ebdaabahrain.com",
        "location": "المنامة - البحرين"
    },
    {
        "name": "فرع عالي",
        "phone": "17381013",
        "email": "aali@ebdaabahrain.com",
        "location": "عالي - البحرين"
    },
    {
        "name": "فرع مدينة حمد",
        "phone": "17381018",
        "email": "hamad.town@ebdaabahrain.com",
        "location": "مدينة حمد - البحرين"
    }
];
  const workingHours = {
    "regular": "الأحد - الأربعاء: 8 صباحاً - 4 مساءً",
    "thursday": "الخميس: 8 صباحاً - 1:30 مساءً",
    "weekend": "الجمعة والسبت: إجازة"
    };
  const jobs = {
    "تحصيل": {
        "title": "أخصائي تحصيل",
        "description": "متابعة تحصيل مستحقات العملاء المتأخرين",
        "objectives": "المحصل هو الشخص المعني بزيارة العملاء المتأخرين عن السداد لمتابعة تحصيل ما يستحق عليهم لصالح البنك.",
        "responsibilities": [
            "التحري عن صحة المعلومات المقدمة الى ضباط الاقراض.",
            "متابعة العملاء المتأخرين عن السداد بصورة مستمرة الى حين تحصيل المستحقات.",
            "التنسيق مع مشرفي وضابط الاقراض المعنيين فيما يخص العميل المتأخر عن السداد لايجاد الوسائل اللازمة لحل الاشكال مع هذا العميل.",
            "متابعة القروض المجدولة للتأكد من انها تسدد في موعدها حسب اجراءات الجدولة.",
            "اعداد انذارات المحامي الموجهة الى العملاء المتأخرين عن السداد وكفلائهم.",
            "المتابعة مع المستشار القانوني بخصوص الملفات المحولة اليه.",
            "متابعة أي إجراء قانوني تم اتخاذه بما فيها متابعة التحصيلات لدى دائرة الاجراء.",
            "التنسيق مع العمليات فيما يخص تحصيل الدفعات والغرامات المتأخرة.",
            "اعداد كافة التقارير والكشوف المتعلقة بالاقساط المستحقة.",
            "القيام باية واجبات اخرى تناط به من قبل مسؤوله المباشر."
        ],
        "qualifications": "بكالوريوس او دبلوم في تخصصات العلوم الإدارية أو ما يعادلها",
        "experience": "معرفة في القوانين المرعية والمتعلقة بهذا الخصوص. معرفة بإجراءات المتابعة والتحصيل.",
        "skills": [
            "أن يتمتع بمهارات قيادية.",
            "إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة.",
            "إتقان استخدام الحاسوب."
        ]
    },
    "اقراض": {
        "title": "أخصائي إقراض",
        "description": "الترويج للحصول على عملاء ودراسة الطلبات والزيارة الميدانية بالإضافة إلى التحصيل والمحافظة على جودة المحفظة الإئتمانية.",
        "objectives": "الوصول إلى العملاء وتقديم قروض مناسبة وتحقيق أهداف البنك الائتمانية.",
        "responsibilities": [
            "ترويج خدمات ومنتجات البنك للحصول على طلبات الإقراض والوصول إلى العدد المطلوب من العملاء.",
            "الزيارة الميدانية للعملاء حسب الخطط والسياسات المعدة من قبل البنك.",
            "مراجعة طلبات الإقراض للتأكد من صحتها وصحة الإجراءات المتبعة.",
            "التأكد من كون العملاء قد استكملوا جميع الوثائق اللازمة.",
            "عمل دراسة متكاملة تبين القدرة المالية للعملاء.",
            "تقديم تقارير دورية إلى مسئوله المباشر تتعلق بمحفظته الائتمانية.",
            "المتابعة المستمرة للمحفظة الائتمانية والتركيز على السداد في الوقت المحدد.",
            "القيام بأية واجبات أخرى تناط به من قبل مسؤوله المباشر."
        ],
        "qualifications": "بكالوريوس أو دبلوم في تخصصات العلوم الإدارية والعلوم المالية والمصرفية.",
        "experience": "لا يحتاج الخبرة.",
        "skills": [
            "أن يتمتع بمهارات قيادية.",
            "إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة.",
            "إتقان استخدام الحاسوب.",
            "القدرة على تدريب الموظفين."
        ]
    },
    "عام": {
        "title": "تقديم عام",
        "description": "إذا لم تجد الوظيفة المناسبة لك من بين الوظائف المتاحة، يمكنك التقديم بشكل عام وسنقوم بمراجعة سيرتك الذاتية عند توفر فرص مناسبة.",
        "application_link": "jobs.php"
    }
};
  const faqs = [
    {
        "question": "كم تستغرق عملية الموافقة على القرض؟",
        "answer": "تستغرق عملية المراجعة والموافقة من 1 إلى 2 أيام عمل"
    },
    {
        "question": "هل يمكن سداد القرض قبل نهاية المدة؟",
        "answer": "نعم، يمكن السداد المبكر بدون أي رسوم إضافية"
    },
    {
        "question": "هل توجد رسوم على تقديم الطلب؟",
        "answer": "نعم، هناك رسوم غير قابلة للاسترداد، بالإضافة إلى رسوم إدارية تخصم عند صرف القرض."
    },
    {
        "question": "ما هي غرامة التأخير في السداد؟",
        "answer": "6 دينار بحريني عن كل يوم تأخير في سداد أي دفعة من القرض."
    },
        {
        "question": "هل يمكن لي أن أقوم بتأجيل أي من دفعات القرض؟",
        "answer": " بالتأكيد ، يمكن في حال مواجهتك لظروف طارئة، تأجيل ما لا يزيد عن 20% من دفعات قرضك، وبشرط دفع رسوم التاجيل مقدماَ، بالإضافة إلى أرباح المدة بين موعد الدفعة الأصلي وآخر دفعة من دفعات الفرض."
    },
    {
        "question": "هل يتم التحقق من المعلومات بعد تقديم الطلب؟",
        "answer": "نعم، يتم التحقق من خلال شركة بنفت وجهات حكومية أو خاصة، ويشمل ذلك زيارات ميدانية."
    },
    {
        "question": "هل يمكنني استرجاع مستنداتي بعد التقديم؟",
        "answer": "لا يمكن استرجاع المستندات حتى في حال رفض الطلب."
    },
    {
        "question": "هل يمكن استخدام معلوماتي أو صوري لأغراض تسويقية؟",
        "answer": "نعم، قد تستخدم الإبداع صورك أو معلومات مشروعك في النشرات الترويجية بعد الموافقة على القرض."
    },
    
    {
        "question": "هل تتم مشاركة بياناتي مع جهات خارجية؟",
        "answer": "نعم، قد تتم مشاركة بيانات الطلب مع جهات رسمية أو خاصة مثل شركة بنفت أو الممولين ، وبما يتوافق مع قانون حماية البيانات الشخصية ساري المعول."
    }
];
const msg_options = `
<div style="margin-top: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
        <button class="quick-btn" onclick="showLoanMenu()" aria-label="عرض أنواع القروض">
          <i class="fas fa-hand-holding-usd"></i> الاستفسار عن القروض
        </button>
        <button class="quick-btn" onclick="showBranches()" aria-label="عرض فروع البنك">
          <i class="fas fa-map-marker-alt"></i> مواقع الفروع
        </button>

        <button class="quick-btn" onclick="showWorkingHours()" aria-label="عرض أوقات العمل">
          <i class="fas fa-clock"></i> أوقات العمل
        </button>

        <button class="quick-btn" onclick="showFAQs()" aria-label="عرض الأسئلة الشائعة">
          <i class="fas fa-question-circle"></i> الأسئلة الشائعة
        </button>
        
        <button class="quick-btn" onclick="showJobsMenu()" aria-label="عرض الوظائف المتاحة">
          <i class="fas fa-briefcase"></i> الوظائف المتاحة
        </button>
        
        
        
        
        <button class="quick-btn" onclick="showSalesWhatsApp()" aria-label="فتح واتساب المبيعات">
          <i class="fab fa-whatsapp"></i> المزيد من المعلومات
        </button>
      </div>

      
      <div class="d-flex justify-content-center align-items-center mt-1 mb-2">
        <a class="quick-btn p-3" href="application-form.php" target="_blank">
          <i class="fas fa-file-signature"></i> التقديم على قرض
        </a>
      </div>
`

  // تهيئة الشات بوت
  window.onload = function() {
    setTimeout(showGreeting, 1000);
  };

  function toggleChat() {
    const box = document.getElementById('chatbot-box');
    const toggleBtn = document.getElementById('chatbot-toggle');
    
    if (box.classList.contains('show')) {
      box.classList.remove('show');
      toggleBtn.innerHTML = '<i class="fas fa-comments"></i>';
      toggleBtn.setAttribute('aria-label', 'فتح شات البوت');
    } else {
      box.classList.add('show');
      toggleBtn.innerHTML = '<i class="fas fa-times"></i>';
      toggleBtn.setAttribute('aria-label', 'إغلاق الشات');
      document.getElementById('user-input').focus();
    }
  }

  function scrollToBottom() {
    const chatBody = document.getElementById('chatbot-body');
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  function showTypingIndicator() {
    const chatBody = document.getElementById('chatbot-body');
    const typingDiv = document.createElement('div');
    typingDiv.className = 'message bot typing-indicator';
    typingDiv.innerHTML = '<span></span><span></span><span></span>';
    chatBody.appendChild(typingDiv);
    scrollToBottom();
    return typingDiv;
  }

  function hideTypingIndicator(typingDiv) {
    if (typingDiv && typingDiv.parentNode) {
      typingDiv.parentNode.removeChild(typingDiv);
    }
  }

  function insertBotMessage(html) {
    const chatBody = document.getElementById('chatbot-body');
    const botMsg = document.createElement('div');
    botMsg.className = 'message bot';
    botMsg.innerHTML = html;
    chatBody.appendChild(botMsg);
    scrollToBottom();
  }

  function insertUserMessage(message) {
    const chatBody = document.getElementById('chatbot-body');
    const userMsg = document.createElement('div');
    userMsg.className = 'message user';
    userMsg.textContent = sanitizeInput(message);
    chatBody.appendChild(userMsg);
    scrollToBottom();
  }

  function sendMessage() {
    const input = document.getElementById('user-input');
    const message = input.value.trim();
    if (!message) return;
    
    insertUserMessage(message);
    input.value = '';
    
    const typingDiv = showTypingIndicator();
    
    setTimeout(() => {
      hideTypingIndicator(typingDiv);
      processMessage(message);
    }, 500);
  }

  function processMessage(message) {
    const lowerMsg = message.toLowerCase();
    
    if (lowerMsg.includes('اهلا') || 
        lowerMsg.includes('أهلا') ||
        lowerMsg.includes('مرحبا') ){
      showGreeting('ًأهلاً وسهلا');
    }
    else if (lowerMsg.includes('السلام عليكم') || 
        lowerMsg.includes('السلام') ){
      showGreeting('وعليكم السلام ورحمة الله وبركاته');
    }
    else if (lowerMsg.includes('صباح الخير') || 
        lowerMsg.includes('صباح النور') ){
      showGreeting('صباح النور والسرور');
    }
    else if (lowerMsg.includes('مساء النور') || 
        lowerMsg.includes('مساء الخير') ){
      showGreeting('مساء النور والسرور');
    }
    else if (lowerMsg.includes('قرض') || lowerMsg.includes('اقتراض')) {
      showLoanMenu();
    } 
    else if (lowerMsg.includes('وظيف') || lowerMsg.includes('توظيف')) {
      showJobsMenu();
    }
    else if (lowerMsg.includes('فرع') || lowerMsg.includes('فروع')) {
      showBranches();
    }
    else if (lowerMsg.includes('دوام') || lowerMsg.includes('وقت') || lowerMsg.includes('ساعات')) {
      showWorkingHours();
    }
    else if (lowerMsg.includes('سؤال') || lowerMsg.includes('أسئلة') || lowerMsg.includes('استفسار')) {
      showFAQs();
    }
    else if (lowerMsg.includes('واتساب') || lowerMsg.includes('whatsapp')) {
      showSalesWhatsApp();
    }
    else if (Object.keys(loans).some(loan => lowerMsg.includes(loan.toLowerCase()))) {
      const loanType = Object.keys(loans).find(loan => lowerMsg.includes(loan.toLowerCase()));
      showLoanDetails(loanType);
    }
    else if (Object.keys(jobs).some(job => lowerMsg.includes(job.toLowerCase()))) {
      const jobType = Object.keys(jobs).find(job => lowerMsg.includes(job.toLowerCase()));
      showJobDetails(jobType);
    }
    else {
      showDefaultResponse();
    }
  }
// تفعيل تحويل الصوت إلى نص
function startListening() {
  if (!('webkitSpeechRecognition' in window || 'SpeechRecognition' in window)) {
    alert("متصفحك لا يدعم ميزة التعرف على الصوت.");
    return;
  }

  const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
  recognition.lang = "ar-SA";

  recognition.onresult = function(event) {
    const transcript = event.results[0][0].transcript;
    document.getElementById('user-input').value = transcript;
    sendMessage();
  };

  recognition.onerror = function(event) {
    console.error("حدث خطأ في التعرف على الصوت:", event.error);
  };

  recognition.start();
}
//
  function showGreeting(greeting = '') {
    const now = new Date();
    const hour = now.getHours();
    
    if (greeting === '') {
      if (hour >= 4 && hour < 12) greeting = '☀️ صباح الخير!';
      else if (hour >= 12 && hour < 18) greeting = '🌤️ مساء الخير!';
      else greeting = '🌙 مساء الخير!';
    }
    
    insertBotMessage(`
      ${greeting} 👋<br>
      أنا مساعدك الذكي "مبدع". كيف يمكنني مساعدتك اليوم؟
      
      ${msg_options}
    `);
  }

  function showLoanMenu() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-list"></i> جميع أنواع القروض (${Object.keys(loans).length} أنواع):
      </h3>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
    `;
    
    Object.keys(loans).forEach(loan => {
      html += `
        <a class="quick-btn" href="${loans[loan].url}" aria-label="عرض تفاصيل ${loans[loan].title}">
          <i class="fas fa-file-invoice"></i> ${sanitizeInput(loans[loan].title)}
        </a>
      `;
    });
    
    html += `
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `;
    
    insertBotMessage(html);
  }

  function showLoanDetails(loanType) {
    const loan = loans[loanType];
    
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-info-circle"></i> ${sanitizeInput(loan.title)}
      </h3>
      <p><strong>الوصف:</strong> ${sanitizeInput(loan.description)}</p>
      <p><strong>المبلغ:</strong> ${sanitizeInput(loan.amount)}</p>
      <p><strong>المدة:</strong> ${sanitizeInput(loan.period)}</p>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-clipboard-check"></i> الشروط:
        </h4>
        <ul style="padding-right: 20px;">
    `;
    
    loan.conditions.forEach(condition => {
      html += `<li>${sanitizeInput(condition)}</li>`;
    });
    
    html += `
        </ul>
      </div>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-file-alt"></i> المستندات المطلوبة:
        </h4>
        <ul style="padding-right: 20px;">
    `;
    
    loan.documents.forEach(doc => {
      html += `<li>${sanitizeInput(doc)}</li>`;
    });
    
    html += `
        </ul>
      </div>
      
      <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
        <button class="quick-btn" onclick="showApplicationForm('${loanType}')" aria-label="التقديم على ${loan.title}">
          <i class="fas fa-file-signature"></i> التقديم على القرض
        </button>
        <button class="quick-btn back-btn" onclick="showLoanMenu()" aria-label="العودة لقائمة القروض">
          <i class="fas fa-arrow-left"></i> العودة للقروض
        </button>
      </div>
    `;
    
    insertBotMessage(html);
  }

  function showApplicationForm(loanType) {
    insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-edit"></i> تقديم طلب ${sanitizeInput(loans[loanType].title)}
      </h3>
      <p>يمكنك التقديم الآن عبر أحد الخيارات التالية:</p>
      
      <div style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="application-form.php" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
          <button class="quick-btn" aria-label="فتح موقع البنك للتقديم الإلكتروني">
            <i class="fas fa-laptop"></i> التقديم الإلكتروني
          </button>
        </a>
        
        <a href="tel:${branches[0].phone}" style="text-decoration: none;">
          <button class="quick-btn" aria-label="الاتصال على رقم البنك">
            <i class="fas fa-phone"></i> الاتصال بنا
          </button>
        </a>
      </div>
      
      <div style="background: var(--light); padding: 10px; border-radius: 10px; margin-top: 15px;">
        <p><i class="fas fa-info-circle"></i> يرجى إحضار جميع المستندات المطلوبة عند التقديم</p>
      </div>
      
      <button class="quick-btn back-btn" onclick="showLoanDetails('${loanType}')" style="margin-top: 15px;" aria-label="العودة لتفاصيل القرض">
        <i class="fas fa-arrow-left"></i> العودة لتفاصيل القرض
      </button>
    `);
  }

function showJobsMenu() {
  insertBotMessage(`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-briefcase"></i> الوظائف المتاحة:
    </h3>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
      <button class="quick-btn" onclick="showJobDetails('تحصيل')" aria-label="عرض تفاصيل وظيفة أخصائي تحصيل">
        <i class="fas fa-file-invoice-dollar"></i> أخصائي تحصيل
      </button>
      
      <button class="quick-btn" onclick="showJobDetails('اقراض')" aria-label="عرض تفاصيل وظيفة أخصائي إقراض">
        <i class="fas fa-hand-holding-usd"></i> أخصائي إقراض
      </button>
      
      <button class="quick-btn" onclick="showJobDetails('عام')" aria-label="عرض نموذج التقديم العام">
        <i class="fas fa-user-tie"></i> تقديم عام
      </button>
    </div>
    
    <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
      <i class="fas fa-arrow-left"></i> العودة للرئيسية
    </button>
  `);
}

function showJobDetails(jobType) {
  const job = jobs[jobType];

  let html = `
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-info-circle"></i> ${sanitizeInput(job.title)}
    </h3>
    <p><strong>الوصف الوظيفي:</strong> ${sanitizeInput(job.description)}</p>
  `;

  // الهدف العام
  if (job.objectives) {
    html += `
      <div style="margin-top: 10px;">
        <strong>الهدف العام:</strong> ${sanitizeInput(job.objectives)}
      </div>
    `;
  }

  // المهام والمسؤوليات
  if (job.responsibilities) {
    html += `
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-tasks"></i> المهام والمسؤوليات:</h4>
        <ul style="padding-right: 20px;">
    `;
    job.responsibilities.forEach(item => {
      html += `<li>${sanitizeInput(item)}</li>`;
    });
    html += `</ul></div>`;
  }

  // المؤهلات
  if (job.qualifications) {
    html += `
      <div style="margin-top: 10px;"><strong>المؤهلات الأكاديمية:</strong> ${sanitizeInput(job.qualifications)}</div>
    `;
  }

  // الخبرة
  if (job.experience) {
    html += `
      <div style="margin-top: 10px;"><strong>الخبرة العملية:</strong> ${sanitizeInput(job.experience)}</div>
    `;
  }

  // المهارات
  if (job.skills) {
    html += `
      <div style="margin-top: 15px;">
        <h4 style="color: var(--primary);"><i class="fas fa-lightbulb"></i> المهارات المطلوبة:</h4>
        <ul style="padding-right: 20px;">
    `;
    job.skills.forEach(skill => {
      html += `<li>${sanitizeInput(skill)}</li>`;
    });
    html += `</ul></div>`;
  }

  // المتطلبات (النمط القديم)
  if (job.requirements) {
    html += `
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-clipboard-list"></i> المتطلبات:</h4>
        <ul style="padding-right: 20px;">
    `;
    job.requirements.forEach(req => {
      html += `<li>${sanitizeInput(req)}</li>`;
    });
    html += `</ul></div>`;
  }

  // رابط التقديم
  const link = job.application_link || "jobs.php";

  html += `
    <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
      <a href="${link}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
        <button class="quick-btn" aria-label="فتح صفحة التوظيف في موقع البنك">
          <i class="fas fa-external-link-alt"></i> التقديم الآن
        </button>
      </a>

      <button class="quick-btn back-btn" onclick="showJobsMenu()" aria-label="العودة لقائمة الوظائف">
        <i class="fas fa-arrow-left"></i> العودة للوظائف
      </button>
    </div>
  `;

  insertBotMessage(html);
}


  function showBranches() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-map-marked-alt"></i> فروع الإبداع للتمويل متناهي الصغر:
      </h3>
      <div style="display: grid; gap: 15px; margin-top: 15px;">
    `;
    
    branches.forEach(branch => {
      html += `
        <div style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${sanitizeInput(branch.name)}</h4>
          <p><i class="fas fa-phone"></i> <a href="tel:${branch.phone}" style="color: inherit; text-decoration: none;">${branch.phone}</a></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:${branch.email}" style="color: inherit; text-decoration: none;">${sanitizeInput(branch.email)}</a></p>
          <p><i class="fas fa-map-marker-alt"></i> ${sanitizeInput(branch.location)}</p>
        </div>
      `;
    });
    
    html += `
      </div>
      
      <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="https://maps.google.com?q=بنك+الإبداع+البحرين" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
          <button class="quick-btn" aria-label="فتح خرائط جوجل لعرض الفروع">
            <i class="fas fa-map"></i> عرض على الخريطة
          </button>
        </a>
        
        <button class="quick-btn back-btn" onclick="showGreeting()" aria-label="العودة للصفحة الرئيسية">
          <i class="fas fa-arrow-left"></i> العودة للرئيسية
        </button>
      </div>
    `;
    
    insertBotMessage(html);
  }

  function showWorkingHours() {
    insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-clock"></i> أوقات العمل الرسمية:
      </h3>
      
      <div style="background: white; padding: 15px; border-radius: 10px; margin-top: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <p><strong>${sanitizeInput(workingHours.regular)}</strong></p>
        <p><strong>${sanitizeInput(workingHours.thursday)}</strong></p>
        <p>${sanitizeInput(workingHours.weekend)}</p>
      </div>
      
      <div style="background: var(--light); padding: 10px; border-radius: 10px; margin-top: 10px;">
        <p><i class="fas fa-info-circle"></i> قد تتغير أوقات العمل في المناسبات الرسمية والأعياد</p>
      </div>
      
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `);
  }

  function showFAQs() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-question-circle"></i> الأسئلة الشائعة:
      </h3>
      <div style="margin-top: 15px;">
    `;
    
    faqs.forEach((faq, index) => {
      html += `
        <div style="background: white; padding: 15px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${index + 1}. ${sanitizeInput(faq.question)}</h4>
          <p>${sanitizeInput(faq.answer)}</p>
        </div>
      `;
    });
    
    html += `
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `;
    
    insertBotMessage(html);
  }

function showSalesWhatsApp() {
  insertBotMessage(`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fab fa-whatsapp"></i> واتساب المبيعات:
    </h3>
    
    <div style="background: white; padding: 15px; border-radius: 10px; margin-top: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
      <p>للاستفسار حول القروض أو الخدمات، يمكنك التواصل مباشرة مع فريق المبيعات عبر الواتساب:</p>
      <div style="direction: ltr; text-align: left; font-weight: bold; font-size: 18px; padding-left: 10px;">
        +973 33539666
      </div>
    </div>
    
    <div style="margin-top: 20px;">
      <a href="https://api.whatsapp.com/send/?phone=97333539666&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
        <button class="quick-btn" style="background-color: #25D366;" aria-label="فتح محادثة واتساب">
          <i class="fab fa-whatsapp"></i> فتح محادثة واتساب
        </button>
      </a>
    </div>

    <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `);
}


  function showDefaultResponse() {
    insertBotMessage(`
      <p>عذراً، لم أفهم سؤالك بشكل كامل. هل يمكنك توضيح استفسارك؟</p>
      <p>يمكنك اختيار أحد الخيارات التالية:</p>
      
      <button class="quick-btn" onclick="showLoanMenu()" aria-label="عرض أنواع القروض">
        <i class="fas fa-hand-holding-usd"></i> استفسار عن قروض
      </button>
      
      <button class="quick-btn" onclick="showJobsMenu()" aria-label="عرض الوظائف المتاحة">
        <i class="fas fa-briefcase"></i> الوظائف المتاحة
      </button>
      
      <button class="quick-btn" onclick="showFAQs()" aria-label="عرض الأسئلة الشائعة">
        <i class="fas fa-question-circle"></i> الأسئلة الشائعة
      </button>
      
      <button class="quick-btn back-btn" onclick="showGreeting()" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `);
  }
