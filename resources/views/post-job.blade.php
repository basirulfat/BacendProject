<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="{{asset('/')}}">
    <title>@lang('msg.Post0')</title>
    <!--=============== Css links ===============-->
    <link rel="stylesheet" href="assets/css/companyRegister.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/post-job.css" />


      <!--=============== REMIXICONS ===============-->
      <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--=============== HEADER ===============-->
     @include('layouts.header')
    <!--===============POST JOB ===============-->
    <h1 class="post_title">@lang('msg.Post1')</h1>
    <div class="container-post-job">
      <h1>@lang('msg.Post2')</h1>
      <form action="{{ route('postjob.store') }}" method="POST" enctype="multipart/form-data">
         @csrf 
        <div class="form-group">
          <label for="jobTitle">@lang('msg.Post3')</label>
          <input type="text" id="jobTitle" name="jobTitle" required />
        </div>
        <div class="form-group">
          <label for="jobTitle">@lang('msg.keycompany1')</label>
          <input type="text" id="jobTitle" name="company" required />
        </div>
        <div class="form-group">
          <label for="jobDescription">@lang('msg.Post4')</label>
          <textarea
            id="jobDescription"
            name="jobDescription"
            rows="6"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="category">@lang('msg.keycatagory1')</label>
          <select class=""  name="category" id="category">
              <option value="">...</option>
               <option value="Admin-Clerical">Admin-Clerical</option>
               <option value="Agriculture">Agriculture</option>
               <option value="Automotive">Automotive</option>
               <option value="Accounting">Accounting</option>
               <option value="Banking">Banking</option>
               <option value="Biotech">Biotech</option>
               <option value="Business Development">Business Development</option>
               <option value="Construction">Construction</option>
               <option value="Consultant">Consultant</option>
               <option value="Customer Service">Customer Service</option>
			         <option value="Capacity Building">Capacity Building</option>			  
               <option value="Communication">Communication</option>
               <option value="Design">Design</option>
               <option value="Distribution-Shipping">Distribution-Shipping</option>
               <option value="Education">Education</option>
               <option value="Engineering">Engineering</option>
               <option value="Entry Level">Entry Level</option>
               <option value="Executive">Executive</option>
               <option value="Facilities">Facilities</option>
               <option value="Finance">Finance</option>
               <option value="Franchise">Franchise</option>
               <option value="General">General</option>
               <option value="General Business">General Business</option>
               <option value="General Labor">General Labor</option>
               <option value="Government">Government</option>
               <option value="Grocery">Grocery</option>
               <option value="Health Care">Health Care</option>
               <option value="Hospitality-Hotel">Hospitality-Hotel</option>
               <option value="Human Resources">Human Resources</option>
				       <option value="IT">IT</option>
               <option value="Information Technology">Information Technology</option>
               <option value="Installation-Maint-Repair">Installation-Maint-Repair</option>
               <option value="Insurance">Insurance</option>
               <option value="Inventory">Inventory</option>
               <option value="Legal">Legal</option>
               <option value="Management">Management</option>
               <option value="Marketing">Marketing</option>
               <option value="Media-Journalism">Media-Journalism</option>
               <option value="Monitoring and Evaluation">Monitoring and Evaluation</option>
               <option value="Nonprofit-Social Services">Nonprofit-Social Services</option>
               <option value="Nurse">Nurse</option>
               <option value="Natural Resources Management">Natural Resources Management</option>
               <option value="Other">Other</option>
               <option value="Pharmaceutical">Pharmaceutical</option>
               <option value="Professional Services">Professional Services</option>
               <option value="Program">Program</option>
               <option value="Purchasing-Procurement">Purchasing-Procurement</option>
               <option value="QA-Quality Control">QA-Quality Control</option>
               <option value="Real Estate">Real Estate</option>
               <option value="Research">Research</option>
               <option value="Restaurant-Food Service">Restaurant-Food Service</option>
               <option value="Retail">Retail</option>
               <option value="Support">Support</option>
               <option value="Sales">Sales</option>
               <option value="Science">Science</option>
               <option value="Security">Security</option>
               <option value="Skilled Labor">Skilled Labor</option>
               <option value="Strategy-Planning">Strategy-Planning</option>
               <option value="Supply Chain">Supply Chain</option>
               <option value="Telecommunications">Telecommunications</option>
               <option value="Training">Training</option>
				       <option value="Telecom">Telecom</option>
               <option value="Translator">Translator</option>
               <option value="Transportation">Transportation</option>
               <option value="Veterinary Services">Veterinary Services</option>
               <option value="Warehouse">Warehouse</option>  
            </select>
        </div>
        <div class="form-group">
          <label for="applyLink">@lang('msg.Post5')</label>
          <input type="url" id="applyLink" name="applyLink" required />
        </div>
        <div class="form-group">
          <label for="jobType">@lang('msg.Post6')</label>
          <select id="jobType" name="jobType" required>
            <option value="Full-time">Full-time</option>
            <option value="Part-time">Part-time</option>
            <option value="Contract">Contract</option>
            <option value="Internship">Internship</option>
          </select>
        </div>
        <div class="form-group">
          <label for="location">@lang('msg.Post7')</label>
          <select  id="location" name="location" required >
                <option value="">Select Province</option>
                <option value="Badakhshan">Badakhshan</option>
                <option value="Badghis">Badghis</option>
                <option value="Baghlan">Baghlan</option>
                <option value="Balkh">Balkh</option>
                <option value="Bamyan">Bamyan</option>
                <option value="Daykundi">Daykundi</option>
                <option value="Farah">Farah</option>
                <option value="Faryab">Faryab</option>
                <option value="Ghazni">Ghazni</option>
                <option value="Ghor">Ghor</option>
                <option value="Helmand">Helmand</option>
                <option value="Herat">Herat</option>
                <option value="Jowzjan">Jowzjan</option>
                <option value="Kabul">Kabul</option>
                <option value="Kandahar">Kandahar</option>
                <option value="Kapisa">Kapisa</option>
                <option value="Khost">Khost</option>
                <option value="Kunar">Kunar</option>
                <option value="Kunduz">Kunduz</option>
                <option value="Laghman">Laghman</option>
                <option value="Logar">Logar</option>
                <option value="Nangarhar">Nangarhar</option>
                <option value="Nimruz">Nimruz</option>
                <option value="Nuristan">Nuristan</option>
                <option value="Paktika">Paktika</option>
                <option value="Paktia">Paktia</option>
                <option value="Panjshir">Panjshir</option>
                <option value="Parwan">Parwan</option>
                <option value="Samangan">Samangan</option>
                <option value="Sar-e Pol">Sar-e Pol</option>
                <option value="Takhar">Takhar</option>
                <option value="Uruzgan">Uruzgan</option>
                <option value="Wardak">Wardak</option>
                <option value="Zabul">Zabul</option>
              </select>
        </div>

        <div class="form-group">
          <label for="skills">@lang('msg.Post8')</label>
          <input type="text" id="skills" name="skills" required />
        </div>
        <div class="form-group">
          <label for="logo">@lang('msg.Post9')</label>
          <input type="file" id="logo" name="logo" accept="image/*" required />
        </div>
        <div class="form-group">
          <label for="experience">@lang('msg.Post10')</label>
          <input type="text" id="experience" name="experience" required />
        </div>
        <div class="form-group">
          <label for="seniority">@lang('msg.Post11')</label>
          <input type="text" id="seniority" name="seniority" required />
        </div>
        <div class="form-group">
          <label for="salary">@lang('msg.Post12')</label>
          <input type="text" id="salary" name="salary" required />
        </div>
        <div class="form-group">
          <label for="postingTime">@lang('msg.Post13')</label>
          <input
            type="datetime-local"
            id="postingTime"
            name="postingTime"
            required
          />
        </div>

        <div class="form-group">
          <label for="expairTime">@lang('msg.Post14')</label>
          <input
            type="datetime-local"
            id="expairTime"
            name="expairTime"
            required
          />
        </div>
        <!-- <button type="submit">Submit Job</button> -->
        <input type="submit" value="submit" class="btn postSubmit">
      </form>
    </div>
    <!--=============== FOOTER ===============-->
       @include('layouts.footer')
    <!-- <script src="script.js"></script> -->
    <script defer type="module" src="./assets/js/module/post-job.js"></script>
  </body>
</html>
