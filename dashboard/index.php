<?php
    session_start();
    if($_SESSION['account_type'] === 'recruiter'){
        header('Location: /jobportal/dashboard/recruiter');
    }
    else if($_SESSION['account_type'] === 'jobseeker'){
        header('Location: /jobportal/dashboard/jobseeker');
    }
    else{
        header('Location: /jobportal/account/register');
    }
?>