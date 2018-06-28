@extends('layouts.app')
@section('content')
   <div class="container">
    <br><br>
      <!-- <div class="col-md-8 col-md-offset-2">    
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
        <div class="step well">
            <form data-parsley-validate="">
              <div class="form-group">
                <label for="exampleInputName2">Name of Event</label>
                <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Name of Event" required="">
              </div>
              <div class="form-group">
                <label for="address">Address of Event</label>
                <input type="text" name="address" class="form-control" id="autocomplete" placeholder="Enter your address"onFocus="geolocate()" required="">
              </div>
              <div class="form-group">
                <label for="comment">Event Description</label>
                <textarea class="form-control" name="description" rows="5" id="comment" required=""></textarea>
              </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Starting Date</label>
                    <div class='input-group date'>
                        <input type='date' class="form-control" placeholder="dd/mm/yyyy" required=""/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Ending Date</label>
                    <div class='input-group date'>
                        <input type='date' class="form-control" placeholder="dd/mm/yyyy"/ required="">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputAmount">Expected Sponsorship</label>
                    <div class="input-group">
                      <div class="input-group-addon">₹</div>
                      <input type="text" name="expected_sponsorship" class="form-control" id="exampleInputAmount" placeholder="Amount" required="">
                      <div class="input-group-addon">.00</div>
                    </div>
                </div>
              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
        </div><br/><br/><br/><br/><!-- End of form 1 -->
        <!-- <div class="step well">
            <form data-parsley-validate="">
              <div class="form-group">
                <label for="exampleInputFile">Cover pic</label>
                <input type="file" id="exampleInputFile" required="">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Thumb nail</label>
                <input type="file" id="exampleInputFile" required="">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Logo pic</label>
                <input type="file" id="exampleInputFile" required="">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>End of form 2
        <div class="step well">
            <form data-parsley-validate="">
              <div class="form-group">
                <label for="exampleInputName2">Manager Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Manager Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
              </div>
              <div class="form-group">
                    <label>Manager Phone no</label>
                    <div class='input-group'>
                        <input type='text' class="form-control" placeholder="Phone no" required=""/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-phone"></span>
                        </span>
                    </div>
              </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>End of form 3
        <div class="step well">
        <form  data-parsley-validate="">
            <div class="form-group">
                <label for="exampleInputName2">Celebrity Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Celebrity Image</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                    <label>Expected Audience</label>
                    <div class='input-group'>
                        <input type='text' class="form-control" placeholder="Expected Audience"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                    </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
           </form>
        </div>End of form 4
        <div class="step well">
        <form  data-parsley-validate="">
              <div class="form-group">
                <label for="exampleInputName2">Event Type</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Event Type" required="">
              </div>
              <div class="form-group">
                <label for="comment">Event Topic</label>
                <textarea class="form-control" rows="5" id="comment" required=""></textarea>
              </div> 
              <div class="form-group">
                <label for="comment">Event Sub-Topic</label>
                <textarea class="form-control" rows="3" id="comment" required=""></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>End of form 5
        <button class="action back btn btn-info">Back</button>
        <button class="action next btn btn-info">Next</button>
        <button class="action submit btn btn-success">Submit</button>
             </div> 
           </div>
           <br/><br/><br/><br/><br/><br/> -->

<script type="text/javascript">
    $(document).ready(function(){
        var current = 1;
        
        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back"); 
        btnsubmit   = $(".submit");

        // Init buttons and UI
        widget.not(':eq(0)').hide();
        hideButtons(current);
        setProgress(current);

        // Next button click action
        btnnext.click(function(){
            if(current < widget.length){
                widget.show();
                widget.not(':eq('+(current++)+')').hide();
                setProgress(current);
            }
            hideButtons(current);
        })

        // Back button click action
        btnback.click(function(){
            if(current > 1){
                current = current - 2;
                btnnext.trigger('click');
            }
            hideButtons(current);
        })          
    });

    // Change progress bar action
    setProgress = function(currstep){
        var percent = parseFloat(100 / widget.length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar").css("width",percent+"%").html(percent+"%");      
    }

    // Hide buttons according to the current step
    hideButtons = function(current){
        var limit = parseInt(widget.length); 

        $(".action").hide();

        if(current < limit) btnnext.show();
        if(current > 1) btnback.show();
        if (current == limit) { btnnext.hide(); btnsubmit.show(); }
    }
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19096935-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnsFqO9vi-ylOxaBFOZhy4rHkV6wMYdlA&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection