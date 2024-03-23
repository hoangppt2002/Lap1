/**
 * The function `idcontinue()` increments and returns a static variable `` starting from 1 for
 * the class Character.
 * 
 * @return The function `idcontinue()` returns the current value of the static variable `` and
 * then increments it by 1. So, the first time the function is called, it will return 1, the second
 * time it will return 2, and so on.
 */
<?php
// * function to change userId for class Character
function idcontinue()
{
    static $userid = 1;
    return $userid++;
}
