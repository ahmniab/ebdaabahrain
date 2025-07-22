 <section id="application" class="section" data-stellar-background-ratio="0.09">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">LOAN APPLICATION</h2>
          <hr class="lines">
          <p class="section-subtitle">Apply now to join the parade of successful entrepreneurs!<br>Fill in all required fields and we will be in touch in 72 hours!</p>
        </div>
        <div class="row ">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="contact-block">
             <form id="applicationForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="name_apply" name="name_apply" placeholder="Full Name"pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="project_apply" name="project_apply" placeholder="Loan Purpose" "[A-Za-z\s]{3,50}" required data-error="Please enter your Loan Purpose">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="mobile_apply" name="mobile_apply" placeholder="Mobile Number" pattern="[0-9-]{8,15}" required data-error="Please enter your mobile number">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                    <select id="type_apply" name="type_apply" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required data-error="Please select the loan type">
						<option value="">Loan Type</option>
						<option value="Sayedati">Sayidati</option>
						<option value="Ebdaa">Ebdaa</option>
						<option value="AlNajah">Al Najah</option>
						<option value="AlAmal">Al Amal</option>
						<option value="AlTamayoz">Al Tamayuz</option>
						<option value="AlTafawoq">Al Tafawq</option>
					</select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="cpr_apply" name="cpr_apply" placeholder="CPR Number" pattern="[0-9-]{9,}" required data-error="Please enter your CPR number">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
						<select name="subcategory" id="subcategory" required data-error="Please select the loan amount">
							<option value="">Select the loan amount</option>
						</select>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="address_apply" name="address_apply" placeholder="Address" "[A-Za-z1-9-\,\s]{3,30}" required data-error="Please enter your address">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control application-input" id="job_apply" name="job_apply" placeholder="Current Job" pattern="[A-Za-z\s]{3,30}" required data-error="Please enter your Current Job">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <p><b>Guarantees</b></p>
                  </div>



                  <div class="col-md-12">
            				<div class="form-check form-check-inline">
            					<input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee1" value="guarantee1">
                      <label class="form-check-label" for="guarantee1"> One guarantor / several guarantors with good financial status. Copies of their identity card and proof of income will be provided.</label>
                    </div>
                  </div>

                  <div class="col-md-12">
				  			    <div class="form-check form-check-inline">
                			<input class="form-check-input" type="checkbox" name="guarantee" id="guarantee2" value="guarantee2">
                			<label class="form-check-label" for="guarantee2"> Guarantee/Payment cheques provided by:</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options1" value="option1">Me personally</label>
                      <label><input class="form-check-input" type="radio" name="Options" id="Options2" value="option2">guarantor /guarantors</label>
                     <label><input class="form-check-input" type="radio" name="Options" id="Options3" value="option3">third party </label>
				            </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee3" value="guarantee3">
                    <label class="form-check-label" for="guarantee3">Monthly transfer from my salary at the following bank</label>
                    <input type="text" class="form-check-input" id="bankname1" name="bankname1">
                    <label class="form-check-label" for="bankname1">The net value of my salary is: BD</label>
                    <input type="text" class="form-check-input" id="salaryvalue1" name="salaryvalue1">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee4" value="guarantee4">
                    <label class="form-check-label" for="guarantee">Monthly transfer from the guarantor / guarantor's salary at the following Bank</label>
                    <input type="text" class="form-check-input" id="bankname2" name="bankname2">
                    <label class="form-check-label" for="bankname2">According to the repayment schedule.</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <input  class="form-check-input" type="checkbox" name="guarantee" id="guarantee5" value="option5">
                    <label class="form-check-label col-sm-5" for="guarantee5">Other Collaterals as follows:</label>
                    <input type="text" class="form-check-input col-sm-10" id="others" name="others">
                  </div>
                </div>
                <div class="col-md-12">
				          <p><br><b>To learn about the terms of application </b><a href="#" class="btn-link" data-toggle="modal" data-target="#conditions" style="color:#61D2B4"><b>please click here </b></a>.</p>
                </div>

           <div class="col-md-12">
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
               <label class="form-check-label" for="invalidCheck">I acknowledge that I have read and understood all the terms and conditions of Loan Applications and will not challenge this acknowledgement or revoke it in the future. </label>
             </div>
             <br>
           </div>
           <div class="col-md-12">
             <div id="check_text" class="help-block with-errors"></div>
           </div>


                  <div class="col-md-12">
                    <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">Apply</button>
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
	
	<?php include "includes/conditions_Modal.php";?>