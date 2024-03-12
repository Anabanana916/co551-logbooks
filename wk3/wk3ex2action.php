<?php
  if ($_POST["txtage"] < 21)
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }

  echo"\n";

  if ($_POST["txtgender"] == "Male")
  {
    echo "You are a man.";
  }
  elseif ($_POST["txtgender"] == "Female")
  {
    echo "You are a woman";
  }
  else
  {
    echo "You are nonbinary";
  }
?>
