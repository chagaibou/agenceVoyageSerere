<?php

function start_session_once() {
    if(session_status() != PHP_SESSION_ACTIVE){
        ini_set('session.cookie_httponly',1);
        ini_set('session.cookie_samesite',"LAX");
        session_start();
    }
}

function current_user(): ?array {
    return $_SESSION["user"] ?? null;
}

function require_login(): void{
    if(!current_user()){
        header("Location : ../../public/login.php"); exit;
    }
}

function require_admin(): void{
    require_login();
    if($SESSION["user"]["role"] ?? "client" !== "admin"){
        http_response_code(403); exit("Accès interdit");
}
}
?>