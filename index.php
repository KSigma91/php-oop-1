<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-1</title>
</head>
<body><?php
    include __DIR__ . '/list.php' ?>

    <div>
        <ul>
            <li style="list-style-type: none;">
                <?= "<h1>$film_1->title</h1>" . "<h2>$film_1->genre</h2>" . "<h3>vote: $film_1->vote</h3>" . $film_1->getVote() ?>         
            </li>
            <li style="list-style-type: none;">
                <?= "<h1>$film_2->title</h1>" . "<h2>$film_2->genre</h2>" . "<h3>vote: $film_2->vote</h3>" . $film_2->getVote() ?>         
            </li>
            <li style="list-style-type: none;">
                <?= "<h1>$film_3->title</h1>" . "<h2>$film_3->genre</h2>" . "<h3>vote: $film_3->vote</h3>" . $film_3->getVote() ?>         
            </li>
            <li style="list-style-type: none;">
                <?= "<h1>$film_4->title</h1>" . "<h2>$film_4->genre</h2>" . "<h3>vote: $film_4->vote</h3>" . $film_4->getVote() ?>        
            </li>
            <li style="list-style-type: none;">
                <?= "<h1>$film_5->title</h1>" . "<h2>$film_5->genre</h2>" . "<h3>vote: $film_5->vote</h3>" . $film_5->getVote() ?>         
            </li>
            <li style="list-style-type: none;">
                <?= "<h1>$film_6->title</h1>" . "<h2>$film_6->genre</h2>" . "<h3>vote: $film_6->vote</h3>" . $film_6->getVote() ?>        
            </li>
        </ul>
    </div>

</body> 
</html>