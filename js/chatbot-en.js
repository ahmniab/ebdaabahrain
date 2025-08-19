function sanitizeInput(e){let a=document.createElement("div");return a.textContent=e,a.innerHTML}const loans={sayadti:{url:"loan-details.php?id=saydati",title:"Sayidati Loan",description:"Ebdaa Bahrain now offers small loans specifically designed for women who produce from home, aiming to support and develop their projects. The loan amounts range from BHD 200 to 1,000 and are repayable over a 12-month period.",amount:"Between 200 and 1,000 BHD",period:"12 months",conditions:["To be used for supporting home-based or mobile businesses.","The borrower must have an existing business or a business idea","The borrower’s age must be no less than 20 years and no more than 65 years"],documents:["A valid copy of the smart ID","A copy of the passport or driver’s license","Proof of project income or salary certificate for employees wishing to start their own projects","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)"]},ebdaa:{url:"loan-details.php?id=ebdaa",title:"ebdaa loan",description:"Ebdaa Bahrain now offers small loans specifically designed for men who have home-based businesses, aiming to support and develop their projects. Loan amounts range between BHD 200 and 1,000. Repayable over 12 months.",amount:"Between 200 and 1,000 BHD.",period:"12 months",conditions:["To be used for supporting home-based or mobile businesses.","The borrower must have an existing business or a business idea.","The borrower’s age must be no less than 20 years and no more than 65 years."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","Proof of project income or salary certificate for employees wishing to start their own projects.","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."]},amal:{url:"loan-details.php?id=amal",title:"amal loan",description:"Ebdaa Bahrain now offers the Hope Loan dedicated to supporting commercial, service, and industrial projects with easy terms. Loan amounts range between BHD 1,000 and 2,400. Repayable over 24 months.",amount:"Between 1000 and 2,400 BHD.",period:"24 manths",conditions:["To be used for supporting home-based or mobile businesses.","The borrower must have an existing business or a business idea.","The borrower’s age must be no less than 20 years and no more than 65 years."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","Proof of project income or salary certificate for employees wishing to start their own projects.","Proof of residence (rental contract, ownership document, or EWA electricity and water bill."]},tamayoz:{url:"loan-details.php?id=tamayouz",title:"tamayoz loan",description:"Ebdaa Bahrain now offers the Excellence Loan to support licensed commercial, industrial, and service projects with easy terms. Loan amounts range between BHD 1,500 and 7,000. Repayable over 36 months.",amount:"Between 1,500 and 7,000 BHD.",period:"36 manths",conditions:["The borrower must have a licensed project.","The loan must be used to support working capital or purchase equipment.","The project must be at least 3 years old.","The borrower’s age must be no less than 25 years and no more than 65 years."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","A copy of the commercial registration or project license.","Proof of project income.","The project’s bank statement for the last six months.","The commercial registration must be valid for at least 6 months.","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."]},mawsimi:{url:"loan-details.php?id=mawsimi",title:"mawsimi loan",description:"With simple administrative fees and quick, easy procedures, Ebdaa Bahrain offers business owners the opportunity to purchase additional school supplies and pay in installments over 24 months, with repayments starting after the end of the first month.",amount:"Depending on the activity",period:"24 months (repayment starts after the first month).",conditions:["The borrower’s age must be no less than 23 years and no more than 60 years.","The borrower must have a stable and continuous source of income.","The loan must be used for purchasing school supplies."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","The latest salary slip for government sector employees.","Salary certificate for private sector employees.","Bank statement for the last three months"]},tafawq:{url:"loan-details.php?id=tafawoq",title:"tafawq loan",description:"Ebdaa Bahrain now offers the Excellence Loan to support licensed commercial, industrial, and service projects with flexible and easy terms. Loan amounts range between BHD 1,000 and 7,000. Repayable over a period of 6 to 24 months.",amount:"Between 1,000 and 7,000 BHD.",period:"6 - 24 manths",conditions:["The borrower must have a licensed project.","The loan must be used to support working capital or purchase equipment.","The project must be at least 3 years old.","The borrower’s age must be no less than 25 years and no more than 65 years."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","A copy of the commercial registration or project license.","Proof of project income.","The project’s bank statement for the last six months.","The commercial registration must be valid for at least 6 months.","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."]},najah:{url:"loan-details.php?id=najah",title:"najah loan",description:"ebdaa Bahrain now offers small loans to owners of home-based and mobile projects to help develop and increase their working capital. The loan amounts range between 600 and 1400 Bahraini dinars, repayable over 18 months.",amount:"Between 600 and 1,400 BHD.",period:"18 manths",conditions:["To be used for supporting home-based or mobile businesses.","The borrower must have an existing business or a business idea.","The borrower’s age must be no less than 20 years and no more than 65 years."],documents:["A valid copy of the smart ID.","A copy of the passport or driver’s license.","A copy of the commercial registration or project license.","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."]},"tamayouz plus":{url:"loan-details.php?id=tamayouz-plus",title:"tamayouz plus loan",description:"Tamayoz+ Loan is offered to support commercial, service, and industrial projects with easy and flexible terms,Loan amounts range from 7,500 to 10,000 Bahraini dinars and are repayable over a period of 36 months.",amount:"Between 7,500 and 1,0000 BHD.",period:"36 شهر",conditions:["The loan must be used to support existing projects or to start a new project.","The borrower’s age must be at least 25 and not exceed 60 years.","The project’s age must not be less than one year."],documents:["A valid copy of the smart ID card.","A valid copy of the passport.","A copy of the commercial registration or project license.","Proof of project income.","Electricity bill for the commercial registration.","Lease contract for the commercial registration.","Proof of fixed income (in case of starting a new project).","Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."]}},branches=[{name:"General Administration",phone:"17381000",email:"info@ebdaabahrain.com",location:"Manama – Bahrain"},{name:"Capital Branch",phone:"17381003",email:"almanama@ebdaabahrain.com",location:"Manama – Bahrain"},{name:"Aali Branch",phone:"17381013",email:"aali@ebdaabahrain.com",location:"aali – Bahrain"},{name:"Hamad City Branch",phone:"17381018",email:"hamad.town@ebdaabahrain.com",location:"Hamad city – Bahrain"}],workingHours={regular:"Sunday – Wednesday: 8 AM – 4 PM",thursday:"Thursday: 8 AM – 1:30 PM",weekend:"Friday and Saturday: Closed"},jobs={Collection:{title:"Collection Specialist",description:"Follow-up on collecting overdue customer receivables",objectives:"The collector is the person responsible for visiting customers who are overdue on payments to follow up on the collection of their outstanding amounts on behalf of the bank.",responsibilities:["Verifying the accuracy of information provided to loan officers.","Continuously following up with customers overdue on payments until receivables are collected.","Coordinating with supervisors and loan officers regarding overdue customers to find necessary solutions.","Monitoring rescheduled loans to ensure payments are made on time according to the rescheduling procedures.","Preparing lawyer’s warnings addressed to customers overdue on payments and their guarantors.","Following up with the legal advisor regarding files referred to them..","Tracking any legal actions taken, including following up on collections with the Execution Department..","Coordinating with operations concerning collection of late payments and fines..","Preparing all reports and statements related to due installments..","Performing any other duties assigned by the direct supervisor."],qualifications:"Bachelor’s degree or diploma in administrative sciences or equivalent fields",experience:"Knowledge of the applicable laws related to this field Familiarity with follow-up and collection procedures.",skills:["Possesses leadership skills.","Proficient in both Arabic and English (writing, reading, and speaking).","Proficient in computer use."]},Lending:{title:"Lending Specialist",description:"Promoting client acquisition, studying applications, and conducting field visits, in addition to collection and maintaining the quality of the credit portfolio.",objectives:"Reaching clients, providing suitable loans, and achieving the bank’s credit objectives.",responsibilities:["Promoting the bank’s services and products to obtain loan applications and reach the targeted number of clients.","Conducting field visits to clients according to plans and policies set by the bank..","Reviewing loan applications to verify their accuracy and the correctness of the procedures followed.","Ensuring clients have completed all necessary documents.","Conducting a comprehensive study to assess clients’ financial capacity.","Providing periodic reports to the direct supervisor related to the credit portfolio.","Continuously monitoring the credit portfolio, focusing on timely repayment.","Performing any other duties assigned by the direct supervisor.."],qualifications:"Bachelor’s degree or diploma in administrative sciences, financial sciences, or banking.",experience:"No experience required.",skills:["Possesses leadership skills.","Proficient in Arabic and English (writing, reading, and speaking).","Proficient in computer use.","Ability to train employees."]},year:{title:"General presentation",description:"If you don’t find a suitable job among the available positions, you can apply generally, and we will review your resume when suitable opportunities arise.",application_link:"https://www.ebdaabahrain.com"}},faqs=[{question:"How long does the loan approval process take?",answer:"The review and approval process takes from 1 to 2 business days."},{question:"Can the loan be repaid before the end of the term?",answer:"Yes, early repayment is allowed without any additional fees."},{question:"Are there any fees for submitting the application?",answer:"Yes, there are non-refundable fees, in addition to administrative fees deducted upon loan disbursement."},{question:"What is the penalty for late repayment?",answer:"A penalty of 6 Bahraini Dinar is charged for each day of delay in repaying any loan installment.."},{question:"Is the information verified after submitting the application?",answer:"Yes, the verification is conducted through Benefit Company and governmental or private entities, including field visits.."},{question:"Can I retrieve my documents after submitting the application?",answer:"Documents cannot be retrieved even if the application is rejected.."},{question:"Can my information or photos be used for marketing purposes?",answer:"Yes, Ebda3 may use your photos or project information in promotional materials after the loan approval."},{question:"Are my data shared with external parties?",answer:"Yes, your application data may be shared with official or private entities such as Benefit Company or financiers."}],msg_options=`
<div style="margin-top: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
        <button class="quick-btn" onclick="showLoanMenu()" aria-label="View loan types">
          <i class="fas fa-hand-holding-usd"></i> Inquiry about loans
        </button>
        
        <button class="quick-btn" onclick="showBranches()" aria-label="View Bank Branches">
          <i class="fas fa-map-marker-alt"></i> Branch Locations
        </button>
        
        <button class="quick-btn" onclick="showWorkingHours()" aria-label="View Working Hours">
          <i class="fas fa-clock"></i> Working Hours
        </button>
        
        <button class="quick-btn" onclick="showFAQs()" aria-label="View Frequently Asked Questions">
          <i class="fas fa-question-circle"></i> Frequently Asked Questions
        </button>
        
        <button class="quick-btn" onclick="showJobsMenu()" aria-label="View Available Jobs">
          <i class="fas fa-briefcase"></i> Available Jobs
        </button>
        
        <button class="quick-btn" onclick="showSalesWhatsApp()" aria-label="Open Sales WhatsApp">
          <i class="fab fa-whatsapp"></i> more information
        </button>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-1 mb-2">
        <a class="quick-btn p-3" href="application-form.php" target="_blank">
          <i class="fas fa-file-signature"></i> Apply for a loan
        </a>
      </div>
`;function toggleChat(){let e=document.getElementById("chatbot-box"),a=document.getElementById("chatbot-toggle");e.classList.contains("show")?(e.classList.remove("show"),a.innerHTML='<i class="fas fa-comments"></i>',a.setAttribute("aria-label","Open the bot chat")):(e.classList.add("show"),a.innerHTML='<i class="fas fa-times"></i>',a.setAttribute("aria-label","Close the chat"),document.getElementById("user-input").focus())}function scrollToBottom(){let e=document.getElementById("chatbot-body");e.scrollTop=e.scrollHeight}function showTypingIndicator(){let e=document.getElementById("chatbot-body"),a=document.createElement("div");return a.className="message bot typing-indicator",a.innerHTML="<span></span><span></span><span></span>",e.appendChild(a),scrollToBottom(),a}function hideTypingIndicator(e){e&&e.parentNode&&e.parentNode.removeChild(e)}function insertBotMessage(e){let a=document.getElementById("chatbot-body"),o=document.createElement("div");o.className="message bot",o.innerHTML=e,a.appendChild(o),scrollToBottom()}function insertUserMessage(e){let a=document.getElementById("chatbot-body"),o=document.createElement("div");o.className="message user",o.textContent=sanitizeInput(e),a.appendChild(o),scrollToBottom()}function sendMessage(){let e=document.getElementById("user-input"),a=e.value.trim();if(!a)return;insertUserMessage(a),e.value="";let o=showTypingIndicator();setTimeout(()=>{hideTypingIndicator(o),processMessage(a)},500)}function processMessage(e){let a=e.toLowerCase();if(a.includes("hello")||a.includes("hi")||a.includes("hey"))showGreeting("Hello");else if(a.includes("good morning")||a.includes("morning"))showGreeting("Good morning");else if(a.includes("good evening")||a.includes("evening"))showGreeting("Good evening");else if(a.includes("loan")||a.includes("Borrowing"))showLoanMenu();else if(a.includes("Job ")||a.includes("Employment")||a.includes("job"))showJobsMenu();else if(a.includes("Branch")||a.includes("Branches"))showBranches();else if(a.includes("Working")||a.includes("time")||a.includes("Hours"))showWorkingHours();else if(a.includes("Question")||a.includes("Questions")||a.includes("Inquiry"))showFAQs();else if(a.includes("whatsapp")||a.includes("whatsapp"))showSalesWhatsApp();else if(Object.keys(loans).some(e=>a.includes(e.toLowerCase()))){let o=Object.keys(loans).find(e=>a.includes(e.toLowerCase()));showLoanDetails(o)}else if(Object.keys(jobs).some(e=>a.includes(e.toLowerCase()))){let t=Object.keys(jobs).find(e=>a.includes(e.toLowerCase()));showJobDetails(t)}else showDefaultResponse()}function startListening(){if(!("webkitSpeechRecognition"in window||"SpeechRecognition"in window)){alert("Your browser does not support the speech recognition feature.");return}let e=new(window.SpeechRecognition||window.webkitSpeechRecognition);e.lang="en-US",e.onresult=function(e){let a=e.results[0][0].transcript;document.getElementById("user-input").value=a,sendMessage()},e.onerror=function(e){console.error("An error occurred in speech recognition:",e.error)},e.start()}function showGreeting(e=""){let a=new Date,o=a.getHours();""===e&&(e=o>=4&&o<12?"☀️ Good Morninf!":o>=12&&o<18?"\uD83C\uDF24️ Good Evening!":"\uD83C\uDF19 Good Evening!"),insertBotMessage(`
      ${e} 👋<br>
      I am your smart assistant from Al-Ibda’a for Microfinance. How can I assist you today?
      
      ${msg_options}
    `)}function showLoanMenu(){let e=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-list"></i> All Types of Loans (${Object.keys(loans).length} Types):
      </h3>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
    `;Object.keys(loans).forEach(a=>{e+=`
        <a class="quick-btn" href="${loans[a].url}" aria-label="View Details ${loans[a].title}">
          <i class="fas fa-file-invoice"></i> ${sanitizeInput(loans[a].title)}
        </a>
      `}),insertBotMessage(e+=`
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Return to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `)}function showLoanDetails(e){let a=loans[e],o=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-info-circle"></i> ${sanitizeInput(a.title)}
      </h3>
      <p><strong>Description:</strong> ${sanitizeInput(a.description)}</p>
      <p><strong>Amount:</strong> ${sanitizeInput(a.amount)}</p>
      <p><strong>Duration:</strong> ${sanitizeInput(a.period)}</p>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-clipboard-check"></i> Conditions:
        </h4>
        <ul style="padding-right: 20px;">
    `;a.conditions.forEach(e=>{o+=`<li>${sanitizeInput(e)}</li>`}),o+=`
        </ul>
      </div>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-file-alt"></i> Required Documents:
        </h4>
        <ul style="padding-right: 20px;">
    `,a.documents.forEach(e=>{o+=`<li>${sanitizeInput(e)}</li>`}),insertBotMessage(o+=`
        </ul>
      </div>
      
      <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
        <button class="quick-btn" onclick="showApplicationForm('${e}')" aria-label="Apply for ${a.title}">
          <i class="fas fa-file-signature"></i> Apply for the loan
        </button>
        <button class="quick-btn back-btn" onclick="showLoanMenu()" aria-label="Back to Loan List">
          <i class="fas fa-arrow-left"></i> Back to Loans
        </button>
      </div>
    `)}function showApplicationForm(e){insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-edit"></i> Submit Application ${sanitizeInput(loans[e].title)}
      </h3>
      <p>You can apply now through one of the following options:</p>
      
      <div style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="application-form.php" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
          <button class="quick-btn" aria-label="Open the bank's website for online application">
            <i class="fas fa-laptop"></i> Online Application
          </button>
        </a>
        
        <a href="tel:${branches[0].phone}" style="text-decoration: none;">
          <button class="quick-btn" aria-label="Call the bank's number">
            <i class="fas fa-phone"></i> Contact Us
          </button>
        </a>
      </div>
      
      <div style="background: var(--light); padding: 10px; border-radius: 10px; margin-top: 15px;">
        <p><i class="fas fa-info-circle"></i> Please bring all the required documents when applying.</p>
      </div>
      
      <button class="quick-btn back-btn" onclick="showLoanDetails('${e}')" style="margin-top: 15px;" aria-label="Back to Loan Details">
        <i class="fas fa-arrow-left"></i> Back to Loan Details
      </button>
      
    `)}function showJobsMenu(){insertBotMessage(`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-briefcase"></i> Available Jobs:
    </h3>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
      <button class="quick-btn" onclick="showJobDetails('Collection')" aria-label="View Details of the Collections Specialist Position">
        <i class="fas fa-file-invoice-dollar"></i> Collections Specialist
      </button>
      
      <button class="quick-btn" onclick="showJobDetails('Lending')" aria-label="View Details of the Lending Specialist Position">
        <i class="fas fa-hand-holding-usd"></i> Lending Specialist
      </button>
      
      <button class="quick-btn" onclick="showJobDetails('Public ')" aria-label="View General Application Form">
        <i class="fas fa-user-tie"></i> General Application
      </button>
    </div>
    
    <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Back to Home Page">
      <i class="fas fa-arrow-left"></i> Back to Home
    </button>
  `)}function showJobDetails(e){let a=jobs[e],o=`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-info-circle"></i> ${sanitizeInput(a.title)}
    </h3>
    <p><strong>Job Description:</strong> ${sanitizeInput(a.description)}</p>
  `;a.objectives&&(o+=`
      <div style="margin-top: 10px;">
        <strong>General Objective:</strong> ${sanitizeInput(a.objectives)}
      </div>
    `),a.responsibilities&&(o+=`
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-tasks"></i> Duties and Responsibilities:</h4>
        <ul style="padding-right: 20px;">
    `,a.responsibilities.forEach(e=>{o+=`<li>${sanitizeInput(e)}</li>`}),o+="</ul></div>"),a.qualifications&&(o+=`
      <div style="margin-top: 10px;"><strong>Academic Qualifications:</strong> ${sanitizeInput(a.qualifications)}</div>
    `),a.experience&&(o+=`
      <div style="margin-top: 10px;"><strong>Work Experience:</strong> ${sanitizeInput(a.experience)}</div>
    `),a.skills&&(o+=`
      <div style="margin-top: 15px;">
        <h4 style="color: var(--primary);"><i class="fas fa-lightbulb"></i> Required Skills:</h4>
        <ul style="padding-right: 20px;">
    `,a.skills.forEach(e=>{o+=`<li>${sanitizeInput(e)}</li>`}),o+="</ul></div>"),a.requirements&&(o+=`
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-clipboard-list"></i> Requirements:</h4>
        <ul style="padding-right: 20px;">
    `,a.requirements.forEach(e=>{o+=`<li>${sanitizeInput(e)}</li>`}),o+="</ul></div>");let t=a.application_link||"jobs.php";insertBotMessage(o+=`
    <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
      <a href="${t}" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
        <button class="quick-btn" aria-label="Open the careers page on the bank's website.">
          <i class="fas fa-external-link-alt"></i> Apply Now
        </button>
      </a>

      <button class="quick-btn back-btn" onclick="showJobsMenu()" aria-label="Back to Job Listings">
        <i class="fas fa-arrow-left"></i> Back to Jobs
      </button>
    </div>
  `)}function showBranches(){let e=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-map-marked-alt"></i> Al-Ibda’a Microfinance Branches:
      </h3>
      <div style="display: grid; gap: 15px; margin-top: 15px;">
    `;branches.forEach(a=>{e+=`
        <div style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${sanitizeInput(a.name)}</h4>
          <p><i class="fas fa-phone"></i> <a href="tel:${a.phone}" style="color: inherit; text-decoration: none;">${a.phone}</a></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:${a.email}" style="color: inherit; text-decoration: none;">${sanitizeInput(a.email)}</a></p>
          <p><i class="fas fa-map-marker-alt"></i> ${sanitizeInput(a.location)}</p>
        </div>
      `}),insertBotMessage(e+=`
      </div>
      
      <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="https://maps.google.com?q=بنك+الإبداع+البحرين" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
          <button class="quick-btn" aria-label="Open Google Maps to display the branches.">
            <i class="fas fa-map"></i> Show on Map
          </button>
        </a>
        
        <button class="quick-btn back-btn" onclick="showGreeting()" aria-label="Back to Home Page">
          <i class="fas fa-arrow-left"></i> Back to Home
        </button>
      </div>
    `)}function showWorkingHours(){insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-clock"></i> Official Working Hours:
      </h3>
      
      <div style="background: white; padding: 15px; border-radius: 10px; margin-top: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <p><strong>${sanitizeInput(workingHours.regular)}</strong></p>
        <p><strong>${sanitizeInput(workingHours.thursday)}</strong></p>
        <p>${sanitizeInput(workingHours.weekend)}</p>
      </div>
      
      <div style="background: var(--light); padding: 10px; border-radius: 10px; margin-top: 10px;">
        <p><i class="fas fa-info-circle"></i> Working hours may change during official holidays and celebrations.</p>
      </div>
      
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Back to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `)}function showFAQs(){let e=`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-question-circle"></i> Frequently Asked Questions:
      </h3>
      <div style="margin-top: 15px;">
    `;faqs.forEach((a,o)=>{e+=`
        <div style="background: white; padding: 15px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <h4 style="margin-top: 0; color: var(--primary);">${o+1}. ${sanitizeInput(a.question)}</h4>
          <p>${sanitizeInput(a.answer)}</p>
        </div>
      `}),insertBotMessage(e+=`
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Back to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `)}function showSalesWhatsApp(){insertBotMessage(`
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fab fa-whatsapp"></i> Sales WhatsApp:
    </h3>
    
    <div style="background: white; padding: 15px; border-radius: 10px; margin-top: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
      <p>For inquiries about loans or services, you can contact the sales team directly via WhatsApp:</p>
      <div style="direction: ltr; text-align: left; font-weight: bold; font-size: 18px; padding-left: 10px;">
        +973 33539666
      </div>
    </div>
    
    <div style="margin-top: 20px;">
      <a href="https://api.whatsapp.com/send/?phone=97333539666&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
        <button class="quick-btn" style="background-color: #25D366;" aria-label="Open WhatsApp Chat">
          <i class="fab fa-whatsapp"></i> Open WhatsApp Chat
        </button>
      </a>
    </div>

    <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Back to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `)}function showDefaultResponse(){insertBotMessage(`
      <p>Sorry, I didn't fully understand your question. Can you clarify your inquiry?</p>
      <p>You can choose one of the following options.:</p>
      
      <button class="quick-btn" onclick="showLoanMenu()" aria-label="Types of loans offered">
        <i class="fas fa-hand-holding-usd"></i> Inquiry about loans
      </button>
      
      <button class="quick-btn" onclick="showJobsMenu()" aria-label="Available job listings">
        <i class="fas fa-briefcase"></i> Available jobs
      </button>
      
      <button class="quick-btn" onclick="showFAQs()" aria-label="View frequently asked questions">
        <i class="fas fa-question-circle"></i> Frequently Asked Questions
      </button>
      
      <button class="quick-btn back-btn" onclick="showGreeting()" aria-label="back to the homepage">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `)}window.onload=function(){setTimeout(showGreeting,1e3)};