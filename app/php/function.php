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


function display_text($arr)
{
  print '<div class="container">';
  print '<div class ="d-flex justify-content-center mt-5">';
  
  foreach ($arr as $key => $value) {
    if($key == 'left') {
     
        print '<div class="col-8"><p>"' . $value . '"</p></div>';
      
    }elseif($key == 'right') {
      
        print '<div class="col-8"><img src="' . $value . '" width="700" height="500px"></div>';
      
    }
   }
  print '</div>';
  print '</div>';
}


function get_form($array, $input_name1, $input_name2, $input_name3 = false)
{   print '<div class="cointainer">';
    print '<form class="container d-flex flex-wrap" method="POST">';
    foreach ($array['inputs'] as $input) {
        if ($input['name'] == $input_name1) {
            print '<input class="col-6" type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
        } elseif ($input['name'] == $input_name2) {
            print '<input class="col-6" type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '" >';
        } elseif ($input['name'] == $input_name3) {
            print '<textarea class="col-12" name="'. $input['name']. '" placeholder="' . $input['placeholder'] . '"></textarea>';
        }
    }
    foreach ($array['buttons'] as $button) {
        print '<input type="' . $button['type'] . '" value="' . $button['value'] . '" >';
    }
    print '</form>';
    print '</div>';
}
