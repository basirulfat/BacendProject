<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>50% Top Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/50-top-company.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')
    <!-- Active company -->
    <section id="small-navebar">
      <ul>
        <li><a href="{{url('Companeis_Rate')}}">Search Company Name</a></li>
        <li><a href="{{url('Top_company')}}">50 Top Actives Companies</a></li>
      </ul>
    </section>
    <section id="active-company">
      <div id="top-class">
        <h2>50% Active Top Companies To Work In</h2>
        <div class="two-button">
          <button class="50%-show-btn">
            <i class="ri-message-2-line"></i>Rate Companies
          </button>
          <a href="{{url('Companeis_Rate')}}">All Companies</a>
        </div>
      </div>
      <div>
        <img src="./assets/images/company logo/building.jpg" alt="image" />
      </div>
    </section>
    <!-- Active company ended -->

    <section id="mutiple-cards-section">
      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line mul-i"></i>
            <i class="ri-star-line mul-i"></i>
            <i class="ri-star-line mul-i"></i>
            <i class="ri-star-line mul-i"></i>
            <i class="ri-star-line mul-i"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/attachment_90651478.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/brishna.png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/cola.png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/friends-logo-template_23-2149505594.avif"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (3).png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (4).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (5).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (6).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images.png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/khan.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/meli.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/pexels-jopwell-2422286.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/unicif.png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/attachment_90651478.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/brishna.png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/friends-logo-template_23-2149505594.avif"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (3).png"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (4).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (5).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/images (6).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/building.jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>

      <div class="company-card">
        <h4><span>#1</span>Informatics Services Corporation(ISC)</h4>
        <div id="section-image-and-button">
          <div>
            <img
              src="./assets/images/company logo/alokozay (2).jpg"
              alt="image-company"
            />
            <span>3.7</span>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <div>
            <button>See Review</button>
            <button>20 Jobs</button>
          </div>
        </div>
        <p>
          Informatics Services Corporation (ISC) was founded in 1993 and is
          affiliated to the central Bank of Afghanistan. The number of
          compamanies...
        </p>
      </div>
    </section>
    <!-- ended -->

    <!-- section started -->
    <section id="Rate-your-Employer">
      <div>
        <img
          src="./assets/images/company logo/friends-logo-template_23-2149505594.avif"
          alt=""
        />
        <h5>Rate Your Employers</h5>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
        <i class="ri-star-line"></i>
      </div>
    </section>
    <!-- ============Rating page==============  -->
    <div class="rate-wrapper hide">
      <div id="rating">
        <h3><i class="fa-solid fa-star"></i>Rate this company</h3>
        <button class="btn escape-btn"><i class="ri-close-line"></i></button>
      </div>
      <div id="rating-details">
        <div class="img rate-image"></div>
        <h4>
          To see the reviews of employees, you should add a work <br />
          experience.
        </h4>
        <p>Please, add a work experience to be able to write a review.</p>
      </div>
      <div class="work-experiance">
        <button type="button " class="btn Add-experiance">
          Add Worke Experience
        </button>
        <a href="#" class="not-experience">I don't have any work experience</a>
      </div>
    </div>
    <div class="overlay hide"></div>
    <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>

    <!--=============== FOOTER ===============-->
    @include('layouts.footer')

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="./assets/js/module/top-company.js"></script>
  </body>
</html>
