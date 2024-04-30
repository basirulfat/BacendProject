document.addEventListener("DOMContentLoaded", function () {
  const jobPostForm = document.getElementById("jobPostForm");

  jobPostForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Validation: Check if required fields are filled
    const requiredFields = [
      "jobTitle",
      "jobDescription",
      "applyLink",
      "jobType",
      "location",
      "skills",
      "logo",
      "experience",
      "seniority",
      "salary",
      "postingTime",
    ];

    let isValid = true;
    requiredFields.forEach(function (fieldName) {
      const fieldInput = document.getElementById(fieldName);
      if (!fieldInput.value.trim()) {
        isValid = false;
        fieldInput.classList.add("invalid");
      } else {
        fieldInput.classList.remove("invalid");
      }
    });

    if (isValid) {
      // Form is valid, you can submit the data or perform further actions
      console.log("Form submitted successfully!");
      jobPostForm.reset(); // Reset the form after submission
    } else {
      console.log("Please fill in all required fields.");
    }
  });
});
