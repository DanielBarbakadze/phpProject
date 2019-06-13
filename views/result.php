<?php
require_once '../views/Automobiles/Sedan.php';
require_once '../views/Automobiles/SUV.php';
require_once '../views/Automobiles/Hatchback.php';
require_once '../views/Automobiles/Vehicle.php';
require_once '../views/Automobiles/run.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="./result.css">
</head>
<body>
<h2>Let's Race!</h2>
<?php
$v1 = substr($_POST['1st'],'1');
$v2 = substr($_POST['2nd'],'1');

    if ($$v1->getRank() == $$v2->getRank())
    {
        $winner = 'ფრე';
        $looser = 'ფრე';
        $winnerRank = $$v1->getRank();
        $looserRank = $$v2->getRank();
    }
    else if ($$v1->getRank() > $$v2->getRank())
    {
        $winner = $$v1->getMake();
        $winnerRank = $$v1->getRank();
        $looser = $$v2->getMake();
        $looserRank = $$v2->getRank();
    }
    else
    {
        $winner = $$v2->getMake();
        $winnerRank = $$v2->getRank();
        $looser = $$v1->getMake();
        $looserRank = $$v1->getRank();
    };
    ?>
<div class="table_div">
    <table>
        <tr>
            <th>Winner</th>
            <th>Looser</th>
        </tr>

        <tr class="even">
            <td><?php echo $winner. ' (Rank = ' . $winnerRank . ')';?></td>
            <td><?php echo $looser. ' (Rank = ' . $looserRank . ')';?></td>
        </tr>
    </table>
    <h4>Winner Winner Chicken Dinner!</h4>
</div>

<div class="form">
    <form action="/">
        <input class="button button2" type="submit" value="RACE AGAIN">
    </form>
</div>
</body>
</html>