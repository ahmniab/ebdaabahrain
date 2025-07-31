 // تحويل بيانات PHP إلى JavaScript مع تنقية المحتوى
 function sanitizeInput(input) {
    const div = document.createElement('div');
    div.textContent = input;
    return div.innerHTML;
  }

  const loans = {
    "sayadti": {
        "title": "Sayidati Loan",
        "description": "Ebdaa Bahrain now offers small loans specifically designed for women who produce from home, aiming to support and develop their projects. The loan amounts range from BHD 200 to 1,000 and are repayable over a 12-month period.",
        "amount": "Between 200 and 1,000 BHD",
        "period": "12 months",
        "conditions": [
            "To be used for supporting home-based or mobile businesses.",
            "The borrower must have an existing business or a business idea",
            "The borrower’s age must be no less than 20 years and no more than 65 years"
        ],
        "documents": [
            "A valid copy of the smart ID",
            "A copy of the passport or driver’s license",
            "Proof of project income or salary certificate for employees wishing to start their own projects",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)"
        ]
    },
    "ebdaa": {
        "title":"ebdaa loan",
        "description": "Ebdaa Bahrain now offers small loans specifically designed for men who have home-based businesses, aiming to support and develop their projects. Loan amounts range between BHD 200 and 1,000. Repayable over 12 months.",
        "amount": "Between 200 and 1,000 BHD.",
        "period": "12 months",
        "conditions": [
            "To be used for supporting home-based or mobile businesses.",
            "The borrower must have an existing business or a business idea.",
            "The borrower’s age must be no less than 20 years and no more than 65 years."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "Proof of project income or salary certificate for employees wishing to start their own projects.",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."
        ]
    },
    "amal": {
        "title": "amal loan",
        "description": "Ebdaa Bahrain now offers the Hope Loan dedicated to supporting commercial, service, and industrial projects with easy terms. Loan amounts range between BHD 1,000 and 2,400. Repayable over 24 months.",
        "amount": "Between 1000 and 2,400 BHD.",
        "period": "24 manths",
        "conditions": [
            "To be used for supporting home-based or mobile businesses.",
            "The borrower must have an existing business or a business idea.",
            "The borrower’s age must be no less than 20 years and no more than 65 years."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "Proof of project income or salary certificate for employees wishing to start their own projects.",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill."
        ]
    },
    "tamayoz": {
        "title": "tamayoz loan",
        "description": "Ebdaa Bahrain now offers the Excellence Loan to support licensed commercial, industrial, and service projects with easy terms. Loan amounts range between BHD 1,500 and 7,000. Repayable over 36 months.",
        "amount": "Between 1,500 and 7,000 BHD.",
        "period": "36 manths",
        "conditions": [
            "The borrower must have a licensed project.",
            "The loan must be used to support working capital or purchase equipment.",
            "The project must be at least 3 years old.",
            "The borrower’s age must be no less than 25 years and no more than 65 years."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "A copy of the commercial registration or project license.",
            "Proof of project income.",
            "The project’s bank statement for the last six months.",
            "The commercial registration must be valid for at least 6 months.",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."
        ]
    },
    "mawsimi": {
        "title": "mawsimi loan",
        "description": "With simple administrative fees and quick, easy procedures, Ebdaa Bahrain offers business owners the opportunity to purchase additional school supplies and pay in installments over 24 months, with repayments starting after the end of the first month.",
        "amount": "Depending on the activity",
        "period": "24 months (repayment starts after the first month).",
        "conditions": [
            "The borrower’s age must be no less than 23 years and no more than 60 years.",
            "The borrower must have a stable and continuous source of income.",
            "The loan must be used for purchasing school supplies."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "The latest salary slip for government sector employees.",
            "Salary certificate for private sector employees.",
            "Bank statement for the last three months"
        ]
    },
    "tafawq": {
        "title": "tafawq loan",
        "description": "Ebdaa Bahrain now offers the Excellence Loan to support licensed commercial, industrial, and service projects with flexible and easy terms. Loan amounts range between BHD 1,000 and 7,000. Repayable over a period of 6 to 24 months.",
        "amount": "Between 1,000 and 7,000 BHD.",
        "period": "6 - 24 manths",
        "conditions": [
            "The borrower must have a licensed project.",
            "The loan must be used to support working capital or purchase equipment.",
            "The project must be at least 3 years old.",
            "The borrower’s age must be no less than 25 years and no more than 65 years."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "A copy of the commercial registration or project license.",
            "Proof of project income.",
            "The project’s bank statement for the last six months.",
            "The commercial registration must be valid for at least 6 months.",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."
        ]
    },
    "najah": {
        "title": "najah loan",
        "description": "ebdaa Bahrain now offers small loans to owners of home-based and mobile projects to help develop and increase their working capital. The loan amounts range between 600 and 1400 Bahraini dinars, repayable over 18 months.",
        "amount": "Between 600 and 1,400 BHD.",
        "period": "18 manths",
        "conditions": [
            "To be used for supporting home-based or mobile businesses.",
            "The borrower must have an existing business or a business idea.",
            "The borrower’s age must be no less than 20 years and no more than 65 years."
        ],
        "documents": [
            "A valid copy of the smart ID.",
            "A copy of the passport or driver’s license.",
            "A copy of the commercial registration or project license.",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."
        ]
    },
    "tamayouz plus": {
        "title": "tamayouz plus loan",
        "description": "Tamayoz+ Loan is offered to support commercial, service, and industrial projects with easy and flexible terms,Loan amounts range from 7,500 to 10,000 Bahraini dinars and are repayable over a period of 36 months.",
        "amount": "Between 7,500 and 1,0000 BHD.",
        "period": "36 شهر",
        "conditions": [
            "The loan must be used to support existing projects or to start a new project.",
            "The borrower’s age must be at least 25 and not exceed 60 years.",
            "The project’s age must not be less than one year."
        ],
        "documents": [
            "A valid copy of the smart ID card.",
            "A valid copy of the passport.",
            "A copy of the commercial registration or project license.",
            "Proof of project income.",
            "Electricity bill for the commercial registration.",
            "Lease contract for the commercial registration.",
            "Proof of fixed income (in case of starting a new project).",
            "Proof of residence (rental contract, ownership document, or EWA electricity and water bill)."
        ]
    }
};
  const branches = [
    {
        "name": "General Administration",
        "phone": "17381000",
        "email": "info@ebdaabahrain.com",
        "location": "Manama – Bahrain"
    },
    {
        "name": "Capital Branch",
        "phone": "17381003",
        "email": "almanama@ebdaabahrain.com",
        "location": "Manama – Bahrain"
    },
    {
        "name": "Aali Branch",
        "phone": "17381013",
        "email": "aali@ebdaabahrain.com",
        "location": "aali – Bahrain"
    },
    {
        "name": "Hamad City Branch",
        "phone": "17381018",
        "email": "hamad.town@ebdaabahrain.com",
        "location": "Hamad city – Bahrain"
    }
];
  const workingHours = {
    "regular": "Sunday – Wednesday: 8 AM – 4 PM",
    "thursday": "Thursday: 8 AM – 1:30 PM",
    "weekend": "Friday and Saturday: Closed"
    };
  const jobs = {
    "Collection": {
        "title": "Collection Specialist",
        "description": "Follow-up on collecting overdue customer receivables",
        "objectives": "The collector is the person responsible for visiting customers who are overdue on payments to follow up on the collection of their outstanding amounts on behalf of the bank.",
        "responsibilities": [
            "Verifying the accuracy of information provided to loan officers.",
            "Continuously following up with customers overdue on payments until receivables are collected.",
            "Coordinating with supervisors and loan officers regarding overdue customers to find necessary solutions.",
            "Monitoring rescheduled loans to ensure payments are made on time according to the rescheduling procedures.",
            "Preparing lawyer’s warnings addressed to customers overdue on payments and their guarantors.",
            "Following up with the legal advisor regarding files referred to them..",
            "Tracking any legal actions taken, including following up on collections with the Execution Department..",
            "Coordinating with operations concerning collection of late payments and fines..",
            "Preparing all reports and statements related to due installments..",
            "Performing any other duties assigned by the direct supervisor."
        ],
        "qualifications": "Bachelor’s degree or diploma in administrative sciences or equivalent fields",
        "experience": "Knowledge of the applicable laws related to this field Familiarity with follow-up and collection procedures.",
        "skills": [
            "Possesses leadership skills.",
            "Proficient in both Arabic and English (writing, reading, and speaking).",
            "Proficient in computer use."
        ]
    },
    "Lending": {
        "title": "Lending Specialist",
        "description": "Promoting client acquisition, studying applications, and conducting field visits, in addition to collection and maintaining the quality of the credit portfolio.",
        "objectives": "Reaching clients, providing suitable loans, and achieving the bank’s credit objectives.",
        "responsibilities": [
            "Promoting the bank’s services and products to obtain loan applications and reach the targeted number of clients.",
            "Conducting field visits to clients according to plans and policies set by the bank..",
            "Reviewing loan applications to verify their accuracy and the correctness of the procedures followed.",
            "Ensuring clients have completed all necessary documents.",
            "Conducting a comprehensive study to assess clients’ financial capacity.",
            "Providing periodic reports to the direct supervisor related to the credit portfolio.",
            "Continuously monitoring the credit portfolio, focusing on timely repayment.",
            "Performing any other duties assigned by the direct supervisor.."
        ],
        "qualifications": "Bachelor’s degree or diploma in administrative sciences, financial sciences, or banking.",
        "experience": "No experience required.",
        "skills": [
            "Possesses leadership skills.",
            "Proficient in Arabic and English (writing, reading, and speaking).",
            "Proficient in computer use.",
            "Ability to train employees."
        ]
    },
    "year": {
        "title": "General presentation",
        "description": "If you don’t find a suitable job among the available positions, you can apply generally, and we will review your resume when suitable opportunities arise.",
        "application_link": "https:\/\/www.ebdaabahrain.com"
    }
};
  const faqs = [
    {
        "question": "How long does the loan approval process take?",
        "answer": "The review and approval process takes from 1 to 2 business days."
    },
    {
        "question": "Can the loan be repaid before the end of the term?",
        "answer": "Yes, early repayment is allowed without any additional fees."
    },
    {
        "question": "Are there any fees for submitting the application?",
        "answer": "Yes, there are non-refundable fees, in addition to administrative fees deducted upon loan disbursement."
    },
    {
        "question": "What is the penalty for late repayment?",
        "answer": "A penalty of 6 Bahraini Dinar is charged for each day of delay in repaying any loan installment.."
    },
    {
        "question": "Is the information verified after submitting the application?",
        "answer": "Yes, the verification is conducted through Benefit Company and governmental or private entities, including field visits.."
    },
    {
        "question": "Can I retrieve my documents after submitting the application?",
        "answer": "Documents cannot be retrieved even if the application is rejected.."
    },
    {
        "question": "Can my information or photos be used for marketing purposes?",
        "answer": "Yes, Ebda3 may use your photos or project information in promotional materials after the loan approval."
    },
    {
        "question": "Are my data shared with external parties?",
        "answer": "Yes, your application data may be shared with official or private entities such as Benefit Company or financiers."
    }
];

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
      toggleBtn.setAttribute('aria-label', 'Open the bot chat');
    } else {
      box.classList.add('show');
      toggleBtn.innerHTML = '<i class="fas fa-times"></i>';
      toggleBtn.setAttribute('aria-label', 'Close the chat');
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
    
    if (lowerMsg.includes('loan') || lowerMsg.includes('Borrowing')) {
      showLoanMenu();
    } 
    else if (lowerMsg.includes('Job ') || lowerMsg.includes('Employment')) {
      showJobsMenu();
    }
    else if (lowerMsg.includes('Branch') || lowerMsg.includes('Branches')) {
      showBranches();
    }
    else if (lowerMsg.includes('Working') || lowerMsg.includes('time') || lowerMsg.includes('Hours')) {
      showWorkingHours();
    }
    else if (lowerMsg.includes('Question') || lowerMsg.includes('Questions') || lowerMsg.includes('Inquiry')) {
      showFAQs();
    }
    else if (lowerMsg.includes('whatsapp') || lowerMsg.includes('whatsapp')) {
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
    alert("Your browser does not support the speech recognition feature.");
    return;
  }

  const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
  recognition.lang = "en-US";

  recognition.onresult = function(event) {
    const transcript = event.results[0][0].transcript;
    document.getElementById('user-input').value = transcript;
    sendMessage();
  };

  recognition.onerror = function(event) {
    console.error("An error occurred in speech recognition:", event.error);
  };

  recognition.start();
}
  function showGreeting() {
    const now = new Date();
    const hour = now.getHours();
    let greeting = '';
    
    if (hour >= 4 && hour < 12) greeting = '☀️ Good Morninf!';
    else if (hour >= 12 && hour < 18) greeting = '🌤️ Good Evening!';
    else greeting = '🌙 Good Evening!';
    
    insertBotMessage(`
      ${greeting} 👋<br>
      I am your smart assistant from Al-Ibda’a for Microfinance. How can I assist you today?
      
      <div style="margin-top: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
        <button class="quick-btn" onclick="showLoanMenu()" aria-label="View loan types">
          <i class="fas fa-hand-holding-usd"></i> Inquiry about loans
        </button>
        
        <button class="quick-btn" onclick="showJobsMenu()" aria-label="View Available Jobs">
          <i class="fas fa-briefcase"></i> Available Jobs
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
        
        <button class="quick-btn" onclick="showSalesWhatsApp()" aria-label="Open Sales WhatsApp">
          <i class="fab fa-whatsapp"></i> Sales WhatsApp
        </button>
      </div>
    `);
  }

  function showLoanMenu() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-list"></i> All Types of Loans (${Object.keys(loans).length} Types):
      </h3>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
    `;
    
    Object.keys(loans).forEach(loan => {
      html += `
        <button class="quick-btn" onclick="showLoanDetails('${loan}')" aria-label="View Details ${loans[loan].title}">
          <i class="fas fa-file-invoice"></i> ${sanitizeInput(loans[loan].title)}
        </button>
      `;
    });
    
    html += `
      </div>
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Return to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
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
      <p><strong>Description:</strong> ${sanitizeInput(loan.description)}</p>
      <p><strong>Amount:</strong> ${sanitizeInput(loan.amount)}</p>
      <p><strong>Duration:</strong> ${sanitizeInput(loan.period)}</p>
      
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);">
          <i class="fas fa-clipboard-check"></i> Conditions:
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
          <i class="fas fa-file-alt"></i> Required Documents:
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
        <button class="quick-btn" onclick="showApplicationForm('${loanType}')" aria-label="Apply for ${loan.title}">
          <i class="fas fa-file-signature"></i> Apply for the loan
        </button>
        <button class="quick-btn back-btn" onclick="showLoanMenu()" aria-label="Back to Loan List">
          <i class="fas fa-arrow-left"></i> Back to Loans
        </button>
      </div>
    `;
    
    insertBotMessage(html);
  }

  function showApplicationForm(loanType) {
    insertBotMessage(`
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-edit"></i> Submit Application ${sanitizeInput(loans[loanType].title)}
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
      
      <button class="quick-btn back-btn" onclick="showLoanDetails('${loanType}')" style="margin-top: 15px;" aria-label="Back to Loan Details">
        <i class="fas fa-arrow-left"></i> Back to Loan Details
      </button>
    `);
  }

function showJobsMenu() {
  insertBotMessage(`
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
  `);
}

function showJobDetails(jobType) {
  const job = jobs[jobType];

  let html = `
    <h3 style="margin-top: 0; color: var(--primary);">
      <i class="fas fa-info-circle"></i> ${sanitizeInput(job.title)}
    </h3>
    <p><strong>Job Description:</strong> ${sanitizeInput(job.description)}</p>
  `;

  // الهدف العام
  if (job.objectives) {
    html += `
      <div style="margin-top: 10px;">
        <strong>General Objective:</strong> ${sanitizeInput(job.objectives)}
      </div>
    `;
  }

  // المهام والمسؤوليات
  if (job.responsibilities) {
    html += `
      <div style="margin-top: 15px; background: white; padding: 10px; border-radius: 10px;">
        <h4 style="color: var(--primary);"><i class="fas fa-tasks"></i> Duties and Responsibilities:</h4>
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
      <div style="margin-top: 10px;"><strong>Academic Qualifications:</strong> ${sanitizeInput(job.qualifications)}</div>
    `;
  }

  // الخبرة
  if (job.experience) {
    html += `
      <div style="margin-top: 10px;"><strong>Work Experience:</strong> ${sanitizeInput(job.experience)}</div>
    `;
  }

  // المهارات
  if (job.skills) {
    html += `
      <div style="margin-top: 15px;">
        <h4 style="color: var(--primary);"><i class="fas fa-lightbulb"></i> Required Skills:</h4>
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
        <h4 style="color: var(--primary);"><i class="fas fa-clipboard-list"></i> Requirements:</h4>
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
        <button class="quick-btn" aria-label="Open the careers page on the bank's website.">
          <i class="fas fa-external-link-alt"></i> Apply Now
        </button>
      </a>

      <button class="quick-btn back-btn" onclick="showJobsMenu()" aria-label="Back to Job Listings">
        <i class="fas fa-arrow-left"></i> Back to Jobs
      </button>
    </div>
  `;

  insertBotMessage(html);
}


  function showBranches() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-map-marked-alt"></i> Al-Ibda’a Microfinance Branches:
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
          <button class="quick-btn" aria-label="Open Google Maps to display the branches.">
            <i class="fas fa-map"></i> Show on Map
          </button>
        </a>
        
        <button class="quick-btn back-btn" onclick="showGreeting()" aria-label="Back to Home Page">
          <i class="fas fa-arrow-left"></i> Back to Home
        </button>
      </div>
    `;
    
    insertBotMessage(html);
  }

  function showWorkingHours() {
    insertBotMessage(`
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
    `);
  }

  function showFAQs() {
    let html = `
      <h3 style="margin-top: 0; color: var(--primary);">
        <i class="fas fa-question-circle"></i> Frequently Asked Questions:
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
      <button class="quick-btn back-btn" onclick="showGreeting()" style="margin-top: 15px;" aria-label="Back to Home Page">
        <i class="fas fa-arrow-left"></i> Back to Home
      </button>
    `;
    
    insertBotMessage(html);
  }

function showSalesWhatsApp() {
  insertBotMessage(`
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
    `);
}


  function showDefaultResponse() {
    insertBotMessage(`
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
    `);
  }
