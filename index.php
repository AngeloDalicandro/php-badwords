<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <?php
    $paragraph = '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur qui cum quam. Cupiditate neque dolor, iste blanditiis dolorem accusantium asperiores illum laboriosam nesciunt error odit saepe reiciendis fuga numquam officiis.
    Esse rerum accusantium provident laboriosam illum voluptatum nisi cum. Et dolores modi minus temporibus? Tenetur itaque enim perferendis debitis minima. Temporibus tempora velit eaque, magnam delectus reprehenderit. Animi, error sit.
    Repellendus, dicta incidunt ducimus iure voluptatibus alias rerum laboriosam facere id illo est. Consequuntur sit mollitia ratione tempora dolorem ipsum eveniet ullam corporis culpa! Et explicabo numquam quam nobis cumque!';

    $badword =  $_GET['badword'];

    $censored_paragraph = str_replace($badword, '***', $paragraph)
    ?>

    <h2>Paragrafo non censurato</h2>

    <p> <?php echo $paragraph ?> </p>

    <div> Lunghezza paragrafo non censurato: <?php echo strlen($paragraph) ?>. </div>

    <h2>Paragrafo censurato</h2>

    <p> <?php echo $censored_paragraph ?> </p>

    <div> Lunghezza paragrafo censurato: <?php echo strlen($censored_paragraph) ?>. </div>

</body>
</html>