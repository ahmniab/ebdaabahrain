 <section id="application" class="section" data-stellar-background-ratio="0.09">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">طلب قرض</h2>
          <hr class="lines">
          <p class="section-subtitle"> سارع بتقديم طلبك الان وانضم الى قوافل الناجحين<br> إملئ جميع الحقول أدناه المطلوبة ليصلنا طلبك <br>سيقوم موظفونا بالتواصل معك خلال 72 ساعة.</p>
		  
        </div>
        <div class="row ar-dir">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="contact-block">
              <form id="applicationForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="name_apply" name="name_apply" placeholder="الاسم الرباعي" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" required data-error="الرجاء قم بادخال الاسم كامل ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="project_apply" name="project_apply" placeholder="الغاية من القرض" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]{3,40}" required data-error="الرجاء ادخال الغاية من القرض">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="mobile_apply" name="mobile_apply" pattern="[0-9-]{8,15}" placeholder="رقم المحمول" required data-error="الرجاء ادخال رقم المحمول ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

				  <div class="col-md-6">
                    <div class="form-group">
                    <select id="type_apply" name="type_apply" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required data-error="الرجاء اختيار نوع القرض">
						<option value="">اختر نوع القرض المطلوب</option>
						<option value="Sayedati">قرض سيدتي</option>
						<option value="Ebdaa">قرض الإبداع</option>
						<option value="AlNajah">قرض النجاح</option>
						<option value="AlAmal">قرض الامل</option>
						<option value="AlTamayoz">قرض التميز</option>
						<option value="AlTafawoq">قرض التفوق</option>
					</select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

				   <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="cpr_apply" name="cpr_apply" placeholder="رقم البطاقة الشخصية" pattern="[0-9-]{9}" required data-error="الرجاء ادخال الرقم الشخصي ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
						<select name="subcategory" id="subcategory" required data-error="الرجاء اختيار قيمة القرض">
							<option value="">قم باختيار قيمة القرض</option>
						</select>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>

				   <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="address_apply" name="address_apply" placeholder="عنوان  السكن" pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF1-9-\s\,]{3,50}" required data-error="الرجاء ادخال  العنوان كامل">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="job_apply" name="job_apply" placeholder="الوظيفه الحاليه " pattern="[A-Za-z\u0600-\u065F\u066A-\u06EF\u06FA-\u06FF\s]{3,30}" required data-error="الرجاء ادخال المسمى الوظيفي ">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>


                  <div class="col-md-12">
                      <p class="ar-txt"><b>الضمانات المقترحة (إختر كل ما ينطبق)</b></p>
                  </div>



                  <div class="col-md-12">
            				<div class="form-check form-check-inline" style="float:right">
            					<input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee1" value="guarantee1">
                      <label class="form-check-label" for="guarantee1"> كفيل واحد/عدة كفلاء ذوي وضع مادي مناسب ومرفق طيه صورة عن بطاقاتهم الشخصية وإثباتات دخولهم </label>
                    </div>
                  </div>

				          <div class="col-md-12">
				  			    <div class="form-check form-check-inline" style="float:right">
                			<input class="form-check-input" type="checkbox" name="guarantee" id="guarantee2" value="guarantee2">
                			<label class="form-check-label" for="guarantee2"> شيكات ضمان / سداد مقدمة من :</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options1" value="option1">مني شخصيا </label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options2" value="option2">كفيل / الكفلاء  </label>
                     <label><input class="form-check-input" type="radio" name="Options" id="Options3" value="option3">طرف ثالث </label>
				            </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee3" value="guarantee3">
                    <label class="form-check-label" for="guarantee3">تحويل شهري من راتبي في بنك</label>
                    <input type="text" class="form-check-input" id="bankname1" name="bankname1">
                    <label class="form-check-label" for="bankname1">وقيمة الراتب الصافي:</label>
                    <input type="text" class="form-check-input" id="salaryvalue1" name="salaryvalue1">
					<label class="form-check-label" for="bankname1">دينار</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee4" value="guarantee4">
                    <label class="form-check-label" for="guarantee">تحويل دوري من راتب الكفيل / الكفلاء في بنك</label>
                    <input type="text" class="form-check-input" id="bankname2" name="bankname2">
                    <label class="form-check-label" for="bankname2">حسب النموذج المقرر.</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline" style="float:right">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee5" value="option5">
                    <label class="form-check-label col-sm-5" for="guarantee5">الضمانات الأخرى التالية:</label>
                    <input type="text" class="form-check-input col-sm-10" id="others" name="others">
                  </div>
                </div>
                <div class="col-md-12">
				          <p class="ar-txt"><br><b>لمعرفة شروط تقديم الطلب  </b><a href="#" class="btn-link" data-toggle="modal" data-target="#conditions" style="color:#61D2B4"><b>يرجى الضغط هنا </b></a>.</p>
                </div>

           <div class="col-md-12">
             <div class="form-check form-check-inline" style="float:right">
               <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
               <label class="form-check-label" for="invalidCheck">أقر أننى قرأت وتفهمت كافة شروط تقديم الطلب وتعتبر موافقتي عليها بمثابة إقرار نهائي غير قابل للطعن أو الرجوع فيه  مستقبلا . </label>
             </div>
             <br>
           </div>
           <div class="col-md-12">
             <div id="check_text" class="help-block with-errors"></div>
           </div>
                  <div class="col-md-10">
                    <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">تقدم بطلبك</button>
                      <div id="msgSubmit-apply" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	     <!-- conditions Modal -->
        <div class="modal fade ar-dir" id="conditions" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body" style="color:black;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row ar-txt">
                <div class="col-sm-12">
                  <h4>إقرار</h4>
                  <hr>

                  </div>
                  <div class= "container" >
					<p><b>أولا </p></b>
                      <p> أن كامل المعلومات في ملف هذا الطلب وعلى كل صفحة من صفحاته (قبل هذه الصفحة وبعدها) صحيحة وتمثل الواقع  وأن تقديم أي معلومات مغلوطة بقصد أو بغير قصد, سوف تؤدي إلى رفض الطلب مع احتفاظ البنك "في جميع الأحوال" بحق الموافقة على القرض كما هو أو تخفيض أو رفض القرض دون ان يكون لنا حق الاعتراض على ذلك .</p>

                    
                  
					<p><b>ثانيا</p></b>
                      <p>نفوض بنك الإبداع للتمويل متناهي الصغر بالتحقق من صحة المعلومات المقدمة في هذا الطلب أو مسار التمويل الممنوح لنا لاحقا ومن أي مصدر كان دون
