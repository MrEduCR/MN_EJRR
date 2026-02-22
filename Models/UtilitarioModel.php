<?php

function OpenDatabase()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return mysqli_connect("127.0.0.1:3307","root","","mn_db");
}

function CloseDatabase($context)
{
    mysqli_close($context);
}