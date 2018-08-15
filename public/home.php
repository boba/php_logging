<?php
$execStartTime = microtime(true);

include_once '../src/bootstrap.php';

$logger->info('processing home.php');

if (isset($_POST['username'])) {
    $logger->info('user is requesting access');
    $user = new \App\User($_POST['username'], 'xxxxx');
    $_SESSION['user'] = $user;
    $logger->info('user authenticated', [$user]);
} else {
    $logger->warning('no username specified, redirecting');
    header('Location: /');
    exit;
}

?>
    <html>
    <head>
        <title>PHP Logging Demo</title>
    </head>
    <body>
    <form>
        <h1>Hello, <?= $_SESSION['user']->getUsername() ?>!</h1>
        <a href="index.php">Get me out of here...</a>
    </form>
    </body>
    </html>
<?php
$time = microtime(true) - $execStartTime;
$logger->debug('processing completed in ' . $time . ' seconds');
?>