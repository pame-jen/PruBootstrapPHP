<?php 
	include("compartidas/cabeceras.php");

 ?>
 <div class="container" style="margin-top:150px;">
<h1 class="text-center">Validation jQuery Plugin Examples</h1>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Basic Validation</h2>
        </div>
        <div class="card-block" >
          <form id="basic_validation">
            <fieldset>
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="basic_full_name" class="form-control" placeholder="Your full name..." data-vindicate="required|format:alpha" />
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="basic_phone_number" class="form-control" placeholder="(xxx) xxx-xxx" data-vindicate="required|format:phone" />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="basic_full_name" class="form-control" placeholder="xxxxxxxxx@xxxxx.com" data-vindicate="required|format:email" />
              </div>
              <button class="btn btn-primary btn-block" type="button" onclick="submitBasic()">Validate</button>
            </fieldset>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Basic Validation with Feedback</h2>
        </div>
        <div class="card-block" style="background-color:#fafafa;">
          <form id="basicfeedback_validation">
            <fieldset>
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="active_full_name" class="form-control" placeholder="Your full name..." data-vindicate="required|format:alpha" />
                <small class="form-control-feedback"></small>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="active_phone_number" class="form-control" placeholder="(xxx) xxx-xxx" data-vindicate="required|format:phone|active" />
                <small class="form-control-feedback"></small>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="active_full_name" class="form-control" placeholder="xxxxxxxxx@xxxxx.com" data-vindicate="required|format:email|active" />
                <small class="form-control-feedback"></small>
              </div>
              <button class="btn btn-primary btn-block" type="button" onclick="submitBasicFeedback()">Validate</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 	<!-- <div class="container">
 		<form id="form_ejemplo">
 			<fieldset>
			  <div class="row">
			  	 <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="basic_full_name" class="form-control" placeholder="Your full name..." data-vindicate="required|format:alpha" />
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="basic_phone_number" class="form-control" placeholder="(xxx) xxx-xxx" data-vindicate="required|format:phone" />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="basic_full_name" class="form-control" placeholder="xxxxxxxxx@xxxxx.com" data-vindicate="required|format:email" />
              </div> -->
			    <!-- <div class="col-md-6 mb-3">
			      <label for="validationDefault01">First name</label>
			      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" data-vindicate="required|format:alpha">
			    </div>
			    <div class="col-md-6 mb-3">
			      <label for="validationDefault02">Last name</label>
			      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" data-vindicate="required|format:alpha">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-md-6 mb-3">
			      <label for="validationDefault03">Telefono</label>
			      <input type="text" class="form-control" id="validationDefault03" placeholder="(xxx) xxx-xxx" data-vindicate="required|format:phone">
			      <div class="invalid-feedback">
			        Please provide a valid city.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault04">Email</label>
			      <input type="text" class="form-control" id="validationDefault04" placeholder="xxxxxxxxx@xxxxx.com" data-vindicate="required|format:email">
			      <div class="invalid-feedback">
			        Please provide a valid state.
			      </div>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="validationDefault05">Zip</label>
			      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
			      <div class="invalid-feedback">
			        Please provide a valid zip.
			      </div>
			    </div> -->
			  </div>
			  <button class="btn btn-primary btn-block" type="button" onclick="submitBasic()">Validate</button>

			</fieldset>
		</form>
		<!-- <form data-toggle="validator" role="form">
		  <div class="form-group">
		    <label for="inputName" class="control-label">Name</label>
		    <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
		  </div>
		  <div class="form-group has-feedback">
		    <label for="inputTwitter" class="control-label">Twitter</label>
		    <div class="input-group">
		      <span class="input-group-addon">@</span>
		      <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
		    </div>
		    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		    <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail" class="control-label">Email</label>
		    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
		    <div class="help-block with-errors"></div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="control-label">Password</label>
		    <div class="form-inline row">
		      <div class="form-group col-sm-6">
		        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
		        <div class="help-block">Minimum of 6 characters</div>
		      </div>
		      <div class="form-group col-sm-6">
		        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
		        <div class="help-block with-errors"></div>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="radio">
		      <label>
		        <input type="radio" name="underwear" required>
		        Boxers
		      </label>
		    </div>
		    <div class="radio">
		      <label>
		        <input type="radio" name="underwear" required>
		        Briefs
		      </label>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="checkbox">
		      <label>
		        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
		        Check yourself
		      </label>
		      <div class="help-block with-errors"></div>
		    </div>
		  </div>
		  <div class="form-group">
		    <button type="submit" class="btn btn-primary">Submit</button>
		  </div>
		</form> -->
	<!-- </div> -->

 <?php 
	include("compartidas/scripts.php");
 ?>
 	<script>
		$("#basic_validation").vindicate("init");
		$("#basicfeedback_validation").vindicate("init");

		var submitBasic = function() {
		  $("#basic_validation").vindicate("validate");
		}

		var submitBasicFeedback = function() {
		  $("#basicfeedback_validation").vindicate("validate");
		}
	</script>


 <?php 
 	
 	include("compartidas/pieDePagina.php");
  ?>