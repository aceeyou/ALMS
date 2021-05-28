<?php
include "includes/db.php";

if (isset($_GET["edit"])) {
  $editID = $_GET['edit'];
  $sql2 = "SELECT * FROM `author` WHERE Author_ID = $editID;";
  $resultEdit = mysqli_query($conn, $sql2);
  $row = mysqli_fetch_assoc($resultEdit);
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | ALMS </title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Rubik:wght@300&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">

  <link rel="icon" href="images/alms-logo.png">
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <!-- NAV BAR -->
  <nav>
    <div class="menu-btn">
      <button id="open-btn" onclick="openSideMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#000000">
              <path d="M21.5,35.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,78.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376zM21.5,121.83333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376z"></path>
            </g>
          </g>
        </svg>
      </button>
    </div>
    <div id="logo-div">
      <a href=""><img src="images/alms-logo.png" alt=""></a>
      <a href="dashboard.php">ALMS</a>
    </div>
    <div id="search-container">
      <form action="search.php" method="GET" id="search">
                      <input type="text" placeholder="Search" name="search-input" class="search-input">
                  </form>    </div>
    <ul class="main-nav">
      <li><a href="#" class="active">Home</a></li>
      <!-- <li onClick="showInnerUL()"><a href="#">Books</a></li> -->
      <li class="user-handle"><img class="user-img" src="images/user-default.png" alt=""></li>
      <li class="dropdown-btn" onclick="dropDropDown()"><img class="dropdown-img" src="images/down-arrow.png" alt="">
        <ul class="dropdown-menu">
          <li><a href="user-profile.php"><img src="images/user-default.png" alt=""> User Profile</a></li>
          <li onclick="logoutUser()"><img src="images/logout.png" alt=""> Log out</li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- SIDE MENU / SIDEBAR -->
  <section class="side-menu">
    <button id="close-btn" onclick="closeSideMenu()"><img src="images/arrow-white.png" alt=""></button>

    <div class="tasks">

      <div class="item user-profile">
        <img src="images/alms-logo.png" alt="">
        <div>
          <p>Library Management <br>System</p>
        </div>
      </div>

      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
          <g transform="">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g fill="#ffffff">
                <path d="M30.96,13.76c-9.44436,0 -17.2,7.75564 -17.2,17.2v110.08c0,9.44437 7.75564,17.2 17.2,17.2h110.08c9.44437,0 17.2,-7.75563 17.2,-17.2v-110.08c0,-9.44436 -7.75563,-17.2 -17.2,-17.2zM30.96,20.64h110.08c5.69163,0 10.32,4.62836 10.32,10.32v110.08c0,5.69163 -4.62837,10.32 -10.32,10.32h-110.08c-5.69164,0 -10.32,-4.62837 -10.32,-10.32v-110.08c0,-5.69164 4.62836,-10.32 10.32,-10.32zM82.56,44.72v37.84h-37.84v6.88h37.84v37.84h6.88v-37.84h37.84v-6.88h-37.84v-37.84z"></path>
              </g>
            </g>
          </g>
        </svg>
        <a href="new-book.html" class="task">Add New Book</a>
      </div>

      <!-- Action: Add new shelf -->
      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M34.4,10.32c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v92.88h-20.64c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v13.76c0.00019,1.89978 1.54022,3.43981 3.44,3.44h10.32v24.08c0,5.65902 4.66098,10.32 10.32,10.32c5.65902,0 10.32,-4.66098 10.32,-10.32v-24.08h89.44v24.08c0,5.65902 4.66098,10.32 10.32,10.32c5.65902,0 10.32,-4.66098 10.32,-10.32v-24.08h10.32c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-13.76c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-20.64v-72.24c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-20.64v-3.44c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-20.64v-3.44c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-24.08v-3.44c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44zM37.84,17.2h20.64v3.44v86h-20.64zM44.72,24.08c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h6.88c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM65.36,24.08h20.64v3.44v79.12h-20.64zM72.24,30.96c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h6.88c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM92.88,30.96h17.2v3.44v72.24h-17.2zM99.76,37.84c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h3.44c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM116.96,37.84h17.2v68.8h-17.2zM123.84,44.72c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h3.44c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM44.72,92.88c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h6.88c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM72.24,92.88c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h6.88c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM99.76,92.88c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h3.44c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM123.84,92.88c-1.24059,-0.01754 -2.39452,0.63425 -3.01993,1.7058c-0.62541,1.07155 -0.62541,2.39684 0,3.46839c0.62541,1.07155 1.77935,1.72335 3.01993,1.7058h3.44c1.24059,0.01754 2.39452,-0.63425 3.01993,-1.7058c0.62541,-1.07155 0.62541,-2.39684 0,-3.46839c-0.62541,-1.07155 -1.77935,-1.72335 -3.01993,-1.7058zM13.76,113.52h20.64h27.52h27.52h24.08h24.08h20.64v6.88h-10.32h-13.76h-96.32h-13.76h-10.32zM27.52,127.28h6.88v24.08c0,1.9365 -1.5035,3.44 -3.44,3.44c-1.9365,0 -3.44,-1.5035 -3.44,-3.44zM137.6,127.28h6.88v24.08c0,1.9365 -1.5035,3.44 -3.44,3.44c-1.9365,0 -3.44,-1.5035 -3.44,-3.44z"></path>
            </g>
          </g>
        </svg>
        <a href="new-shelf.html" class="task">Add New Shelf</a>
      </div>
      <!-- end -->

      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M37.625,10.75c-8.86035,0 -16.125,7.26465 -16.125,16.125v112.875h2.26758c2.35156,5.9629 7.09668,10.75 13.85742,10.75h102.125v-10.75h-102.125c-3.02344,0 -5.375,-2.35156 -5.375,-5.375c0,-3.02344 2.35156,-5.375 5.375,-5.375h102.125v-118.25zM37.625,21.5h91.375v96.75h-91.375c-1.88965,0 -3.69531,0.41993 -5.375,1.00781v-92.38281c0,-3.02344 2.35156,-5.375 5.375,-5.375zM75.25,43v32.25h-21.5l26.875,26.875l26.875,-26.875h-21.5v-32.25z"></path>
            </g>
          </g>
        </svg>
        <a href="book-borrow-slip.html" class="task">Borrow Book</a>
      </div>

      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M37.625,21.5c-8.84221,0 -16.125,7.28279 -16.125,16.125v96.75c0,8.84221 7.28279,16.125 16.125,16.125h75.25c8.84221,0 16.125,-7.28279 16.125,-16.125v-34.79053l28.15577,-27.67285c5.37091,-5.22958 5.42444,-13.99692 0.12597,-19.29541l-5.64794,-5.64795c-2.64925,-2.64925 -6.16903,-3.94878 -9.6792,-3.92627c-3.51018,0.02247 -7.00142,1.36679 -9.61621,4.05225l-3.33838,3.40137v-12.87061c0,-8.84221 -7.28279,-16.125 -16.125,-16.125zM37.625,32.25h75.25c3.02579,0 5.375,2.34921 5.375,5.375v23.78857l-36.05029,36.65918l-7.47461,31.45215l31.45215,-7.4746l1.04981,-1.04981l11.02295,-10.83398v24.20849c0,3.02579 -2.34921,5.375 -5.375,5.375h-75.25c-3.02579,0 -5.375,-2.34921 -5.375,-5.375v-96.75c0,-3.02579 2.34921,-5.375 5.375,-5.375zM142.01758,53.70801c0.71681,-0.00355 1.43987,0.28507 2.01563,0.86084l5.64794,5.64795c1.15151,1.15151 1.1446,2.87583 -0.02099,4.01025h-0.02099l-48.83692,48.03906l-11.58984,2.77149l2.75049,-11.54785l48.06006,-48.87891v-0.021c0.5672,-0.58254 1.27779,-0.87829 1.99463,-0.88184zM43,53.75v10.75h10.75v-10.75zM64.5,53.75v10.75h43v-10.75zM43,75.25v10.75h10.75v-10.75zM64.5,75.25v10.75h14.5083l10.56103,-10.75zM43,96.75v10.75h10.75v-10.75zM64.5,96.75v10.75h4.40918l2.56152,-10.75z"></path>
            </g>
          </g>
        </svg>
        <a href="book-reservation.html" class="task">Reserve Book</a>
      </div>

      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z"></path>
            </g>
          </g>
        </svg>
        <a href="new-author.html" class="task">Add New Author</a>
      </div>

      <div class="item">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M80.625,10.75c-38.50683,0 -69.875,31.36817 -69.875,69.875c0,38.50683 31.36817,69.875 69.875,69.875c38.50683,0 69.875,-31.36817 69.875,-69.875c0,-38.50683 -31.36817,-69.875 -69.875,-69.875zM80.625,21.5c32.71192,0 59.125,26.41308 59.125,59.125c0,14.40332 -5.12304,27.54688 -13.60547,37.79297c-4.61914,-13.10156 -14.61328,-23.6416 -27.37891,-28.84864c5.33301,-4.91308 8.73438,-11.92578 8.73438,-19.69433c0,-14.78125 -12.09375,-26.875 -26.875,-26.875c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,7.76855 3.40136,14.78125 8.73438,19.69433c-12.76562,5.20703 -22.71777,15.74707 -27.33692,28.84864c-8.52441,-10.24609 -13.64746,-23.38965 -13.64746,-37.79297c0,-32.71192 26.41308,-59.125 59.125,-59.125zM80.625,53.75c8.98633,0 16.125,7.13868 16.125,16.125c0,8.98633 -7.13867,16.125 -16.125,16.125c-8.98632,0 -16.125,-7.13867 -16.125,-16.125c0,-8.98632 7.13868,-16.125 16.125,-16.125zM80.625,96.75c18.2666,0 33.25781,12.97558 36.74317,30.19239c-10.12011,8.02051 -22.84375,12.80761 -36.74317,12.80761c-13.89942,0 -26.62304,-4.7871 -36.70117,-12.80761c3.44335,-17.2168 18.43456,-30.19239 36.70117,-30.19239z"></path>
            </g>
          </g>
        </svg>
        <a href="new-patron.html" class="task">Register Patron</a>
      </div>



    </div>
  </section>

  <main>
    <div id="book-form-container">
      <div class="book-form">
        <h2><img src="images/edit-black.png" alt="" />Edit Author Details</h2>
        <form action="includes/manage-authors(backend).php" method="POST">
          <!-- Input form -->
          <input type="hidden" name="Author_ID" value="<?php echo $row['Author_ID']; ?>" />
          <label for="">First Name</label>
          <input type="text" name="Author_FirstName" id="" placeholder="JK" value="<?php echo $row['Author_FirstName'] ?>" />
          <!-- end -->

          <!-- Input form -->
          <label for="">Middle Name</label>
          <input type="text" name="Author_MiddleName" id="" placeholder="Something" value="<?php echo $row['Author_MiddleName'] ?>" />
          <!-- end -->

          <!-- Input form -->
          <label for="">Last Name</label>
          <input type="text" name="Author_LastName" id="" placeholder="Rowling" value="<?php echo $row['Author_LastName'] ?>" />
          <!-- end -->

          <!-- Input form -->
          <label for="">State Address</label>
          <input type="text" name="Author_StateAddress" id="" placeholder="Texas" value="<?php echo $row['Author_StateAddress'] ?>" />
          <!-- end -->

          <!-- Input form -->
          <label for="">Country Address</label>
          <input type="text" name="Author_CountryAddress" id="" placeholder="USA" value="<?php echo $row['Author_CountryAddress'] ?>" />
          <!-- end -->

          <!-- Button -->
          <input type="submit" name="SAVE" class="save-edit" />
          <!-- end -->
        </form>
      </div>
    </div>
  </main>


  <script src="index.js">
  </script>
</body>

</html>
