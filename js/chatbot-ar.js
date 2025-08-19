function sanitizeInput(i){let a=document.createElement("div");return a.textContent=i,a.innerHTML}const loans={سيدتي:{url:"loan-details.php?id=saydati",title:"قرض سيدتي",description:"الآن إبداع البحرين يقدم قروض صغيرة مخصصة للسيدات المنتجات في المنزل لغايات دعم مشاريعهن وتطويرها. تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.",amount:"200 - 1000 دينار",period:"12 شهر",conditions:["أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.","يجب أن يكون للمقترضة مشروع قائم أو لديها فكرة مشروع.","أن لا يقل عمر المقترضة عن 20 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","إثبات دخل المشروع أو شهادة راتب للموظفات الاتي يرغبن ببدء مشاريعهن.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},الإبداع:{url:"loan-details.php?id=ebdaa",title:"قرض الإبداع",description:"الآن إبداع البحرين يقدم قروض صغيرة مخصصة للذكور الذين لديهم مشاريع تدار من المنزل لغاية دعم مشاريعهم وتطويرها. تتراوح قيمة القرض بين 200 و 1000 دينار تسدد على مدة 12 شهر.",amount:"200 - 1000 دينار",period:"12 شهر",conditions:["أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.","يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.","أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},الأمل:{url:"loan-details.php?id=amal",title:"قرض الأمل",description:"الآن إبداع البحرين يقدم قرض الأمل المخصص لدعم المشاريع التجارية والخدماتية والصناعية بشروط ميسرة. تتراوح قيمة القرض بين 1000 و 2400 دينار تسدد على مدة 24 شهر.",amount:"1000 - 2400 دينار",period:"24 شهر",conditions:["أن يستغل القرض لغايات دعم المشاريع الصغيرة أو المتنقلة.","يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.","أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","إثبات دخل المشروع أو شهادة راتب للموظفين الذين يرغبون ببدء مشاريعهم.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},التميز:{url:"loan-details.php?id=tamayouz",title:"قرض التميز",description:"الآن يقدم إبداع البحرين قرض التميز لدعم المشاريع التجارية والصناعية والخدماتية المرخصة وبشروط ميسرة. تتراوح قيمة القرض بين 1500 و 7000 دينار تسدد على مدة 36 شهرا.",amount:"1500 - 7000 دينار",period:"36 شهر",conditions:["يجب أن يكون للمقترض مشروع مرخص.","أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.","أن لا يقل عمر المشروع عن 3 سنوات.","أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","نسخة من السجل التجاري أو ترخيص المشروع.","إثبات دخل المشروع.","كشف الحساب البنكي للمشروع لآخر ستة شهور.","أن لا تقل صلاحية السجل التجاري عن 6 أشهر.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},الموسمي:{url:"loan-details.php?id=mawsimi",title:"القرض الموسمي",description:"برسوم إدارية بسيطة وإجراءات سريعة وميسرة، شركة إبداع البحرين تمنح أصحاب المشاريع فرصة شراء بضاعة مدرسية إضافية وتقسيطها على 24 شهر، بحيث يبدأ السداد بعد نهاية الشهر الأول.",amount:"حسب النشاط",period:"24 شهر (بدء السداد بعد الشهر الأول)",conditions:["أن لا يقل عمر المقترض عن 23 عام ولا يزيد عن 60 عام.","يجب أن يكون للمقترض مصدر دخل ثابت ومستمر.","أن يستغل القرض لغايات شراء المستلزمات الدراسية."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","آخر سلب راتب لموظفي القطاع الحكومي.","شهادة راتب لموظفي القطاع الخاص.","كشف حساب البنك (آخر ثلاث شهور)."]},التفوق:{url:"loan-details.php?id=tafawoq",title:"قرض التفوق",description:"الآن يقدم إبداع البحرين قرض التفوق لدعم المشاريع التجارية والصناعية والخدماتية المرخصة بشروط مرنة وميسرة. تتراوح قيمة القرض بين 1000 و 7000 دينار تسدد على فترة من 6 إلى 24 شهر.",amount:"1000 - 7000 دينار",period:"6 - 24 شهر",conditions:["يجب أن يكون للمقترض مشروع مرخص.","أن يستغل القرض لغايات دعم رأس المال أو شراء معدات.","أن لا يقل عمر المشروع عن 3 سنوات.","أن لا يقل عمر المقترض عن 25 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","نسخة من السجل التجاري أو ترخيص المشروع.","إثبات دخل المشروع.","كشف الحساب البنكي للمشروع لآخر ستة شهور.","أن لا تقل صلاحية السجل التجاري عن 6 أشهر.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},النجاح:{url:"loan-details.php?id=najah",title:"قرض النجاح",description:"الآن يقدم إبداع البحرين قروض صغيرة لأصحاب المشاريع المنزلية والمتنقلة لغايات تطويرها وزيادة رأس مالها العامل. تتراوح قيمة القرض بين 600 و 1400 دينار تسدد خلال 18 شهراً.",amount:"600 - 1400 دينار",period:"18 شهر",conditions:["أن يستغل القرض لغايات دعم المشاريع المنزلية أو المتنقلة.","يجب أن يكون للمقترض مشروع قائم أو لديه فكرة مشروع.","أن لا يقل عمر المقترض عن 20 عام ولا يزيد عن 65 عام."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز أو رخصة القيادة.","إثبات دخل المشروع أو شهادة راتب.","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]},"التميز بلس":{url:"loan-details.php?id=tamayouz-plus",title:"قرض التميز بلس",description:"يقدم قرض التميز+ لدعم المشاريع التجارية والخدماتية والصناعية وبشروط ميسرة. تتراوح قيمة القروض بين 7500 و 10000 دينار، وتسدد خلال 36 شهر.",amount:"7500 - 10000 دينار",period:"36 شهر",conditions:["أن يستغل القرض لغايات دعم مشاريع قائمة أو بدء مشروع.","أن لا يقل عمر المقترض عن 25 ولا يزيد عن 60 عام.","أن لا يقل عمر المشروع عن سنة."],documents:["نسخة من البطاقة الذكية سارية المفعول.","نسخة من الجواز ساري المفعول.","نسخة من السجل التجاري أو ترخيص المشروع.","إثبات دخل المشروع.","فاتورة كهرباء السجل التجاري.","عقد إيجار السجل التجاري.","إثبات الدخل الثابت (في حالة بدء مشروع).","اثبات السكن (عقد ايجار أو ملكية أو فاتورة كهرباء والماء EWA)."]}},branches=[{name:"الإدارة العامة",phone:"17381000",email:"info@ebdaabahrain.com",location:"المنامة - البحرين"},{name:"فرع العاصمة",phone:"17381003",email:"almanama@ebdaabahrain.com",location:"المنامة - البحرين"},{name:"فرع عالي",phone:"17381013",email:"aali@ebdaabahrain.com",location:"عالي - البحرين"},{name:"فرع مدينة حمد",phone:"17381018",email:"hamad.town@ebdaabahrain.com",location:"مدينة حمد - البحرين"}],workingHours={regular:"الأحد - الأربعاء: 8 صباحاً - 4 مساءً",thursday:"الخميس: 8 صباحاً - 1:30 مساءً",weekend:"الجمعة والسبت: إجازة"},jobs={تحصيل:{title:"أخصائي تحصيل",description:"متابعة تحصيل مستحقات العملاء المتأخرين",objectives:"المحصل هو الشخص المعني بزيارة العملاء المتأخرين عن السداد لمتابعة تحصيل ما يستحق عليهم لصالح البنك.",responsibilities:["التحري عن صحة المعلومات المقدمة الى ضباط الاقراض.","متابعة العملاء المتأخرين عن السداد بصورة مستمرة الى حين تحصيل المستحقات.","التنسيق مع مشرفي وضابط الاقراض المعنيين فيما يخص العميل المتأخر عن السداد لايجاد الوسائل اللازمة لحل الاشكال مع هذا العميل.","متابعة القروض المجدولة للتأكد من انها تسدد في موعدها حسب اجراءات الجدولة.","اعداد انذارات المحامي الموجهة الى العملاء المتأخرين عن السداد وكفلائهم.","المتابعة مع المستشار القانوني بخصوص الملفات المحولة اليه.","متابعة أي إجراء قانوني تم اتخاذه بما فيها متابعة التحصيلات لدى دائرة الاجراء.","التنسيق مع العمليات فيما يخص تحصيل الدفعات والغرامات المتأخرة.","اعداد كافة التقارير والكشوف المتعلقة بالاقساط المستحقة.","القيام باية واجبات اخرى تناط به من قبل مسؤوله المباشر."],qualifications:"بكالوريوس او دبلوم في تخصصات العلوم الإدارية أو ما يعادلها",experience:"معرفة في القوانين المرعية والمتعلقة بهذا الخصوص. معرفة بإجراءات المتابعة والتحصيل.",skills:["أن يتمتع بمهارات قيادية.","إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة.","إتقان استخدام الحاسوب."]},اقراض:{title:"أخصائي إقراض",description:"الترويج للحصول على عملاء ودراسة الطلبات والزيارة الميدانية بالإضافة إلى التحصيل والمحافظة على جودة المحفظة الإئتمانية.",objectives:"الوصول إلى العملاء وتقديم قروض مناسبة وتحقيق أهداف البنك الائتمانية.",responsibilities:["ترويج خدمات ومنتجات البنك للحصول على طلبات الإقراض والوصول إلى العدد المطلوب من العملاء.","الزيارة الميدانية للعملاء حسب الخطط والسياسات المعدة من قبل البنك.","مراجعة طلبات الإقراض للتأكد من صحتها وصحة الإجراءات المتبعة.","التأكد من كون العملاء قد استكملوا جميع الوثائق اللازمة.","عمل دراسة متكاملة تبين القدرة المالية للعملاء.","تقديم تقارير دورية إلى مسئوله المباشر تتعلق بمحفظته الائتمانية.","المتابعة المستمرة للمحفظة الائتمانية والتركيز على السداد في الوقت المحدد.","القيام بأية واجبات أخرى تناط به من قبل مسؤوله المباشر."],qualifications:"بكالوريوس أو دبلوم في تخصصات العلوم الإدارية والعلوم المالية والمصرفية.",experience:"لا يحتاج الخبرة.",skills:["أن يتمتع بمهارات قيادية.","إتقان اللغتين العربية والإنجليزية كتابة وقراءة ومحادثة.","إتقان استخدام الحاسوب.","القدرة على تدريب الموظفين."]},عام:{title:"تقديم عام",description:"إذا لم تجد الوظيفة المناسبة لك من بين الوظائف المتاحة، يمكنك التقديم بشكل عام وسنقوم بمراجعة سيرتك الذاتية عند توفر فرص مناسبة.",application_link:"jobs.php"}},faqs=[{question:"كم تستغرق عملية الموافقة على القرض؟",answer:"تستغرق عملية المراجعة والموافقة من 1 إلى 2 أيام عمل"},{question:"هل يمكن سداد القرض قبل نهاية المدة؟",answer:"نعم، يمكن السداد المبكر بدون أي رسوم إضافية"},{question:"هل توجد رسوم على تقديم الطلب؟",answer:"نعم، هناك رسوم غير قابلة للاسترداد، بالإضافة إلى رسوم إدارية تخصم عند صرف القرض."},{question:"ما هي غرامة التأخير في السداد؟",answer:"6 دينار بحريني عن كل يوم تأخير في سداد أي دفعة من القرض."},{question:"هل يمكن لي أن أقوم بتأجيل أي من دفعات القرض؟",answer:" بالتأكيد ، يمكن في حال مواجهتك لظروف طارئة، تأجيل ما لا يزيد عن 20% من دفعات قرضك، وبشرط دفع رسوم التاجيل مقدماَ، بالإضافة إلى أرباح المدة بين موعد الدفعة الأصلي وآخر دفعة من دفعات الفرض."},{question:"هل يتم التحقق من المعلومات بعد تقديم الطلب؟",answer:"نعم، يتم التحقق من خلال شركة بنفت وجهات حكومية أو خاصة، ويشمل ذلك زيارات ميدانية."},{question:"هل يمكنني استرجاع مستنداتي بعد التقديم؟",answer:"لا يمكن استرجاع المستندات حتى في حال رفض الطلب."},{question:"هل يمكن استخدام معلوماتي أو صوري لأغراض تسويقية؟",answer:"نعم، قد تستخدم الإبداع صورك أو معلومات مشروعك في النشرات الترويجية بعد الموافقة على القرض."},{question:"هل تتم مشاركة بياناتي مع جهات خارجية؟",answer:"نعم، قد تتم مشاركة بيانات الطلب مع جهات رسمية أو خاصة مثل شركة بنفت أو الممولين ، وبما يتوافق مع قانون حماية البيانات الشخصية ساري المعول."}],msg_options=`
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
          <i class="fas fa-file-signature"></i> ترغب في الحصول على قرض ؟
        </a>
      </div>
`;function toggleChat(){let i=document.getElementById("chatbot-box"),a=document.getElementById("chatbot-toggle");i.classList.contains("show")?(i.classList.remove("show"),a.innerHTML='<i class="fas fa-comments"></i>',a.setAttribute("aria-label","فتح شات البوت")):(i.classList.add("show"),a.innerHTML='<i class="fas fa-times"></i>',a.setAttribute("aria-label","إغلاق الشات"),document.getElementById("user-input").focus())}function scrollToBottom(){let i=document.getElementById("chatbot-body");i.scrollTop=i.scrollHeight}function showTypingIndicator(){let i=document.getElementById("chatbot-body"),a=document.createElement("div");return a.className="message bot typing-indicator",a.innerHTML="<span></span><span></span><span></span>",i.appendChild(a),scrollToBottom(),a}function hideTypingIndicator(i){i&&i.parentNode&&i.parentNode.removeChild(i)}function insertBotMessage(i){let a=document.getElementById("chatbot-body"),t=document.createElement("div");t.className="message bot",t.innerHTML=i,a.appendChild(t),scrollToBottom()}function insertUserMessage(i){let a=document.getElementById("chatbot-body"),t=document.createElement("div");t.className="message user",t.textContent=sanitizeInput(i),a.appendChild(t),scrollToBottom()}function sendMessage(){let i=document.getElementById("user-input"),a=i.value.trim();if(!a)return;insertUserMessage(a),i.value="";let t=showTypingIndicator();setTimeout(()=>{hideTypingIndicator(t),processMessage(a)},500)}function processMessage(i){let a=i.toLowerCase();if(a.includes("اهلا")||a.includes("أهلا")||a.includes("مرحبا"))showGreeting("ًأهلاً وسهلا");else if(a.includes("السلام عليكم")||a.includes("السلام"))showGreeting("وعليكم السلام ورحمة الله وبركاته");else if(a.includes("صباح الخير")||a.includes("صباح النور"))showGreeting("صباح النور والسرور");else if(a.includes("مساء النور")||a.includes("مساء الخير"))showGreeting("مساء النور والسرور");else if(a.includes("قرض")||a.includes("اقتراض"))showLoanMenu();else if(a.includes("وظيف")||a.includes("توظيف"))showJobsMenu();else if(a.includes("فرع")||a.includes("فروع"))showBranches();else if(a.includes("دوام")||a.includes("وقت")||a.includes("ساعات"))showWorkingHours();else if(a.includes("سؤال")||a.includes("أسئلة")||a.includes("استفسار"))showFAQs();else if(a.includes("واتساب")||a.includes("whatsapp"))showSalesWhatsApp();else if(Object.keys(loans).some(i=>a.includes(i.toLowerCase()))){let t=Object.keys(loans).find(i=>a.includes(i.toLowerCase()));showLoanDetails(t)}else if(Object.keys(jobs).some(i=>a.includes(i.toLowerCase()))){let e=Object.keys(jobs).find(i=>a.includes(i.toLowerCase()));showJobDetails(e)}else showDefaultResponse()}function startListening(){if(!("webkitSpeechRecognition"in window||"SpeechRecognition"in window)){alert("متصفحك لا يدعم ميزة التعرف على الصوت.");return}let i=new(window.SpeechRecognition||window.webkitSpeechRecognition);i.lang="ar-SA",i.onresult=function(i){let a=i.results[0][0].transcript;document.getElementById("user-input").value=a,sendMessage()},i.onerror=function(i){console.error("حدث خطأ في التعرف على الصوت:",i.error)},i.start()}function showGreeting(i=""){let a=new Date,t=a.getHours();""===i&&(i=t>=4&&t<12?"☀️ صباح الخير!":t>=12&&t<18?"\uD83C\uDF24️ مساء الخير!":"\uD83C\uDF19 مساء الخير!"),insertBotMessage(`
      ${i} 👋<br>
      أنا مساعدك الذكي "مبدع". كيف يمكنني مساعدتك اليوم؟
      
      ${msg_options}
    `)}function showLoanMenu(){let i=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-list"></i> جميع أنواع القروض (${Object.keys(loans).length} أنواع):
      </h3>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
    `;Object.keys(loans).forEach(a=>{i+=`
        <a class="quick-btn" href="${loans[a].url}" aria-label="عرض تفاصيل ${loans[a].title}">
          <i class="fas fa-file-invoice"></i> ${sanitizeInput(loans[a].title)}
        </a>
      `}),insertBotMessage(i+=`
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `)}function showLoanDetails(i){let a=loans[i],t=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-info-circle"></i> ${sanitizeInput(a.title)}
      </h3>
      <p><strong>الوصف:</strong> ${sanitizeInput(a.description)}</p>
      <p><strong>المبلغ:</strong> ${sanitizeInput(a.amount)}</p>
      <p><strong>المدة:</strong> ${sanitizeInput(a.period)}</p>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-clipboard-check"></i> الشروط:
        </h4>
        <ul style="padding-right: 20px;">
    `;a.conditions.forEach(i=>{t+=`<li>${sanitizeInput(i)}</li>`}),t+=`
        </ul>
      </div>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-file-alt"></i> المستندات المطلوبة:
        </h4>
        <ul style="padding-right: 20px;">
    `,a.documents.forEach(i=>{t+=`<li>${sanitizeInput(i)}</li>`}),insertBotMessage(t+=`
        </ul>
      </div>
      
      <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
        <button class="quick-btn" onclick="showApplicationForm('${i}')" aria-label="التقديم على ${a.title}">
          <i class="fas fa-file-signature"></i> التقديم على القرض
        </button>
        <button class="quick-btn back-btn" onclick="showLoanMenu()" aria-label="العودة لقائمة القروض">
          <i class="fas fa-arrow-left"></i> العودة للقروض
        </button>
      </div>
    `)}function showApplicationForm(i){insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-edit"></i> تقديم طلب ${sanitizeInput(loans[i].title)}
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
      
      <button class="quick-btn back-btn" onclick="showLoanDetails('${i}')" style="margin-top: 15px;" aria-label="العودة لتفاصيل القرض">
        <i class="fas fa-arrow-left"></i> العودة لتفاصيل القرض
      </button>
    `)}function showJobsMenu(){insertBotMessage(`
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
  `)}function showJobDetails(i){let a=jobs[i],t=`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-info-circle"></i> ${sanitizeInput(a.title)}
    </h3>
    <p><strong>الوصف الوظيفي:</strong> ${sanitizeInput(a.description)}</p>
  `;a.objectives&&(t+=`
      <div style="margin-top: 10px;">
        <strong>الهدف العام:</strong> ${sanitizeInput(a.objectives)}
      </div>
    `),a.responsibilities&&(t+=`
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-tasks"></i> المهام والمسؤوليات:</h4>
        <ul style="padding-right: 20px;">
    `,a.responsibilities.forEach(i=>{t+=`<li>${sanitizeInput(i)}</li>`}),t+="</ul></div>"),a.qualifications&&(t+=`
      <div style="margin-top: 10px;"><strong>المؤهلات الأكاديمية:</strong> ${sanitizeInput(a.qualifications)}</div>
    `),a.experience&&(t+=`
      <div style="margin-top: 10px;"><strong>الخبرة العملية:</strong> ${sanitizeInput(a.experience)}</div>
    `),a.skills&&(t+=`
      <div style="margin-top: 15px;">
        <h4 style="color: var(--primary);"><i class="fas fa-lightbulb"></i> المهارات المطلوبة:</h4>
        <ul style="padding-right: 20px;">
    `,a.skills.forEach(i=>{t+=`<li>${sanitizeInput(i)}</li>`}),t+="</ul></div>"),a.requirements&&(t+=`
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-clipboard-list"></i> المتطلبات:</h4>
        <ul style="padding-right: 20px;">
    `,a.requirements.forEach(i=>{t+=`<li>${sanitizeInput(i)}</li>`}),t+="</ul></div>");let e=a.application_link||"jobs.php";insertBotMessage(t+=`
    <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
      <a href="${e}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
        <button class="quick-btn" aria-label="فتح صفحة التوظيف في موقع البنك">
          <i class="fas fa-external-link-alt"></i> التقديم الآن
        </button>
      </a>

      <button class="quick-btn back-btn" onclick="showJobsMenu()" aria-label="العودة لقائمة الوظائف">
        <i class="fas fa-arrow-left"></i> العودة للوظائف
      </button>
    </div>
  `)}function showBranches(){let i=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-map-marked-alt"></i> فروع الإبداع للتمويل متناهي الصغر:
      </h3>
      <div style="display: grid; gap: 15px; margin-top: 15px;">
    `;branches.forEach(a=>{i+=`
        <div style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${sanitizeInput(a.name)}</h4>
          <p><i class="fas fa-phone"></i> <a href="tel:${a.phone}" style="color: inherit; text-decoration: none;">${a.phone}</a></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:${a.email}" style="color: inherit; text-decoration: none;">${sanitizeInput(a.email)}</a></p>
          <p><i class="fas fa-map-marker-alt"></i> ${sanitizeInput(a.location)}</p>
        </div>
      `}),insertBotMessage(i+=`
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
    `)}function showWorkingHours(){insertBotMessage(`
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
    `)}function showFAQs(){let i=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-question-circle"></i> الأسئلة الشائعة:
      </h3>
      <div style="margin-top: 15px;">
    `;faqs.forEach((a,t)=>{i+=`
        <div style="background: white; padding: 15px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${t+1}. ${sanitizeInput(a.question)}</h4>
          <p>${sanitizeInput(a.answer)}</p>
        </div>
      `}),insertBotMessage(i+=`
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="العودة للصفحة الرئيسية">
        <i class="fas fa-arrow-left"></i> العودة للرئيسية
      </button>
    `)}function showSalesWhatsApp(){insertBotMessage(`
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
    `)}function showDefaultResponse(){insertBotMessage(`
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
    `)}window.onload=function(){setTimeout(showGreeting,1e3)};