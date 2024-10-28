<?php
$cn=new PDO("pgsql:host=localhost;dbname=pay","postgres","root");
$cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);