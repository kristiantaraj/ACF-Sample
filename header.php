<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg sticky-top bg-white ">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="169.514" height="45.341" viewBox="0 0 169.514 45.341">
  <defs>
    <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
      <stop offset="0.002" stop-color="#00609e"/>
      <stop offset="1" stop-color="#0076ba"/>
    </linearGradient>
  </defs>
  <g id="Group_328" data-name="Group 328" transform="translate(-1730.1 -1468.958)">
    <g id="Group_1" data-name="Group 1" transform="translate(1730.1 1468.958)">
      <path id="Path_1" data-name="Path 1" d="M1773.455,1468.958h-25.823a9.518,9.518,0,0,0-9.507,9.507v26.326a9.518,9.518,0,0,0,9.507,9.508h24.1a1.6,1.6,0,1,0,0-3.191h-24.1a6.323,6.323,0,0,1-6.316-6.317v-26.326a6.324,6.324,0,0,1,6.316-6.316h25.823a6.324,6.324,0,0,1,6.316,6.316v21.292a3.224,3.224,0,0,1-3.223,3.224h-.017a3.232,3.232,0,0,1-3.208-3.224v-7.093l.66-.35a3.727,3.727,0,0,0,.019-6.576l-11.442-6.151a3.723,3.723,0,0,0-3.529,0l-11.442,6.151a3.727,3.727,0,0,0,.019,6.576l11.442,6.065a3.72,3.72,0,0,0,3.491,0l7.592-4.024v5.4a6.415,6.415,0,1,0,12.83,0v-21.292A9.518,9.518,0,0,0,1773.455,1468.958Zm-12.409,26.6a.535.535,0,0,1-.5,0L1749.1,1489.5a.536.536,0,0,1,0-.946l11.442-6.151a.534.534,0,0,1,.508,0l11.442,6.151a.536.536,0,0,1,0,.946Z" transform="translate(-1738.124 -1468.958)" fill="url(#linear-gradient)"/>
      <path id="Path_2" data-name="Path 2" d="M1789.085,1543.986l-4.87,2.293a.14.14,0,0,1-.12,0l-4.637-2.28a1.6,1.6,0,0,0-1.408,2.864l4.638,2.28a3.315,3.315,0,0,0,2.887.024l4.87-2.292a1.6,1.6,0,0,0-1.359-2.887Z" transform="translate(-1761.589 -1513.969)" fill="url(#linear-gradient)"/>
    </g>
    <g id="Group_2" data-name="Group 2" transform="translate(1795.45 1480.36)">
      <path id="Path_3" data-name="Path 3" d="M1907.507,1498.471c5.1,0,9.168,3.41,9.168,8.479,0,5.038-4.068,8.385-9.136,8.385s-9.137-3.348-9.137-8.385C1898.4,1501.881,1902.47,1498.471,1907.507,1498.471Zm.031,12.359a3.645,3.645,0,0,0,3.661-3.88,3.673,3.673,0,1,0-7.322,0A3.645,3.645,0,0,0,1907.539,1510.83Z" transform="translate(-1898.402 -1492.87)" fill="#262b3a"/>
      <path id="Path_4" data-name="Path 4" d="M1949.859,1496.768h-2.19v-3.911h2.347v-4.349h5.257v4.349h3.379v3.911h-3.379v5.694c0,1.94,1.846,2.221,2.879,2.221.438,0,.719-.031.719-.031v4.38a10.385,10.385,0,0,1-1.47.094c-2.565,0-7.541-.688-7.541-6.1Z" transform="translate(-1928.019 -1486.881)" fill="#262b3a"/>
      <path id="Path_5" data-name="Path 5" d="M1989.252,1498.471c5.1,0,9.167,3.41,9.167,8.479,0,5.038-4.067,8.385-9.136,8.385s-9.136-3.348-9.136-8.385C1980.147,1501.881,1984.215,1498.471,1989.252,1498.471Zm.031,12.359a3.645,3.645,0,0,0,3.661-3.88,3.673,3.673,0,1,0-7.322,0A3.645,3.645,0,0,0,1989.283,1510.83Z" transform="translate(-1947.543 -1492.87)" fill="#262b3a"/>
      <path id="Path_6" data-name="Path 6" d="M2039.057,1499.177c4.474,0,6.852,3.317,6.852,7.416,0,.406-.094,1.314-.094,1.314H2034.27a5.174,5.174,0,0,0,5.444,5.225,7.546,7.546,0,0,0,4.693-1.846l1.252,2.222a9.424,9.424,0,0,1-6.132,2.253,8.062,8.062,0,0,1-8.385-8.291C2031.141,1502.431,2034.551,1499.177,2039.057,1499.177Zm3.755,6.445c-.094-2.722-1.783-4.036-3.817-4.036a4.536,4.536,0,0,0-4.631,4.036Z" transform="translate(-1978.198 -1493.295)" fill="#262b3a"/>
      <path id="Path_7" data-name="Path 7" d="M2082,1490.311a5.269,5.269,0,0,1,4.881,2.5h.063a8.978,8.978,0,0,1-.062-1.064v-7.321h3.035v22.09h-2.878v-1.5c0-.626.031-1.064.031-1.064h-.062a5.546,5.546,0,0,1-5.194,2.941c-4.287,0-6.978-3.379-6.978-8.291C2074.838,1493.565,2077.811,1490.311,2082,1490.311Zm.407,13.955c2.346,0,4.568-1.658,4.568-5.695,0-2.816-1.47-5.632-4.474-5.632-2.5,0-4.568,2.065-4.568,5.663C2077.936,1502.045,2079.781,1504.266,2082.41,1504.266Z" transform="translate(-2004.466 -1484.429)" fill="#262b3a"/>
      <path id="Path_8" data-name="Path 8" d="M2124.027,1500.118h3.035v9.449c0,2.19.438,3.942,2.972,3.942,3.223,0,5.132-2.847,5.132-5.976v-7.415h3.035v15.832h-2.941v-2.1a10.347,10.347,0,0,1,.063-1.158h-.063a6.385,6.385,0,0,1-5.82,3.63c-3.567,0-5.413-1.877-5.413-6.07Z" transform="translate(-2034.036 -1493.861)" fill="#262b3a"/>
    </g>
  </g>
</svg>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

            <li class="nav-item"><strong><a class="nav-link " href="#">strona główna</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link " href="#">O nas</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link " href="#">O zajęciach</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link " href="#">Blog</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link " href="#">Galeria</a></strong></li>
            <li class="nav-item"><strong><a class="nav-link " href="#">Kontakt</a></strong></li>

            </ul>
            <div class="login rounded">
            <svg class="login-avatar" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path id="Path_393" data-name="Path 393" d="M14,2A12,12,0,1,0,26,14,12,12,0,0,0,14,2ZM8.084,21.536C8.6,20.456,11.744,19.4,14,19.4s5.412,1.056,5.916,2.136a9.51,9.51,0,0,1-11.832,0ZM21.632,19.8C19.916,17.708,15.752,17,14,17s-5.916.708-7.632,2.8a9.6,9.6,0,1,1,15.264,0ZM14,6.8A4.2,4.2,0,1,0,18.2,11,4.189,4.189,0,0,0,14,6.8Zm0,6A1.8,1.8,0,1,1,15.8,11,1.8,1.8,0,0,1,14,12.8Z" transform="translate(-2 -2)" fill="#fafcfd"/>
            </svg>
            <p class="login-text text-white"><strong>Zaloguj się</strong></p>
            </div>
        </div>
    </div>
</nav>



