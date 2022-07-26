<?php

   declare(strict_types=1);

   namespace classes;

   class randomization {

      public function randomize() {

        $participants [] = $_POST['participants'];
       
        $participantsString = implode('|', $participants);
        $participantsString = preg_replace("/\r|\n/", '|', $participantsString);
        $participantsString = str_replace('||', '|', $participantsString);
        $participantsString = trim($participantsString, '|');
        $participantsArray = explode('|', $participantsString);
        shuffle($participantsArray);

        $groupSize = (int) $_POST['group_size'];
        $participantsArray = array_chunk($participantsArray, $groupSize);

            ob_start();
        
        foreach ($participantsArray as $key => $value) {
                echo 'Grupa ' . (int) ($key + 1) . ':' . '<br/>' . implode('<br/>', $value) . '<br/>' . '<br/>';
            }
            
            $final = ob_get_contents();
            ob_end_clean();

             return $final;
      }
   }
