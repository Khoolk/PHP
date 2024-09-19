<?php
//created a function to throw exception for testing
function the_exception() {
    throw new Exception("Exception");
  }
//Exception can be thrown and caught, code may be surrounded in try block, must have at least one catch or finally block
try {
    the_exception();
} catch (Exception $e) {
    echo "Exception caught\n";
//when exception is thrown, following code will not be executed
//if no exception caught, "Uncaught exception" error occur, unless set_exception_handler() is defined
//finally block will always be excecuted after try and catch blocks, regardless of an exception has been thrown, 
//and before normal execution resumes, can be specified instead of catch block
} finally {
    echo "outputed regardless of exception";
}
?>