<?php
    require'header.php';

    $string = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';

    function sortWords(String $string){

        $words = explode(' ', $string);
        $numWords = count($words);
        $englishWords = [];
        $chineseWords = [];

        for($i=0; $i<$numWords; $i++){
            if(ctype_alnum($words[$i])){
                if(!in_array($words[$i], $englishWords, true)) {
                    array_push($englishWords, $words[$i]);
                }
            }else{
                array_push($chineseWords, $words[$i]);
            }
        }
        return implode(' ', $englishWords) . ' ' . implode(' ', array_reverse($chineseWords));
    }


?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?=$string;?></h2>
                <h3>Formatted string:</h3>
                <p><?=sortWords($string);?></p>


            </div>
        </div>
    </div>

</section>
