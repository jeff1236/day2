<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      return
      "Hi there!"
      ;
    });

    $app->get("/example", function() {
      return
      "This was an example of how the links work."
      ;
    });

    $app->get("/goodbye", function() {
      return
      "<!DOCTYPE html>
      <html>
      <head>
        <title>GOODBYE</title>
      </head>
      <body>
        <h1>GOODBYE, FRIEND!</h1>
      </body>
      </html>"
      ;
    });

    $app->get("/dearfriend", function() {
      return
      "<!DOCTYPE html>
      <html>
      <head>
        <title>Letter to a Pal</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
      </head>
      <body>
        <div class='container'>
          <h1>Hello From Lands Beyond!</h1>
          <p>Dearest friend:</p>
          <p>How are you?  I hope that you're having a nice weekend.  I'm vacationing in the mountains of Tibet, kickin it with programming monks! </p>
          <p>Friend, you would not believe how horribly frigid it is here.  I should have gone to Hawaii instead.</p>
          <p>But I like the programming a lot, you know, so that's going well for me.</p>
          <pLooking forward to seeing you soon.  I'll bring back a souvenir.</p>
          <p>Cheers,</p>
          <p>Dillon and Jeff</p>
          <a href='/goodbye'>Click here for a special GOODBYE page</a>
        </div>
      </body>
      </html>"
      ;
    });

    return $app;
?>