أن يحق لنا الاعتراض على ذلك اتجاه البنك و/أو أي جهة كانت ونتنازل عن السرية المصرفية بهذا الخصوص ويشمل هذا التفويض الاستفسار عنا من
شركة "بنفت" أو من أي جهة أمنية و/أو حكومية و/أو مدنية و/أو خاصة و/أو عامة سواءا أكانت داخلية أم خارجية وكما ونسمح لموظفي البنك أو من يفوضهم
بذلك بزيارتي و/أو زيارة الكفلاء في أماكن تواجدهم في أي وقت قبل منح القرض و/أو بعد ذلك..</b>

                    
                  
             
                      <p><b>ثالثا </p></b>
                      <p>نوافق  على دفع رسوم لتقديم الطلب -غير قابلة للاسترداد- حتى في حال رفض الطلب إضافة للرسوم الإدارية ورسوم تمرير الطلب  Processing Fees التي سيقتطعها البنك مقدما وغير القابلة للاسترداد بمجرد صرف القرض لنا بموجب شيك صادر من البنك. كما ونقر بأنه  لا يحق  لنا المطالبة باسترجاع أي من المستندات المرتبطة بهذا الطلب حتى لو تم رفض الطلب.</p>

                   
                      <p><b>رابعا </p></b>
                      <p>في حال الموافقة على التمويل, نوافق على الالتزام بجميع السياسات والإجراءات المتبعة من قبل البنك بما فيها السداد على الوقت, ودفع غرامات التأخير بواقع
(6 دينار بحريني) عن كل يوم تأخير في سداد أي دفعة من دفعات القرض المقررة في الأوقات المحددة من قبل البنك.</p>

                  
                      <p><b>خامسا </p></b>
                      <p>نقر في حال الرغبة بالحصول على أية خدمات من البنك مرتبطة بهذا القرض, أن نسدد الرسوم المحددة من قبل البنك (والمنشورة داخل الفرع بشكل واضح) دون أي اعتراض على ذلك.</p>

                   
                      <p><b>سادسا </p></b>
                      <p>نعطي بنك الإبداع للتمويل متناهي الصغر و/او المؤسسات التابعة له و/أو المؤسسات المتعاونة معه و/أو الجهات التي تملك الحق في استخدام المعلومات
