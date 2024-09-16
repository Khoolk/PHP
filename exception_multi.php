<?php
//multiple catch blocks can be used to catch different classes of exception
//normal execution will continue after last catch block defined in sequence, exception can be thrown (or re-thrown) within a catch block
if (6/2 == 3) {
    echo "correct";
} else {
    throw new Exception("Wrong");
}
?>