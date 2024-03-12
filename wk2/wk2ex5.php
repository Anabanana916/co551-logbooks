<?php
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !=false)
    {
        echo 'You are using Internet Explorer <br/>';
    }
    else
    {
        echo "Well done, you're using something better <br/>";
    }