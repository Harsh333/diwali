<?php
require 'Googl.class.php';
#
# IMPORTANT: Please add your API key to make the tests work
#
$googl = new Googl('AIzaSyDRnpKnZQiM0igaLOUKthxK1ublSSAJ0QI');
println('#1 - Assert that shortening http://www.google.ch results in an URL');
assert_url($googl->shorten('http://www.google.ch'));
println('#2 - Assert that expanding http://goo.gl/KSggQ resolves to http://www.google.com/');
assert_equals($googl->expand('http://goo.gl/KSggQ'), 'http://www.google.com/');
println('#3 - Assert that shortening https://www.facebook.com results in an URL');
assert_url($googl->shorten('https://www.facebook.com'));
println('#4 - Assert that expanding http://goo.gl/wCWWd resolves to http://www.php.net/');
assert_equals($googl->expand('http://goo.gl/wCWWd'), 'http://www.php.net/');
# If this point is reached, all tests have passed
println('All tests have successfully passed!');
?>