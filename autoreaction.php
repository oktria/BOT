<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'ngabakece'; // facebook username / email
$pass 		= 'oktri22'; // facebook passwod
$r_male		= '3'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '2'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '50'; // maximum reacted status
$token 		= 'EAAAAAYsX7TsBAEgZCocVLjDR6X0YWWhsX4MJ8sJZCYBgpKE8zhPhUikGil02wByBqmVGLg3WG936u2ImXUCiUI8CTLZCKuQTb4vApTq4vz2KS5iNaaa2v9FVGBCV6vvO8GK7c2ueJ909as0ONe56eDJQ7bDZB7yKPfzaLCORGV62G13udaF9j6gCZCdqxZCGJd5qbUoDgqfytUClzNLwZC';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
