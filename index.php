<?php
session_start();
$pageTitle = 'TalentTrove';
include './includes/header.php';

?>
<!-- bg-orange-100 -->
<section class="text-black relative" style="background-image: url('https://img.freepik.com/free-photo/friendly-partners-handshaking-group-meeting-thanking-successful-teamwork_1163-4691.jpg?w=900'); background-size: cover; background-position: center;">
  <div class="absolute inset-0 bg-white opacity-50"></div>
  <div class="mx-auto w-full lg:max-w-screen-md space-y-6 lg:space-y-0 px-8 py-12 lg:py-18 lg:flex lg:h-screen lg:items-center relative">
    <div class="flex flex-col w-full text-center justify-center items-center my-auto h-full relative z-10">
      <h1 class="bg-gradient-to-r from-purple-800 to-blue-500 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
      Explore Your Voyage with TalentTrove
      </h1>
      <p class="mt-6 max-w-2xl sm:text-xl/relaxed">From the bustling metropolis to the tranquil countryside, let TalentTrove be your compass, guiding you towards fulfilling endeavors </p>

      <div class="mt-8 flex flex-wrap justify-start gap-4">
        <a class="block rounded border border-purple-600 bg-purple-600 px-6 lg:px-8 py-3 text-xs lg:text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="account/register.php">
          Register Now
        </a>

        <a class="block rounded border border-purple-600 px-4 lg:px-8 py-3 text-xs lg:text-sm font-medium text-black hover:bg-purple-600 hover:text-white focus:outline-none focus:ring active:bg-orange-500 sm:w-auto" href="jobs">
          Latest Jobs
        </a>
      </div>
    </div>
  </div>
</section>

<section class="md:my-8 lg:my-16">
    <div class="mx-auto max-w-screen-2xl grid grid-cols-1 gap-4 md:grid-cols-2">
      <!-- First Main Div -->
      <div class="p-8 md:p-12 flex bg-fuchsia-300">
        <img alt="Student" src="https://img.freepik.com/free-photo/business-people-casual-meeting_53876-101882.jpg?w=1060" class="h-40 w-40 object-cover mr-4 sm:h-56 lg:h-[500px] md:h-full" />
        <div class="mx-auto max-w-xl text-center lg:flex lg:flex-col lg:justify-center lg:items-center">
          <h2 class="text-2xl font-bold text-black mb-4">
            Begin Your Career Adventure: The Doorway to Endless Possibilities with TalentTrove
          </h2>
          <p class="hidden text-black md:mt-6 md:block">
            Join TalentTrove to embark on an enriching path to career success. Explore a vast sea of unique opportunities crafted to empower you in forging and enhancing your career trajectory with absolute certainty. Your ideal job is out there – initiate your quest now!
          </p>
          <div class="mt-4 md:mt-10">
            <a href="#" class="inline-block rounded border border-white hover:border-purple-600 bg-purple-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-black focus:outline-none focus:ring focus:ring-yellow-400">
              Embrace Now
            </a>
          </div>
        </div>
      </div>
      <!-- Second Main Div -->
      <div class="p-8 md:p-12 flex bg-fuchsia-200 ">
        <img alt="Student" src="https://img.freepik.com/free-photo/human-resources-business-profession-graphic-concept_53876-124776.jpg?w=1060" class="h-40 w-40 object-cover mr-4 sm:h-56 lg:h-full md:h-full" />
        <div class="mx-auto max-w-xl text-center lg:flex lg:flex-col lg:justify-center lg:items-center">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Boost Your Team's Potential: Secure Top-Notch Talent with TalentTrove!
          </h2>
          <p class="hidden text-dark-500 md:mt-4 md:block">
            Accelerate your organization's success by connecting with premier talent through TalentTrove's comprehensive job portal. Gain access to a diverse array of skilled individuals, enabling your enterprise to excel with a proficient team. Your future standout employee awaits – refine your hiring approach with confidence and precision.
          </p>
          <div class=" md:mt-8">
            <a href="#" class="inline-block border border-white bg-purple-600 hover:bg-transparent hover:text-black rounded px-12 py-3 text-sm hover:border-purple-600 font-medium text-white transition hover:bg-purple-600 focus:outline-none focus:ring focus:ring-yellow-400">
              List a Position
            </a>
          </div>
        </div>
      </div>
    </div>
</section>


<?php
include './includes/footer.php';
?>