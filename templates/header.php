<head>
    <title>Ninja Pizza</title>
<!-- Compiled and minified CSS --> //3rd party library to handle styling for this project 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body class="grey lighten-4"> //color the backgroud, ligthen-4 lighten the backgroud by 4 shades 
    <nav class="white z-depth-0"> // by defaulth when we do nav it makes a drop shadow, this will make no drop shadow
        <div class="container"> // makes it a centre column so content wont be full across the page
            <a href="#" class="brand-logo brand-text">Ninja Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down"> //when the screen is small or down, hide the nav 
                <li><a href="#" class="btn brand z-depth-0">Add a Pizza</a></li>

        </div>
    </nav>

//nota 

!important to overide any materialise code    