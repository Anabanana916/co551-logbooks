<?php
    include("myfunctions.inc");
    html_header("My second function demo");
    echo "I pay £". calculatetax(15000, 12000) . " in tax";
    html_footer();