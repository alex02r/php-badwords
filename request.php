<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // get value of paragraph 
        $p = $_GET['paragraph'];
        //get value of word
        $word = $_GET['word'];

        $new_p = explode($word, $p);
    ?>
    <header>
        <h1>Correct Text</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Paragrafo iniziale</h3>
                    <p> <?php echo $p; ?> </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>