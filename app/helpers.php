<?php

// class Helpers  {
if(!function_exists('getUserModel')){
    function getUserModel($userType)
    {
        switch ($userType) {
            case 'admin':
                return Admin::class;
            case 'student':
                return Student::class;
            case 'professor':
                return Professor::class;
            // Add more cases for other user types as needed
            default:
                abort(404, 'Invalid user type.');
        }
    }
}

// }

?>
