<?php

class Session
{
    /**
     * data (key, value) => set session
     * data (key) => get session
     */
    static public function data($key = '', $value = '')
    {

        $sessionKey = self::isInvalid();

        if (!empty($value)) {
            if (!empty($key)) {
                $_SESSION[$sessionKey][$key] = $value;
                return true;
            }
            return false;
        } else {
            if (!empty($key)) {
                if (isset($_SESSION[$sessionKey])) {
                    return $_SESSION[$sessionKey];
                }
            } else {
                if (isset($_SESSION[$sessionKey][$key])) {
                    return $_SESSION[$sessionKey][$key];
                }
            }
        }
    }

    static public function delete($key = '')
    {
        $sessionKey = self::isInvalid();
        if ($sessionKey === false) {
            // Xử lý trường hợp sessionKey không hợp lệ nếu cần
            return false;
        }

        if (!empty($key)) {
            if (isset($_SESSION[$sessionKey][$key])) {
                unset($_SESSION[$sessionKey][$key]);
                return true;
            }
            return false;
        } else {
            if (isset($_SESSION[$sessionKey])) {
                unset($_SESSION[$sessionKey]);
                return true;
            }
            return false;
        }
    }

    static public function flash($key = '', $value = '')
    {
        $dataFlash = self::data($key, $value);
        if (empty($value)) {
            self::delete($key);
        }
        return $dataFlash;
    }

    static public function showErrors($message)
    {
        $data = ['message' => $message];
        App::$app->loadError('exception', $data);
        die();
    }

    static function isInvalid()
    {
        global $config;
        if (!empty($config['session'])) {
            $sessionConfig = $config['session'];
            if (!empty($sessionConfig['session_key'])) {
                $sessionKey = $sessionConfig['session_key'];
                return $sessionKey;
            } else {
                self::showErrors('Missing session config! Please check file: session.php');
            }
        } else {
            self::showErrors('Missing session config! Please check file: session.php');
        }
    }
}
