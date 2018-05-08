<?php
spl_autoload_register(function ($class_name) {
    include $_SERVER['DOCUMENT_ROOT'] . "/CommunityPortal/" .$class_name . '.php';
});
?>