والوثائق التي قدمناها في هذا الطلب في أية نشرات تسويقية و/أو ترويجية لنشاطات البنك و/أو تلك المؤسسات والجهات حتى بعد انتهاء القرض وسداد كافة
دفعاته. وكما ونعطي البنك الحق في الحصول على صور تخصنا و/أو تخص المشروع لغايات استخدامها في التسويق والترويج لحساب البنك و/أو تلك
المؤسسات والجهات. ونقر بأنه يحق للبنك و/او تلك المؤسسات والجهات الاستمرار في استخدام تلك الصور والبيانات وقصص نجاحاتنا في أية مواد تسويقية
و/أو دعائية و/أو وثائقية و/أو أي طريقة أخرى مهما كانت وبدون تحديد لمدة حق هذا الاستخدام قبل و/او أثناء و/او بعد انتهاء هذا القرض.</p>

                   
                      <p><b>سابعا </p></b>
                      <p>نعطي بنك الإبداع للتمويل متناهي الصغر الحق في تزويد أي جهة رسمية أو خاصة سوأء أكانت محلية أو خارجية بأية معلومات وردت في هذا الطلب,
ونخص بالذكر أحقية البنك المطلقة في تزويد شركة "بنفت" و/أو أي جهة حكومية و/أو شبه حكومية و/أو جهة متعاونة و/أو جهة ممولة و/او غيرها من الجهات
بتلك المعلومات ونتحمل أي تبعات في حال تبين أن هذه المعلومات غير حقيقية أو متضاربة مع تلك المعلومات الموجودة لدى تلك الجهات.</p>

                   </div>
                   <br></br>
                   <br></br>
                    <div>
                   <table class="table table-bordered" style="margin-right: 20px">
  <thead>
    <tr>
      <th scope="col" colspan="3" style="text-align: center;"><h4>رسوم خدمات بنك الابداع</h4></th>
    </tr>
    <tr>
      <th scope="col">الخدمة</th>
      <th scope="col"></th>
      <th scope="col">الرسم د.ب</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th rowspan="6">تقديم الطلب</th>
      <td>قرض سيدتي والابداع</td>
      <td>5</td>
    </tr>
    <tr>
      <td>قرض النجاح</td>
      <td>7</td>
    </tr>
    <tr>
      <td>قرض الأمل</td>
      <td>10</td>
    </tr>
    <tr>
      <td>قرض التفوق</td>
      <td>20</td>
    </tr>
    <tr>
      <td>قرض التميز</td>
      <td>30</td>
    </tr>
    <tr>
      <td>قرض موسمي</td>
      <td>5</td>
    </tr>
    <tr>
      <th rowspan="3">المصاريف</th>
      <td>مصاريف القرض الشهرية</td>
      <td>1.0%</td>
    </tr>
    <tr>
      <td>مصاريف ادارية شهرية (الحد الأقصى)</td>
      <td>3.5%</td>
    </tr>
    <tr>
      <td>مصاريف تأجيل الدفعة (شهرياً)</td>
      <td>3.0%</td>
    </tr>
    <tr>
      <th rowspan="1">رسائل وشهادات</th>
      <td>خلال يوم عمل</td>
      <td>15</td>
    </tr>
    <tr>
      <th rowspan="5">خدمات أخرى</th>
      <td>غرامة شيك معاد</td>
      <td>20</td>
    </tr>
    <tr>
      <td>غرامة تأخير / اليوم</td>
      <td>6</td>
    </tr>
    <tr>
      <td>مصاريف استرجاع مبلغ (بحد أدنى 5 دينار)</td>
      <td>2%</td>
    </tr>
    <tr>
      <td>رسوم تحصيل ميداني من موقع العميل/الكفيل</td>
      <td>2</td>
    </tr>
    <tr>
      <td>رسوم تغيير الكفيل</td>
      <td>20</td>
    </tr>
  </tbody>
</table>
</div>

                  </div>
                </div>

              
              <div class="modal-footer">
                <button type="button" class="btn btn-common fadeInUp animated"data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible;-webkit-animation-duration: 1000ms; -moz-animation-duration: 1000ms; animation-duration: 1000ms;-webkit-animation-delay: 400ms; -moz-animation-delay: 400ms; animation-delay: 400ms;" data-dismiss="modal">إغلاق</button>
                </div>
                </div>
            </div>
          </div>
        </div>