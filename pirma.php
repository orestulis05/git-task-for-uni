<?php
    /* 
    This is another commit to the remote repository.
    Adding some comments was necessary of course.
    */

    // Collatz conjecture
    function collatz_fn($number)
    {
        $n = $number;

        while ($n != 1)
        {
            if ($n % 2 == 0)
            {
                $n /= 2;
            }
            else
            {
                $n = 3 * $n + 1;
            }
        }

        print("baigesi su " . $n);
    }

    collatz_fn(30);
?>