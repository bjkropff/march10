<?php
            require_once __DIR__."/../vendor/autoload.php";
            require_once __DIR__."/../src/Anagram.php";

            $app = new Silex\Application();

            $app->register(new Silex\Provider\TwigServiceProvider(),
                'twig.path' => __DIR__.'/../views'

            ));

            //establish our route
            $app->get("/", function() use ($app){

                return $app['twig']->render('form.twig');
            });

            



?>
