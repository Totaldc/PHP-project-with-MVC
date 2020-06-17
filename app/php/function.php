<?php

function menu($array)
{
    print '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">';
    foreach ($array as $menu_name => $link) {
        print '<li class="nav-item" ><a class="nav-link" href = "' . $link . '" >' . $menu_name . '<span class="sr-only" > (current)</span ></a ></li>';
    }
    print '</ul></div></nav>';
}


function galerija($gallery)
{
  print '<div class="container">';
  print '<div class ="row justify-content-center">';
  foreach($gallery as $key => $image){
        print '<img class="col-4 mt-4" src="' . $image . '" . alt="' . $key . '">';
  }
  print '</div>';
  print '</div>';
}