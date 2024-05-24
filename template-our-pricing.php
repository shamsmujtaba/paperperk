<?php
/* Template Name: Our Pricing */
include('header.php');
?>

    <div class="hero-bg d-flex justify-content-center align-items-center">

        <h1 class="heading-big mb-3 text-white">Pricing</h1>

        <ul class="circles h-50">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>


    <!-- -----------------------Calculate Form------------------ -->

        <div class="container-fluid section-bg-color" id="sec-calc-price">

            <div class="zoom-out-cont">
        
              <div class="row">
        
                <div class="col-md-7 no-padding">
        
                    <div class="pricing-top-cont">
        
                      <h2 class="pricing-head">Calculate Your Price</h2>
                
                    </div>
        
                  <div class="pricing-form-head pricing-form-outer-container ">
        
        
        
                    <form id="pricing-form" action="https://order.paperperk.com/" method="post">        
        
                      <div class="">
        
        
                        <div class="row mb-3">
        
                          <div class="col-md-6 mb-3">
        
                            <div class="form-group inp">
        
                              <label class="control-label d-block mb-2">Phone:</label>
        
                              <input type="number" id="phone" onchange="saveData()" class="select-css" onKeyPress="if(this.value.length==14) return false;" placeholder="Enter Phone" name="phone"
                                required="">
        
                            </div>
        
                          </div>
        
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-2">Type Of Document:</label>
                              <select id="documentType"  name="documentType"  onmouseover="fetchDocumentType()" onchange="saveData()" class="select-css" required>
                                option value="">Select Document Type</option>

                      <option value="Admission Essay">Admission Essay</option>
                      <option value="Analytical Essay">Analytical Essay</option>
                      <option value="Annotated Bibliography">Annotated Bibliography</option>
                      <option value="Application Letter">Application Letter</option>
                      <option value="Argumentative Essay">Argumentative Essay</option>

                              </select>
                            </div>
                          </div>
        
                        </div>
        
        
                        <div class="row mb-3">
        
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label mb-2">Acadmemic Level:</label>
        
                              <div class="radio-cont" style="padding-left: 20px;">
                                <label class="r-label mt-2 mb-2">
                                  <input type="radio"  class="option-input radio high-school" name="acedamic_level" value="High School" onchange="saveData()" checked />
                                  High School
                                </label>
        
                                <label class="r-label mt-2 mb-2">
                                  <input type="radio" class="option-input radio college-undergraduate" name="acedamic_level" value="College-undergraduate" onchange="saveData()" />
                                  College Undergraduate
                                </label>
        
                                <label class="r-label mt-2 mb-2">
                                  <input type="radio" class="option-input radio masters" name="acedamic_level" value="Masters" onchange="saveData()" />
                                  Masters
                                </label>
        
                                <label class="r-label mt-2 mb-2">
                                  <input type="radio" class="option-input radio doctoral" name="acedamic_level" value="PHD" onchange="saveData()" />
                                  Doctoral
                                </label>
        
                              </div>
        
        
                            </div>
                          </div>
                        </div>
        
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="">
                              <label class="control-label mb-2">Deadline Date:</label>
                              <input type="date" class="form-control" id="DeadlineDate" onchange="saveData()" placeholder="Select Deadline"
                                name="DeadlineDate" required="">
                            </div>
                          </div>
                          <div class="col-md-6 deadline-pad">
                            <div class="form-group">
                              <span class="afTimeOrder">
                                <label class="control-label mb-2">Select Time:</label>

                                <select name="hours" id="hours" onchange="saveData()" class="select-css" required="">
                                  <option value="">Select Time</option>
                                  <option value="00:00">00:00</option>
                                  <option value="01:00">01:00</option>
                                  <option value="02:00">02:00</option>
                                  <option value="03:00">03:00</option>
                                  <option value="04:00">04:00</option>
                                  <option value="05:00">05:00</option>
                                  <option value="06:00">06:00</option>
                                  <option value="07:00">07:00</option>
                                  <option value="08:00">08:00</option>
                                  <option value="09:00">09:00</option>
                                  <option value="10:00">10:00</option>
                                  <option value="11:00">11:00</option>
                                  <option value="12:00">12:00</option>
                                  <option value="13:00">13:00</option>
                                  <option value="14:00">14:00</option>
                                  <option value="15:00">15:00</option>
                                  <option value="16:00">16:00</option>
                                  <option value="17:00">17:00</option>
                                  <option value="18:00">18:00</option>
                                  <option value="19:00">19:00</option>
                                  <option value="20:00">20:00</option>
                                  <option value="21:00">21:00</option>
                                  <option value="22:00">22:00</option>
                                  <option value="23:00">23:00</option>
        
                                </select>
                              </span>
                            </div>
                          </div>
                        </div>
        
                        <div class="row mb-3">
        
                          <!-- <div class="col-md-3"></div> -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label mb-2">No. of Pages:</label>
                              <select class="form-control select-css" name="pages" id="pages" onmouseover="fetchNoOfPages()" onchange="saveData()" required>
                               <option value="">Select No. of Pages</option>
                      <option value="1">1 Page ~ 300 Words</option>
                      <option value="2">2 Pages ~ 600 Words</option>
                      <option value="3">3 Pages ~ 900 Words</option>
                      <option value="4">4 Pages ~ 1200 Words</option>
                      <option value="5">5 Pages ~ 1500 Words</option>
                      <option value="6">6 Pages ~ 1800 Words</option>
                      <option value="7">7 Pages ~ 2100 Words</option>
                      <option value="8">8 Pages ~ 2400 Words</option>
                      <option value="9">9 Pages ~ 2700 Words</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-md-6 mt-4">
        
                            <span class="price-text">Limited Time</span>
                            <span class="discount-badge"> DISCOUNT 50% OFF</span> <br>
        
                          </div>
                        <p style="color:red;" id="hours-message"></p>
                          <input type="hidden" name="" id="quoted_price">
                          <input type="hidden" name="" id="lead_id" value="0">
                          <input type="hidden" name="" id="payment_type" value="1">
                         
                          <!-- 
                        <div class="row mb-10">
                          <div class="col-md-12">
        
                            <span class="price-text">Limited Time</span>
                            <span class="discount-badge"> Discount 50% OFF</span> 
                            <span class="price-text line-th">$0.00</span>
                            <span class="price-text disc-price">$0.00</span>
        
                          </div>
                        </div> -->
        
        
                          <div class="row mt-10 lf-no-padding">
        
                            <div class="col-md-8 " style="padding-left: 30px;">
                              <span class="pay-label "> Discount Price: </span>
                              <span class="price-text line-th actual">$0.00</span>
                              <span class="price-calc you-pay" id="">$0.00</span>
        
                            </div>
        
                            <div class="col-md-4">
                              <button type="submit" style="display:none" id="submit_btn" class="order-now-btn">Order Now</button>
        
                            </div>
        
        
                          </div>
        
                        </div>
        
                      </div>
        
                  </div>
        
        
                </div>
        
        
                <div class="col-md-5 right-side-col">
        
                  <div class="img-cont"> <img src="<?php bloginfo('template_directory'); ?>/images/Pricing-pg-cta-1.png" alt="Pricing-pg-cta-1" class="right-img"></div>
        
                </div>
        
              </div>
        
            </div>
        
          </div>



    <!-- -----------------------Pricing Cards------------------ -->
    <div class="container write-a-paper-section-tb-padding">

        <div class="row">
            <div class="col-md-3 col-sm-6">

                <div class="pricingTable">

                    <div class="pricingTable-header">

                        <i class="fas fa-school"></i>

                        <div class="price-value"> 50% OFF </div>

                    </div>

                    <h3 class="heading">High School</h3>

                    <div class="feature-item-pr">

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">8+ Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$23.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$10.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">6-7 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$24.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$11.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">4-5 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$18.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$12.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">3 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$28.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$13.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">2 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$32.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$15.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">24 Hours</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$36.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$17.00</b></div>

                        </div><!--Price End-->

                    </div>

                    <div class="btn btn-custom btn-light-blue btn-shadow mt-3">

                        <a href="https://order.paperperk.com/" class="text-white ">Get a Quote</a>
                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="pricingTable light-blue">

                    <div class="pricingTable-header">

                        <i class="fa fa-briefcase"></i>

                        <div class="price-value"> 50% OFF </div>

                    </div>

                    <h3 class="heading">College / University</h3>

                    <div class="feature-item-pr">

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">8+ Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$29.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$13.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">6-7 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$30.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$14.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">4-5 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$33.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$15.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">3 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$35.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$16.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">2 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$37.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$17.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">24 Hours</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$40.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$19.00</b></div>

                        </div><!--Price End-->

                    </div>

                    <div class="btn btn-custom btn-light-blue btn-shadow mt-3">

                        <a href="https://order.paperperk.com/" class="text-white">Get a Quote</a>

                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="pricingTable">

                    <div class="pricingTable-header">

                        <i class="fas fa-graduation-cap"></i>

                        <div class="price-value"> 50% OFF</div>

                    </div>

                    <h3 class="heading">Master / MBA</h3>

                    <div class="feature-item-pr">

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">8+ Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$33.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$15.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">6-7 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$34.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$16.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">4-5 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$37.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$17.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">3 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$39.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$18.50</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">2 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$44.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$21.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">24 Hours</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$46.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$22.00</b></div>

                        </div><!--Price End-->

                    </div>

                    <div class="btn btn-custom btn-light-blue btn-shadow mt-3">

                        <a href="https://order.paperperk.com/" class="text-white">Get a Quote</a>

                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

                <div class="pricingTable light-blue">

                    <div class="pricingTable-header">

                        <i class="fas fa-book"></i>

                        <div class="price-value">50% OFF</div>

                    </div>
                    <h3 class="heading">PhD</h3>

                    <div class="feature-item-pr">

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">8+ Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$56.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$27.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">6-7 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$58.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$28.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">4-5 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$60.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$29.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">3 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$62.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$30.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">2 Days</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$66.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$32.00</b></div>

                        </div><!--Price End-->

                        <div class="row"><!--Price Start-->

                            <div class="col-md-5 col-5">
                                <div class="days-cap">24 Hours</div>
                            </div>

                            <div class="col-md-4 col-4"><span>

                                    <i><strong>$70.00</strong></i>

                                </span></div>

                            <div class="col-md-3 col-3"><b>$34.00</b></div>

                        </div><!--Price End-->

                    </div>

                    <div class="btn btn-custom btn-light-blue btn-shadow mt-3">

                        <a href="https://order.paperperk.com/" class="text-white">Get a Quote</a>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- -----------------Section - 24-hours Support --------------- -->

    <div class="section-bg-color pt-5 pb-5">

    <div class="container">

      <div class="row">

        <div class="col-md-4 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4">

                <img src="<?php bloginfo('template_directory'); ?>/icons/24-hr-support.png" class="w-100" alt="24-hr-support">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">24/7 Support</div>

                <p>Connections with Writers and support</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4">

                <img src="<?php bloginfo('template_directory'); ?>/icons/safe-service.png" class="w-100" alt="safe-service">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">Safe Service</div>

                <p>Privacy and Confidentiality Guarantee</p>

              </div>

            </div>
          </div>

        </div>

        <div class="col-md-4 ">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4 ">

                <img src="<?php bloginfo('template_directory'); ?>/icons/quality-score.png" class="w-100" alt="quality-score">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">4.72</div>

                <p class="mb-0">Average Quality Score</p>

                <div class="d-flex justify-content-between align-items-center">
                  <div class="small-ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
  
  
