<?php

function debug ( $data, $interrupt = false )
{
  $output = '';

  // determine the type of the variable
  if ( gettype ( $data ) == 'array' || gettype ( $data ) == 'object' )
  {
    $output .= '<pre>';
    $output .= print_r ( $data, 1 );
    $output .= '</pre>';
  }
  else
  {
    $output .= '<pre><p>' . $data . '</p></pre>';
  }

  echo $output;

  if ( $interrupt )
  {
    exit;
  }
}
