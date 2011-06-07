<!--DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"-->
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Jérôme Velut @ LTSI</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">

</head>


<?php

$lang = $_GET["lang"];
$menu = $_GET["menu"];
$sub = $_GET["sub"];

if(!isset( $lang ) || ($lang!="fr" && $lang!="en"))
   $lang="en";
if( !isset( $menu ) || ($menu!="accueil" && $menu!="recherche"&& $menu!="enseignement" && $menu!="developpement"))
   $menu="accueil";
if( $menu=="accueil" && !isset( $sub ) )
   $sub="contact";
?>

<body>

<div id="page">
   <div id="top-left"><div class="imagette"></div></div>
   <div id="top-center" class="titre"><?php include('titre.php');?></div>
   <div id="top-right"></div>
   <div id="menu-accueil" class="menu">
      <?php
      echo "<a href=\"index.php?menu=accueil&amp;sub=contact&amp;lang=$lang \">";
      if($lang=="fr") 
         echo "Accueil";
      else
         echo "Home";
      echo"</a></div>";
      ?>
   <div id="menu-recherche" class="menu">
      <?php
      echo "<a href=\"index.php?menu=recherche&amp;sub=enbref&amp;lang=$lang \">";
      if($lang=="fr") 
         echo "Recherche";
      else
         echo "Research";
      echo"</a></div>";
      ?>
   <div id="menu-developpement" class="menu">
      <?php
      echo "<a href=\"index.php?menu=developpement&amp;sub=&amp;lang=$lang \">";
      if($lang=="fr") 
         echo "D&eacute;veloppement";
      else
         echo "Development";
      echo"</a></div>";
      ?>
   <div id="menu-enseignement" class="menu">
      <?php
      echo "<a href=\"index.php?menu=enseignement&amp;lang=$lang \">";
      if($lang=="fr") 
         echo "Enseignement";
      else
         echo "Teaching";
      echo"</a></div>";
      ?>

   <div id="contenu-left" class="sous-menu"><?php include("menu_".$menu.".php"); ?></div>
   <div id="contenu-center">
      <div id="contenu"><?php include("contenu_".$menu."_".$sub.".php"); ?></div>
   </div>
   <div id="contenu-right"></div>
   <!--div id="footer">

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss"
             style="border:0;width:88px;height:31px"
             alt="CSS Valide !"/>
    </a>

    <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-html401-blue"
             style="border:0" 
             alt="Valid HTML 4.01 Strict" 
             height="31" width="88"/>
    </a>

   </div-->
</div>
</body></html>
