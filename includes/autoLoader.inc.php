<!-- Auto include all Class files inside the classes folder -->
<?php
spl_autoload_register('myAutoLoader'); // put function inside ''

function myAutoLoader($ClassName)
{
    $path = "classes/";
    $extenstion = ".class.php";
    $fullPath = $path . $ClassName . $extenstion;
    if (!file_exists(($fullPath))) {
        return false;
    }
    include_once $fullPath;
}
