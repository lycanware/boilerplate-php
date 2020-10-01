<?php
spl_autoload_register(
    function ($class) {
        $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

        // Allow abstract classes
        if (strpos($class, '::') !== false) {
            $i = strrpos($class, "::");
            $class = substr($class, 0, $i);
            $class = str_replace('::', DIRECTORY_SEPARATOR, $class);
            $class = 'bin/Lycanware/Core/' . $class;
            $class .= '.php';
            $class = str_replace('/Core/Core/', '/Core/', $class);
        }

        require_once str_replace("/bin/Lycanware/Core/Bootstrap", "/", __DIR__) . $class . '.php';
    }
);

?>
