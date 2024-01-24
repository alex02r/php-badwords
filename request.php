<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        // get value of paragraph 
        $p = $_GET['paragraph'];
        //get value of word
        $word = $_GET['word'];

        $new_p = str_replace($word, '***', $p);

        //how many words are censured
        $num_p = strlen($p) - 1 ;
        $num_new_p = strlen($new_p) - 1;
    ?>
    <header>
        <h1>Correct Text</h1>
    </header>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center row-gap-3">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="my_card">
                        <h3>Paragrafo iniziale</h3>
                        <p> <?php echo $p; ?> </p>
                        <h6> Lunghezza caratteri: <?php echo $num_p ;?> </h6>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="my_card">
                        <h3>Paragrafo censurato</h3>
                        <p> <?php echo $new_p; ?> </p>
                        <h6> Lunghezza caratteri: <?php echo $num_new_p ;?> </h6>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>