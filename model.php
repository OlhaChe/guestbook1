<?php

function writeMassege($array, $file){
    if(isset($array["message"]) && isset($array["name"]) && isset($array["email"])){
        file_put_contents($file, json_encode($array) . "\n", FILE_APPEND);

    }
}
function readMasssage($file){
        if(isset($file)){

            $read_json_file = file_get_contents($file);
            $read_for_line = explode("\n", $read_json_file);
            $count = count($read_for_line)-1;
            $all_posts =[];
        for ($i=$count-1; $i >= 0 ; $i--) {

            $posts = json_decode($read_for_line[$i], true);

            $all_posts[] = $posts;
        }
        return $all_posts;

    }
// return $all_posts;
}