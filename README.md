# PHP Loose vs. Strict Comparison

This repository demonstrates a common pitfall in PHP related to loose versus strict comparison of variables.  The `==` operator performs a loose comparison, converting types before comparison, while `===` performs a strict comparison, checking both value and type.  Failure to use the correct operator can lead to unexpected behavior and bugs.  The `bug.php` file showcases the issue, and `bugSolution.php` provides the corrected code.

## Setup

Simply clone this repository and run the PHP files from your command line using the php interpreter.