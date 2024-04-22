<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orda.vol</title>
  <link rel="shortcut icon" href="./source/icons/heart-suit-svgrepo-com.svg" type="image/x-icon">
  <link rel="stylesheet" href="./style/main.css">
  <link rel="stylesheet" href="./style/fonts.css">
  <link rel="stylesheet" href="./style/adaptation_for_tablet.css">
  <link rel="stylesheet" href="./style/adaptation_for_mobile.css">
  <link rel="stylesheet" href="./style/scrollbar.css">
  <link rel="stylesheet" href="./style/aboutme.css">
  <link rel="stylesheet" href="./style/school.css">
  <link rel="stylesheet" href="./style/articles.css">
  <link rel="stylesheet" href="./style/kzovol.css">
  <link rel="stylesheet" href="./style/time.css">
  <!-- Udalits v Konce -->
  <link rel="stylesheet" href="./style/test.css">

</head>

<body>

  <!-- Home -->

  <div id="Header_background">
    <header>
      <div id="Header_div">
        <div id="Header_div_box">
          <a href="#Home" id="Header_div_a">
            <div id="Header_div_box_logo">
              <img class="img-logo" src="./source/icons/heart-suit-svgrepo-com.svg">
              <a href="index.php"><h1 id="header_logo_name">Orda.vol</h1></a>
            </div>
          </a>

          <nav>
            <a href="aboutme.php">Обо мне</a>
            <a href="kzovol.php">Об огранизации</a>
            <a href="school.php">Школа</a>
            <a href="articles.php">Статьи</a>
          </nav>

          <div id="Header_email_and_button">
            
          
            <img id="Header_button" src="./source/icons/menu-alt-1-svgrepo-com (1).svg" onclick="menu_open()"
              alt="Menu">
          </div>
        </div>
        <div id="Header_menu">
          <div id="Header_menu_div">
            <a class="Header_menu_button" onclick="menu_close()" href="aboutme.php">Обо мне</a><br>
            <a class="Header_menu_button" onclick="menu_close()" href="kzovol.php">Об огранизации</a><br>
            <a class="Header_menu_button" onclick="menu_close()" href="school.php">Школа</a><br>
            <a class="Header_menu_button" onclick="menu_close()" href="articles.php">Статьи</a><br>
          </div>
          <img id="Header_menu_close" src="./source/icons/cross-svgrepo-com.svg" onclick="menu_close()" alt="Exit">
        </div>