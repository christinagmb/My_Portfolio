<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>Portfolio</title>
</head>
<style>
    ul{
        background-color:#ffccc0;
        list-style:none;
        display: flex;
        justify-content: flex-end;
        padding: 30px 80px 30px 80px;
        position: sticky;
        top: 0;
        z-index: 1;
    }
    ul li {
        display: inline;
    }
    ul li a{
        color: #524a48;
        text-decoration: none;
        font-size: 22px;
        font-family: "Poppins";
        padding-right: 30px;
        font-weight: bold;
        display: inline-block;
    }
    ul li:nth-child(1) a:hover,
    ul li:nth-child(2) a:hover,
    ul li:nth-child(3) a:hover,
    ul li:nth-child(4) a:hover {
        color: #975f4c;
        transition: all 0.3s ease;
        transform: scale(1.1);
    }

    </style>
<body>
    <ul>
        <li style="margin-right: auto; display: flex; gap: 15px;">
        <a href="https://facebook.com/christinagmb" target="_blank">
            <i class="fa-brands fa-facebook" style="font-size: 30px; color: #524a48;"></i>
        </a>
        <a href="https://instagram.com/christinagmb" target="_blank">
            <i class="fa-brands fa-instagram" style="font-size: 30px; color: #524a48;"></i>
        </a>
        <a href="https://www.linkedin.com/in/christina-gomba-153887364
" target="_blank">
            <i class="fa-brands fa-linkedin" style="font-size: 30px; color: #524a48;"></i>
        </a>
        <a href="https://github.com/christinagmb" target="_blank">
            <i class="fa-brands fa-github" style="font-size: 30px; color: #524a48;"></i>
        </a>
        </li>


        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
        <li><a href="<?php echo site_url('aboutme'); ?>">About Me</a></li>
        <li><a href="<?php echo site_url('awards'); ?>">Awards</a></li>
        <li><a href="<?php echo site_url('experiences'); ?>">Projects</a></li>
    </ul>