--TEST--
Uri\WhatWg\UrlValidationErrorType unused deprecated typo alias does not abort shutdown
--EXTENSIONS--
uri
--FILE--
<?php
echo "Done\n";
?>
--EXPECT--
Done
