<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UCT Application</title>
    <link rel="stylesheet" type="text/css" href="uctBAApp.css">
  </head>
  <body>
    <h1>UCT APPLICATION</h1>
    <h1>HUMANITIES</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="uctComAppPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option value="Social Science">BA Social Science</option>
            <option value="Social Work">BA Social Work</option>
            <option value="Music">BA Music</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option value="Social Science">BA Social Science</option>
            <option value="Social Work">BA Social Work</option>
            <option value="Music">BA Music</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your third Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option value="Social Science">BA Social Science</option>
            <option value="Social Work">BA Social Work</option>
            <option value="Music">BA Music</option>
           </select>
        </div>

        <div class="">
          <h3>Fine Arts</h3>
          <p>
The degree is designed to enable students to develop as artists at a level of best practice.
          </p>
        </div>
        <div class="">
          <h3>Theatre & Performance</h3>
          <p>
  These qualifications are intended for those who wish to work professionally in the theatre as performers, makers, designers, teachers, and facilitators or as academics and researchers.
          </p>
        </div>
        <div class="">
          <h3>Social Science</h3>
          <p>
  Responsible for studying and researching the link between society and human behavior. Specializes in any of the natural sciences, including anthropology, archaeology, criminology, economics.
          </p>
        </div>
        <div class="">
          <h3>Social Work</h3>
          <p>
Social Workers interact with individuals, families, groups and communities in life-skills training, adult education, economic empowerment and various prevention programmes
          </p>
        </div>
        <div class="">
          <h3>Music</h3>
          <p>
The School offers training in the entire range of orchestral instruments, piano, organ, voice, African percussion and jazz.
          </p>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
