<?php

include('connected.php');

if($connected) {
    include("index_connected.php");
} else {
    include("index_unconnected.php");
}