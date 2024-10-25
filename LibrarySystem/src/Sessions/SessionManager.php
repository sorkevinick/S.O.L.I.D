<?php
namespace LibrarySystem\Sessions;

use LibrarySystem\Interfaces\SessionManagerInterface;

class SessionManager implements SessionManagerInterface {
    public function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return $_SESSION[$key] ?? null;
    }
}