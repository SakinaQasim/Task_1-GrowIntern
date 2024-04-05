<?php
session_start();
// Include the configuration file and any necessary functions
include 'config.php';
$pageTitle = 'Jobs - TalentTrove';
include 'includes/header.php';

// Retrieve all jobs from the 'jobs' table, ordered by the most recent first
$sql = "SELECT * FROM jobs ORDER BY created_at DESC";
$result = $conn->query($sql); ?>
<section class="bg-orange-100 text-white bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/casual-businessman-sitting-dark_53876-101864.jpg?w=1060');">
  <div class="mx-auto max-w-screen-xl px-4 py-28 lg:flex lg:h-1/2 lg:items-center">
    <div class="mx-auto max-w-3xl text-center">
      <h1 class="bg-gradient-to-r from-blue-800 to-orange-500 bg-clip-text text-3xl font-extrabold text-white sm:text-5xl">
        Unlock Your<span class="sm:block">Potential Today</span>
      </h1>
    </div>
  </div>
</section>

<div class="mx-auto gap-4 w-full p-8 md:p-10 lg:py-10 lg:px-12 max-w-screen-2xl flex flex-col md:flex-row md:grid md:grid-cols-2 xl:grid-cols-3">
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-3 sm:py-12">
    <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
      <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-purple-500 transition-all duration-300 group-hover:scale-[10]"></span>
      <div class="relative z-10 mx-auto max-w-md">
        <span class="grid h-20 w-20 place-items-center rounded-full bg-purple-500 transition-all duration-300 group-hover:bg-purple-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-white transition-all">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
          </svg>
        </span>
        <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
          <p>Success is no accident. It is hard work, perseverance, learning,and sacrifice.</p>
        </div>
        <div class="pt-5 text-base font-semibold leading-7">
          <p>
            <a href="" class="text-purple-500 transition-all duration-300 group-hover:text-white">Sarah Qasim
              &rarr;
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-3 sm:py-12">
    <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
      <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-purple-500 transition-all duration-300 group-hover:scale-[10]"></span>
      <div class="relative z-10 mx-auto max-w-md">
        <span class="grid h-20 w-20 place-items-center rounded-full bg-purple-500 transition-all duration-300 group-hover:bg-purple-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10 text-white transition-all">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
          </svg>
        </span>
        <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
          <p>The only place where success comes before work is in the dictionary  .</p>
        </div>
        <div class="pt-5 text-base font-semibold leading-7">
          <p>
            <a href="" class="text-purple-500 transition-all duration-300 group-hover:text-white">Sakina Khan
              &rarr;
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php
  // Check if there are jobs to display
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      echo '<article class="rounded-xl bg-white p-4 border border-gray-300 sm:p-6 lg:p-8">
        <div class="flex items-start sm:gap-8">
          <div
            class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:bg-indigo-400"
            aria-hidden="true"
          >
            <div class="flex items-center gap-1">
              <span class="h-8 w-0.5 rounded-full bg-indigo-300"></span>
              <span class="h-6 w-0.5 rounded-full bg-indigo-300"></span>
              <span class="h-4 w-0.5 rounded-full bg-indigo-300"></span>
              <span class="h-6 w-0.5 rounded-full bg-indigo-300"></span>
              <span class="h-8 w-0.5 rounded-full bg-indigo-300"></span>
            </div>
          </div>
      
          <div>
            <strong
              class="rounded border border-purple-500 bg-purple-500 px-3 py-1.5 text-[12px] capitalize font-medium text-white"
            >
           ' . $row['job_category'] . '
            </strong>
      
            <h3 class="mt-4 text-lg font-medium sm:text-xl">
              <a href=job-detail?job_id=' . $row['id'] . ' class="hover:underline">  ' . $row['title'] . ' </a>
            </h3>
            <p class="mt-1 text-sm text-gray-700">
            ' . substr($row['description'], 0, 150) . ' ...
            </p>
      
            <div class="mt-4 sm:flex sm:items-center sm:gap-2">
              <div class="flex items-center gap-1 text-gray-500">
                <p class="text-xs font-medium"> ' . $row['company'] . '</p>
              </div>
      
              <span class="hidden sm:block" aria-hidden="true">&middot;</span>
      
              <p class="mt-2 text-xs font-medium text-gray-500 sm:mt-0">
              ' . substr($row['created_at'], 0, 10) . '
              </p>
            </div>
          </div>
        </div>
      </article>';
    }
  } else {
    echo "<p class='p-10 text-center text-primary-600 font-semibold text-2xl'>No Jobs found.<p>";
  }
  ?>
  
</div>