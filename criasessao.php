<?php
    if(session_status() != PHP_SESSION_ACTIVE){
        session_cache_expire(60); // 60 minutos
        session_start();
    }
?>