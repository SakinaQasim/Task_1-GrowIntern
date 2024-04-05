<?php
session_start();
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Companies - TalentTrove';
include 'includes/header.php';
// Retrieve all companies from the 'companies' table
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);
?>
<section class="bg-orange-100 text-black">
  <div class="mx-auto max-w-screen-xl px-4 py-28 lg:flex lg:h-1/2 lg:items-center bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/empty-street-dark-atmosphere_23-2150914488.jpg?w=900');">
    <div class="mx-auto max-w-3xl text-center">
      <h1 class="bg-gradient-to-r from-purple-800 to-blue-500  bg-clip-text px-4 md:px-0 text-3xl font-extrabold text-transparent sm:text-5xl">
      Discover Your Dream Career Path!<span class="sm:block"> Propel Your Professional Journey with the Perfect Company!" </span>
      </h1>
    </div>
    <!-- New divs for job seeker and recruiter -->
    <div class="flex justify-center mt-12"> <!-- Adjusted margin-top -->
      <!-- Job Seeker Div -->
      <div class="w-1/2 mx-4 bg-white rounded-lg shadow-lg ">
        <div class="h-32 bg-indigo-100 text-center p-4 border-l-4 border-indigo-500">
          <h2 class="text-xl font-bold py-10">Job Seeker</h2>
        </div>
        <div class="p-4">
          <!-- Add image and text for job seeker -->
          <img src="https://img.freepik.com/premium-photo/people-waiting-their-job-interviews_23-2148507795.jpg?w=900" alt="Job Seeker Image" class="w-full h-40 object-cover mb-4">
          <p class="text-gray-700">Looking for new opportunities to grow your career? Find the perfect job that matches your skills and interests. Explore thousands of job listings and apply with ease.</p>
        </div>
      </div>
      <!-- Recruiter Div -->
      <div class="w-1/2 mx-4 bg-white rounded-lg shadow-lg">
        <div class="h-32 bg-indigo-100 text-center p-4 border-r-4 border-indigo-500">
          <h2 class="text-xl font-bold py-10">Recruiter</h2>
        </div>
        <div class="p-4">
          <!-- Add image and text for recruiter -->
          <img src="https://img.freepik.com/free-photo/member-human-resource-team-talking-with-candidate-while-reviewing-his-resume-job-interview-office_637285-6535.jpg?w=900" alt="Recruiter Image" class="w-full h-40 object-cover mb-4">
          <p class="text-gray-700">Hiring for your company? Find top talent quickly and easily. Post job listings, review applications, and connect with qualified candidates to fill your open positions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="mx-auto gap-4 w-full p-8 md:p-10 lg:py-10 lg:px-12 max-w-screen-2xl flex flex-col md:flex-row md:grid md:grid-cols-2 lg:grid-cols-3">
  <?php
  // Check if there are companies to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Output each company's details
      echo '<article
            class="rounded-lg border border-dark-300 bg-white p-4 w-full shadow-sm transition hover:shadow-lg sm:p-6"
          >
          <div class="flex gap-x-3">
            <span class="inline-block rounded bg-blue-500 p-2 text-white">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-20 w-20">
            <path
              d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
            <path
              d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
            <path
              d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
          </svg>
            </span>
          
            <a href="#">
              <h3 class="mt-1 text-xl font-medium text-gray-900">
                ' . $row['name'] . '
              </h3>
            </a>
            </div>
            <p class="mt-2 line-clamp-3 text-sm/relaxed text-dark-500">
            ' . $row['description'] . '
            </p>
          
            <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-purple-800">
            ' . $row['industry'] . '
          
              <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                &rarr;
              </span>
            </a>
          </article>
          ';
    }
  } else {
    echo "<p class='w-full text-center py-10 text-2xl text-dark-600'>No companies found.</p>";
  }
  ?>
  </body>

  </html>