
<form action="{{ route('driver_information_form') }}" class="row" id="contact-form" method="post">
    @csrf
    <div class="col-md-6 col-sm-6 form-group">
    <input class="form-control" id="input_name" type="text" name="license_number" id="license_number" placeholder="License Number">
    </div>

    <div class="col-md-6 col-sm-6 form-group">
    <input class="form-control" id="input_email" type="text" name="car_model" id="car_model" placeholder="Car model">
    </div>
    
    <div class="col-md-6 col-sm-6 form-group">
    <input class="form-control" id="input_email" type="file" name="profile" id="profile" placeholder="Profil Pic" required>
    </div>
    <div class="col-md-12">
    <button id="btn_submit" class="btn btn-default" type="submit">Submit</button>
    </div>
</form> 


