<?php 
    $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil odio dolores ratione vitae, voluptatem assumenda. Blanditiis, id vel. Earum minima qui accusantium architecto. Adipisci explicabo repudiandae distinctio, nam nihil laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus quis adipisci voluptatibus maxime ratione neque alias nostrum commodi ducimus, illum quae debitis ut ea doloremque molestias suscipit iusto praesentium! <br>';

    $word = $_GET['word'];

    $message = 'La lunghezza della stringa è: ';


    echo str_replace($word, '***', $paragraph);
    echo $message . strlen($paragraph);

/* 
    !!!!!!!!!!!!!!Così mi da errore,perché ??????

    $word = $_GET['word'];

    echo str_replace($word, '***', $paragraph); */


?>
