<?php

include '../config.php';

$message = '';
$delay = 3;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the 'users' table
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Start a session and store user data
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['account_type'] = $row['account_type'];

            // Redirect the user to the dashboard or another page after successful login
            if($_SESSION['account_type'] === 'jobseeker'){
                $message = 'Logged in Successfully! Redirecting...';
                header("Refresh: $delay; URL=/jobportal/dashboard/jobseeker");
            }
            else if($_SESSION['account_type'] === 'recruiter'){
                $message = 'Logged in Successfully! Redirecting...';
                header("Refresh: $delay; URL=/jobportal/dashboard/recruiter");
            }
            else{
                header('Location: /');
                
            }
        } else {
            $message = 'Invalid Password';
        }
    } else {
        $message = 'User not Found!';
    }
}

$pageTitle = 'Login - Workiee';
include '../includes/header.php';

?>
<section class="relative flex flex-wrap lg:h-screen lg:items-center max-w-screen-2xl mx-auto">
    <div class="w-full px-6 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-12">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Welcome Back!</h1>
            <p class="text-gray-800 text-center py-4"><?php echo $message; ?></p>
            <p class="mt-4 text-gray-500">
                Login Now and  Visit your dashboard!
            </p>
        </div>

        <form method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4 ">
            <div>
                <label for="email" class="sr-only ">Email</label>

                <div class="relative">
                    <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm bg-purple-100" name="email" placeholder="Enter email" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="password" class="sr-only">Password</label>

                <div class="relative">
                    <input type="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm bg-purple-100" name="password" placeholder="Enter password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500">
                    New Here? 
                    <a class="underline" href="/jobportal/account/register">Sign up</a>
                </p>

                <button type="submit"
                    class="inline-block rounded-lg bg-purple-500 px-8 py-3 text-sm font-medium text-white">
                    Login
                </button>
            </div>
        </form>
    </div>

    <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
        <img alt="Welcome"
            src="https://www.freepik.com/free-photo/portrait-content-beautiful-african-american-female-model-smiles-joyfully-keeps-hands-together-glad-recieve-congratulations_9592087.htm#fromView=search&page=1&position=3&uuid=68adaa33-e5c4-47ba-879a-353f819e81d1"
            class="absolute inset-0 h-full w-full object-cover" />
    </div>
</section>