<?php
  function generateNewString($len = 10){
    $token = "hftdctTCFYGVUH23tsdfssfgdfsg5645657TVTC";
    $token = str_shuffle($token);
    $token = substr($token,0,$len);

    return $token;
  }

  function redirectToLogin(){
    header("location: http://vor.lbmsolutions.co.za/login.html");
  }

  function UJAPS($mark)
  {
    if ($mark >= 80 and $mark <101)
    {
      $total = 7 ;
    }else if ($mark >= 70 and $mark < 80)
    {
      $total = 6 ;
    }else if ($mark >=60 and $mark < 70)
    {
      $total = 5 ;
    }else if ($mark >= 50 and $mark < 60)
    {
      $total = 4 ;
    }else if ($mark >= 40 and $mark < 50)
    {
      $total = 3 ;
    }


  return $total;
  }
  function APS ($mark) {
    $total = 0;
    if ($mark >= 90)
    {
      $total = 8 ;
    } else if ($mark >= 80 and $mark < 90)
    {
      $total = 7 ;
    }else if ($mark >= 70 and $mark < 80)
    {
      $total = 6 ;
    }else if ($mark >=60 and $mark < 70)
    {
      $total = 5 ;
    }else if ($mark >= 50 and $mark < 60)
    {
      $total = 4 ;
    }else if ($mark >= 40 and $mark < 50)
    {
      $total = 3 ;
    }


  return $total;
  }

  function APS_LO ($mark) {
    $total = 0;
    if ($mark >= 90)
    {
      $total = 4 ;
    } else if ($mark >= 80 and $mark < 90)
    {
      $total = 3 ;
    }else if ($mark >= 70 and $mark < 80)
    {
      $total = 2 ;
    }else if ($mark >=60 and $mark < 70)
    {
      $total = 1 ;
    }


  return $total;
  }
  function APS_EM($mark) {
    $total = 0;
    if ($mark >= 90)
    {
      $total = 10 ;
    } else if ($mark >= 80 and $mark < 90)
    {
      $total = 9 ;
    }else if ($mark >= 70 and $mark < 80)
    {
      $total = 8 ;
    }else if ($mark >=60 and $mark < 70)
    {
      $total = 7 ;
    }else if ($mark >= 50 and $mark < 60)
    {
      $total = 4 ;
    }else if ($mark >= 40 and $mark < 50)
    {
      $total = 3 ;
    }


  return $total;
  }
 ?>
