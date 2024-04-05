<?php
session_start();
$pageTitle = 'About us - TalentTrove';
include('includes/header.php')
    ?>
<section>
    <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 sm:py-12 lg:px-12 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">
            <div>
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full">
                    <img alt="Party"
                        src="https://img.freepik.com/free-photo/side-view-man-working-late-night_23-2150280990.jpg?w=900"
                        class="absolute inset-0 h-full w-full object-cover" />
                </div>
            </div>
            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-5xl">About <span
                        class="bg-purple-500 bg-clip-text font-extrabold text-transparent sm:text-4xl">TalentTrove</span>
                </h2>
                <p class="mt-4 text-gray-600">
                Welcome to TalentTrove, the leading platform for career growth and job opportunities. TalentTrove is a modern job portal crafted to bridge the gap between driven professionals and a wide array of job openings. Our platform features an easy-to-navigate interface, simplifying the job search for both job seekers and employers. Whether you're an experienced professional in pursuit of new ventures or a company in search of exceptional talent, TalentTrove offers a vibrant arena for matching expertise with potential roles. Committed to enhancing career development, TalentTrove aims to support both individuals and organizations. Sign up with TalentTrove today to explore a universe of opportunities and advance your professional journey.
                </p>
            </div>
        </div>
    </div>
</section>


<?php include('includes/footer.php') ?>