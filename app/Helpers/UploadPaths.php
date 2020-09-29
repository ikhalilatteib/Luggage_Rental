<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths = array(
        'admin_photos'=> '/uploads/admin',
        'profile_photos' => '/uploads/profile'
    );

    public static function getUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }

}
