<?php
session_start();
session_destroy();
header('location: http://recaptcha-example.42web.io');