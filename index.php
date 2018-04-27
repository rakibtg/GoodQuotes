<?php

  require_once './vendor/autoload.php';

  $quote = new \RandomQuotes\RandomQuotes();

  print_r( $quote->generate() );