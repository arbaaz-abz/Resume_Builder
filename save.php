<?php
session_start();
echo 'WORKS';
file_put_contents('new_resume.html', file_get_contents($_SESSION['template_html']));
?>