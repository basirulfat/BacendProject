<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="{{asset('/')}}">
    <title>Post a Job</title>
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
    <h1 class="post_title">Here Is The Place For Your Announcement</h1>
    <div class="container-post-job">
      <h1>Post a Job</h1>
      <form action="{{ route('postjob.store') }}" method="POST" enctype="multipart/form-data">
         @csrf 
        <div class="form-group">
          <label for="jobTitle">Job Title:</label>
          <input type="text" id="jobTitle" name="jobTitle" required />
        </div>
        <div class="form-group">
          <label for="jobDescription">Job Description:</label>
          <textarea
            id="jobDescription"
            name="jobDescription"
            rows="6"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="applyLink">Link to Apply:</label>
          <input type="url" id="applyLink" name="applyLink" required />
        </div>
        <div class="form-group">
          <label for="jobType">Job Type:</label>
          <select id="jobType" name="jobType" required>
            <option value="Full-time">Full-time</option>
            <option value="Part-time">Part-time</option>
            <option value="Contract">Contract</option>
            <option value="Internship">Internship</option>
          </select>
        </div>
        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" id="location" name="location" required />
        </div>

        <div class="form-group">
          <label for="skills">Skills Required:</label>
          <input type="text" id="skills" name="skills" required />
        </div>
        <div class="form-group">
          <label for="logo">Company Logo:</label>
          <input type="file" id="logo" name="logo" accept="image/*" required />
        </div>
        <div class="form-group">
          <label for="experience">Experience Required:</label>
          <input type="text" id="experience" name="experience" required />
        </div>
        <div class="form-group">
          <label for="seniority">Seniority Level:</label>
          <input type="text" id="seniority" name="seniority" required />
        </div>
        <div class="form-group">
          <label for="salary">Salary Range:</label>
          <input type="text" id="salary" name="salary" required />
        </div>
        <div class="form-group">
          <label for="postingTime">Posting Time:</label>
          <input
            type="datetime-local"
            id="postingTime"
            name="postingTime"
            required
          />
        </div>

        <div class="form-group">
          <label for="expaireTime">Expaires Time:</label>
          <input
            type="datetime-local"
            id="expaireTime"
            name="expaireTime"
            required
          />
        </div>
        <!-- <button type="submit">Submit Job</button> -->
        <input type="submit" value="submit">
      </form>
    </div>
    <!--=============== FOOTER ===============-->
       @include('layouts.footer')
    <!-- <script src="script.js"></script> -->
    <script defer type="module" src="./assets/js/module/post-job.js"></script>
  </body>
</html>
