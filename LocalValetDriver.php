<?php

use Valet\Drivers\ValetDriver;

class LocalValetDriver extends ValetDriver
{
    /**
     * Determine if the driver serves the request.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return bool
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return file_exists($sitePath.'/htdocs/cms/wp-load.php');
    }

    /**
     * Determine if the incoming request is for a static file.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return false|string
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)
    {
        $staticFilePath = $sitePath.'/htdocs'.$uri;

        if ($this->isActualFile($staticFilePath)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Determine if the given path is an actual file.
     *
     * @param string $path
     * @return bool
     */
    protected function isActualFile(string $path): bool
    {
        return file_exists($path) && is_file($path);
    }

    /**
     * Get the fully resolved path to the application's front controller.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return string
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): string
    {
        $_SERVER['PHP_SELF'] = $uri;
        $_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'];

        if (strpos($uri, '/cms/') === 0) {
            if (is_dir($sitePath.'/htdocs'.$uri)) {
                $uri = $this->forceTrailingSlash($uri);

                return $sitePath.'/htdocs'.$uri.'/index.php';
            }

            return $sitePath.'/htdocs'.$uri;
        }

        return $sitePath.'/htdocs/index.php';
    }

    /**
     * Redirect to uri with trailing slash.
     *
     * @param  string $uri
     *
     * @return string
     */
    private function forceTrailingSlash($uri)
    {
        if (substr($uri, -1 * strlen('/cms/wp-admin')) == '/cms/wp-admin') {
            header('Location: '.$uri.'/');
            die;
        }

        return $uri;
    }
}
