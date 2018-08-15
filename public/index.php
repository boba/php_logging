<?php
$execStartTime = microtime(true);

include_once '../src/bootstrap.php';

$logger->info('processing index.php');

$logger->debug('clearing session');
session_unset();
$logger->debug('session cleared');

?>
    <html>
    <head>
        <title>PHP Logging Demo</title>
    </head>
    <body>
    <form method="post" action="home.php">
        <h1>Hello!</h1>
        <label for="username">Who are you?</label>
        <input type="text" id="username" name="username"placeholder="username" required autofocus>
    </form>
    </body>
    </html>

<?php
$time = microtime(true) - $execStartTime;
$logger->debug('processing completed in ' . $time . ' seconds');
?>