<script>
//   document.getElementById('paymentStatus').addEventListener("change", saveData);

  function saveLead() {
    var documentType = $("#documentType").val();
    var otherdocumentType = $("#otherdocumentTypeValue").val();
    var phone = $("#phone").val();
    var phoneCode = $('.iti__selected-dial-code').text();
    phone = phoneCode + '' + phone;
    var date = $("#DeadlineDate").val();
    var time = $("#hours").val();
    var pages = $("#pages").val();
    
     var academic_level = '';
     if ($('.high-school').is(':checked')) {

                academic_level = $('.high-school').val();

            } else if ($('.college-undergraduate').is(':checked')) {

                academic_level = $('.college-undergraduate').val();

            } else if ($('.masters').is(':checked')) {

                academic_level = $('.masters').val();

            } else if ($('.doctoral').is(':checked')) {

                academic_level = $('.doctoral').val();

            } else {

                academic_level = '';

            }
    
    var generate_lead = 'generate_lead';
    var lead_id = $("#lead_id").val();
    var price = $("#quoted_price").val();
    
    $.ajax({
      url: '<?php bloginfo('template_directory'); ?>/functions.php',
      type: 'POST',
      data: {
        documentType: documentType,
        pages: pages,
        time: time,
        date: date,
        phone: phone,
        academic_level: academic_level,
        generate_lead: generate_lead,
        lead_id: lead_id,
        price: price,
        otherdocumentType: otherdocumentType
      },
      success: function(responseData) {
        var response = JSON.parse(responseData);
        $("#lead_id").val(response.lead_id);
      }
    });
  }

  function saveData() {
  

    var otherdocumentType = "";
    var documentType = $("#documentType").val();
    // alert(documentType);
    if (documentType === 'Other') {
        otherdocumentType = $("#otherdocumentTypeValue").val();
        $("#otherdocumentTypeDiv").show();
    } else {
        $("#otherdocumentTypeDiv").hide();
    }
    var phone = $("#phone").val();
    var date = $("#DeadlineDate").val();
    var time = $("#hours").val();
    var pages = $("#pages").val();
    var academic_level = '';
    if ($('.high-school').is(':checked')) {
        academic_level = $('.high-school').val();
    } else if ($('.college-undergraduate').is(':checked')) {
        academic_level = $('.college-undergraduate').val();
    } else if ($('.masters').is(':checked')) {
        academic_level = $('.masters').val();
    } else if ($('.doctoral').is(':checked')) {
        academic_level = $('.doctoral').val();
    } else {
        academic_level = '';
    }
    var inputEmail = $("#email").val();
    var title = $("#topic").val();
    var subject = $("#projectsubject").val();
    var otherSubject = $("#otherSubject").val();
    var citation_style = $("#otherCitationstyle").val();
    var otherCitationValue = $("#otherCitationValue").val();
    var no_of_sources = $("#NumberSources").val();
    var description = $("#description").val();
    // REGEX
    var regEx = /^[a-zA-Z ]{2,30}$/;
    var phoneno = '';
    phoneno = /^.{8,14}$/;
    // END REGEX
    // 2nd Step Data
    // End Step Data
    var demo1 = "";
    var day1, day2, day3, day4_5, day6_7, day8;
    if (academic_level == "High School") {
        day1 = 19.0;
        day2 = 17.0;
        day3 = 15.5;
        day4_5 = 14.0;
        day6_7 = 13.0; /*15.50*/
        day8 = 12.5;
    } else if (academic_level == "College-undergraduate") {
        day1 = 21.0; /*22.50*/
        day2 = 19.5; /*21.50*/
        day3 = 18.5; /*20.50*/
        day4_5 = 17.5;
        day6_7 = 16.0; /*18.50*/
        day8 = 15.5;
    } else if (academic_level == "Masters") {
        day1 = 24.0;
        day2 = 23.0; /*23.50*/
        day3 = 20.5; /*22.75*/
        day4_5 = 19.5;
        day6_7 = 18.0; /*20.50*/
        day8 = 17.5;
    } else if (academic_level == "PHD") {
        day1 = 36.0;
        day2 = 34.0;
        day3 = 32.0;
        day4_5 = 31.0;
        day6_7 = 30.0;
        day8 = 29.0;
    }
    var d = new Date();
    var dateDiff = 0;
    var seconds_in_day = 86400;
    var currentDate = d.getTime();
    var ppg = 0;
    var selectedDate = new Date(date).getTime();
    var dateDiff = Math.ceil(((selectedDate - currentDate) / 1000 / 86400));
    var selectedDate2 = new Date(date + ',' + time).getTime();
    var seconds = Math.floor((selectedDate2 - (currentDate)) / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);
    var hours = hours - (days * 24);
    var minutes = minutes - (days * 24 * 60) - (hours * 60);
    var seconds = seconds - (days * 24 * 60 * 60) - (hours * 60 * 60) - (minutes * 60);
    // alert(day1);
    if (dateDiff == 0) {
        ppg = day1;
    } else if (dateDiff == 1) {
        ppg = day1;
    } else if (dateDiff == 2) {
        ppg = day2;
    } else if (dateDiff == 3) {
        ppg = day3;
    } else if (dateDiff == 4 || dateDiff == 5) {
        ppg = day4_5;
    } else if (dateDiff == 6 || dateDiff == 7) {
        ppg = day6_7;
    } else {
        ppg = day8;
    }
    // alert(ppg);
    if (academic_level == "0" || isNaN(dateDiff)) {
        demo1 = day1;
    } else {
        demo1 = ppg;
    }
    demo1 *= pages;
    var price = 0;
    var totalPrice = 0;
    var perr = (demo1 * 2).toFixed(2);
    var per = perr * 10;
    var ttl = per / 100;
    price = parseFloat(ttl) + parseFloat(perr);
    var halfPrice = price / 2;
    if (documentType == '') {
    } else {
        if (documentType == 'Other') {
            if (otherdocumentType != '') {
            } else {
                documentType = otherdocumentType;
            }
        }
    }
    if (phone === "" ||
        pages === "" || documentType === "" ||
        time === "" || academic_level === "" || date === "") {
        $(".total").text('$0');
        $('.you-pay').text('$0');
        $('.actual').text('$0');
        $("#submit_btn").hide();
    } else {
        if (phone.match(phoneno)) {
            $("#submit_btn").show();
            if ($("#paymentStatus").is(":checked")) {
                $(".actual").html('$' + halfPrice.toFixed(2) / 2);
                $('.you-pay').text('$' + halfPrice.toFixed(2));
                $("#quoted_price").val(halfPrice.toFixed(2) / 2);
                $("#payment_type").val(0);
            } else {
                $('.you-pay').text('$' + halfPrice.toFixed(2));
                $(".actual").text('$' + halfPrice.toFixed(2) * 2);
                $("#quoted_price").val(halfPrice.toFixed(2));
                $("#payment_type").val(1);
            }
            saveLead();
            if (citation_style == '') {
            } else {
                if (citation_style == 'Other') {
                    if (otherCitationValue != '') {
                    } else {
                        citation_style = otherCitationValue;
                    }
                }
            }
            if (subject == '') {
            } else {
                if (subject == 'Other') {
                    if (otherSubject != '') {
                    } else {
                        subject = otherSubject;
                    }
                }
            }
            $('.actual').html('$' + price.toFixed(2));
        }
    }
}

  function reviewOrderInfo() {



    $('#rev-academic_level').text($('#academic_level').val());

    $('#rev-phone').text($('#phone').val());

    if ($('#documentType').val() == 'Other') {
      $('#rev-document_type').text($('#otherdocumentTypeValue').val());
    } else {
      $('#rev-document_type').text($('#documentType').val());
    }

    $('#rev-deadline').text($('#DeadlineDate').val());
    $('#rev-hours').text($('#hours').val());
    $('#rev-number_pages').text($('#pages option:selected').text());
    // $('#rev-name').val($('#name').val());
    $('#rev-email').text($('#email').val());

    if ($('#projectsubject').val() == 'Other') {
      $('#rev-project_subject').text($('#otherSubject').val());
    } else {
      $('#rev-project_subject').text($('#projectsubject').val());
    }

    $('#rev-paper_title').text($('#topic').val());
    $('#rev-sources').text($('#NumberSources').val());

    if ($('#otherCitationstyle').val() == 'Other') {
      $('#rev-citation_style').text($('#otherCitationValue').val());
    } else {
      $('#rev-citation_style').text($('#otherCitationstyle').val());
    }

    $('#rev-description').text($('#description').val());

    $('#rev-price').text('$' + $('#quoted_price').val());
    $('#rev_order_id').text('CAS-' + $('#order_id').val());

  }
  
  function applyDiscount(price) {



            // var actualPrice = $('#actual').val();

            // alert(price);



            // $('#check-step').val(isYesOrNot);



            var myNumber = price;

            var percentToGet = 10;

            var dec = (percentToGet / 100).toFixed(2);

            var mult = myNumber * dec;

            var discont = myNumber - mult;

            return discont;

        }
        
        function getCountryCode() {
          var ip = window.location.ip;
          var countryCode = ip2country.countryCode(ip);
          return countryCode;
}



</script>



<!-- in footer -->





<?php get_footer(); ?>

<script>
$(document).ready(function() {
        var input = document.querySelector("#phone");

        window.intlTelInput(input, {

            allowExtensions: false,

            autoFormat: false,

            autoHideDialCode: false,

            autoPlaceholder: false,

            separateDialCode: true,



            initialCountry: "auto",

            geoIpLookup: function(callback) {

                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {

                    var countryCode = (resp && resp.country) ? resp.country : "";

                    callback(countryCode);

                });

            },

            ipinfoToken: "yolo",

            nationalMode: false,

            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],

            //preferredCountries: ['cn', 'jp'],

            preventInvalidNumbers: true,

            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.14/js/utils.js" // just for formatting/placeholders etc

        });
});
    </script>

    <?php get_footer(); ?>