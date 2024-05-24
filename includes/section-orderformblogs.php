
<div class="container">





	<div class="calc-form-head test-head">



		<h3> Calculate Your Order Price</h3>



	</div>



	<div class="hd-form-nm-hd">



		<form action="https://order.paperperk.com/" method="post">



			<div class="form-group row mb-2">



				<div class="col-md-12">



					<select class="select-css" id="documentType" name="documentType" onmouseover="fetchDocumentType()">

						<option value="">Select Document Type</option>

                      <option value="Admission Essay">Admission Essay</option>
                      <option value="Analytical Essay">Analytical Essay</option>
                      <option value="Annotated Bibliography">Annotated Bibliography</option>
                      <option value="Application Letter">Application Letter</option>
                      <option value="Argumentative Essay">Argumentative Essay</option>

					</select>



				</div>



			</div>



			<div class="form-group row mb-2">



				<div class="col-md-12">



					<select class="select-css" name="acedamic_level">

						<option >Academic Level</option>
                      <option value="High School">High School</option>
                      <option value="College-undergraduate">College</option>
                      <option value="College-undergraduate">Undergraduate</option>
                      <option value="Masters">Master</option>
                      <option value="PHD">Ph.D.</option>

					</select>



				</div>



			</div>



			<div class="form-group row mb-2">



				<div class="col-md-12">



					<select class="select-css" name="pages" id="pages" onmouseover="fetchNoOfPages()">

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



			<div class="form-group row mb-2">



				<div class="col-md-6 ord-cal">



					<div class="">

						<input type="date" id="DeadlineDate" placeholder="Select Deadline" name="DeadlineDate">

					</div>



				</div>



				<div class="col-md-6">



					<select name="hours" onmouseover="fetchHours()" id="my-hours" class="select-css">

						<option selected="selected">Select Time</option>
                      <option value="00:00">00:00</option>
                      <option value="01:00">01:00</option>
                      <option value="02:00">02:00</option>
                      <option value="03:00">03:00</option>
                      <option value="04:00">04:00</option>

					</select>



				</div>



			</div>



			<div class="row mb-2">



				<div class="countdown-nw-hd">



					<div class="col-md-12 text-center">



						<span class="card-sm-title"> LIMITED TIME OFFER</span>

						<span class="text-danger fw-bold fs-5">50% OFF</span>



					</div>



					<div class="clearfix"></div>



				</div>



			</div>



			<div class="row mb-2">



				<div class="col-md-12">



					<div class="timer-counter text-center">



						<div class="dotted-line"></div>



						<div class="timer-big-num">
						    
                                <div id="the-final-countdown">
                                    <div></div>
                                  </div>
                            
							<!--15<span class="text-white fs-6">Hrs</span>-->

							<!--31<span class="text-white fs-6">Mins</span>-->

							<!--54<span class="text-white fs-6">Secs</span>-->

						</div>



						<div class="dotted-line mt-1"></div>





					</div>



				</div>



			</div>

			<div class="form-group row">



				<div class="col-md-12 text-center">
				    <button type="submit" class="btn btn-custom btn-yellow btn-shadow px-5">Calculate Now</button>
				    </div>



			</div>



		</form>



	</div>



</div>