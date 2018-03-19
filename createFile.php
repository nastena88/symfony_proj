<?php 
   require_once __DIR__ . '/vendor/autoload.php'; 
   use Symfony\Component\Filesystem\Filesystem; 
   use Symfony\Component\Filesystem\Exception\IOExceptionInterface; 
   
   $fs = new Filesystem(); 
   try { 
      $fs->mkdir('./sample-dir'); 
      $fs->touch('./sample-dir/text.txt'); 
   } catch (IOExceptionInterface $e) { 
      echo $e; 
   } 
?>  