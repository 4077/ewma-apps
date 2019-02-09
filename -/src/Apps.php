<?php namespace ewma\apps;

class Apps
{
    public static $instance;

    /**
     * @return \ewma\apps\Apps
     */
    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public function getSshConnectionString(\ewma\apps\models\Server $server)
    {
        $host = $server->host;
        $user = $server->user;

        if ($host != 'localhost' && $host != '127.0.0.1') {
            return $user . '@' . $host;
        }
    }
}
