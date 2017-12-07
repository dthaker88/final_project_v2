<?php
class Manage
{
<<<<<<< HEAD
    public static function core($class)
    {
=======
public static function core($class)
{
>>>>>>> afsconnect1.njit.edu/afs/cad.njit.edu/u/d/t/dt36/public_html/final_project_v2/mvc2

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';


<<<<<<< HEAD
        $path = 'core/' . str_replace('\\', '/', $class) . '.php';
=======
$path = 'core/' . str_replace('\\', '/', $class) . '.php';
>>>>>>> afsconnect1.njit.edu/afs/cad.njit.edu/u/d/t/dt36/public_html/final_project_v2/mvc2
//this is useful to see what path is being asked for

//echo $path . '<br>';

<<<<<<< HEAD
        if (is_file($path)) {
            include $path;
            return;
        }
    }

    public static function controllers($class)
    {

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
        $path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
        if (is_file($path)) {
            include $path;
            return;
        }
    }

    public static function models($class)
    {

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
        $path = 'models/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
        if (is_file($path)) {
            include $path;
            return;
        }
    }

    public static function collections($class)
    {

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
        $path = 'collections/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
        if (is_file($path)) {
            include $path;
            return;
        }
    }

    public static function routes($class)
    {

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
        $path = 'routes/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
        if (is_file($path)) {
            include $path;
            return;
        }
    }
}

spl_autoload_register(array('Manage', 'routes'));
=======
if (is_file($path)) {
include $path;
return;
}
}

public static function controllers($class)
{

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
$path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function models($class)
{

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
$path = 'models/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function collections($class)
{

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
$path = 'collections/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}

public static function routes($class)
{

//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
$path = 'routes/' . str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for

//echo $path . '<br>';
if (is_file($path)) {
include $path;
return;
}
}
}

spl_autoload_register(array('Manage', 'routes'));


>>>>>>> afsconnect1.njit.edu/afs/cad.njit.edu/u/d/t/dt36/public_html/final_project_v2/mvc2
spl_autoload_register(array('Manage', 'controllers'));
spl_autoload_register(array('Manage', 'collections'));
spl_autoload_register(array('Manage', 'models'));
spl_autoload_register(array('Manage', 'core'));