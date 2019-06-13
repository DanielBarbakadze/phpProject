<?php require_once 'Automobiles/Sedan.php' ?>
<?php require_once 'Automobiles/SUV.php' ?>
<?php require_once 'Automobiles/Hatchback.php' ?>
<?php require_once 'Automobiles/Vehicle.php'?>
<?php require_once 'Automobiles/run.php'?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>

<body>
<?php if(isset($_SESSION['currentUser'])):?>
    <h2>Let's Race!</h2>

    <div class="table_div">
        <table>
            <tr>
                <th>Make</th>
                <th>Boost</th>
                <th>HP</th>
                <th>Turbo</th>
                <th>Weight</th>
            </tr>

            <tr class="even">
                <td><?php echo $vehicle1->getMake(); ?></td>
                <td><?php echo $vehicle1->getType(); ?></td>
                <td><?php echo $vehicle1->getHP(); ?></td>
                <td><?php echo $vehicle1->getTurbo(); ?></td>
                <td><?php echo $vehicle1->getWeight(); ?></td>
            </tr>

            <tr>
                <td><?php echo $vehicle2->getMake(); ?></td>
                <td><?php echo $vehicle2->getType(); ?></td>
                <td><?php echo $vehicle2->getHP(); ?></td>
                <td><?php echo $vehicle2->getTurbo(); ?></td>
                <td><?php echo $vehicle2->getWeight(); ?></td>
            </tr>

            <tr class="even">
                <td><?php echo $vehicle3->getMake(); ?></td>
                <td><?php echo $vehicle3->getType(); ?></td>
                <td><?php echo $vehicle3->getHP(); ?></td>
                <td><?php echo $vehicle3->getTurbo(); ?></td>
                <td><?php echo $vehicle3->getWeight(); ?></td>
            </tr>

            <tr>
                <td><?php echo $vehicle4->getMake(); ?></td>
                <td><?php echo $vehicle4->getType(); ?></td>
                <td><?php echo $vehicle4->getHP(); ?></td>
                <td><?php echo $vehicle4->getTurbo(); ?></td>
                <td><?php echo $vehicle4->getWeight(); ?></td>
            </tr>

            <tr class="even">
                <td><?php echo $vehicle5->getMake(); ?></td>
                <td><?php echo $vehicle5->getType(); ?></td>
                <td><?php echo $vehicle5->getHP(); ?></td>
                <td><?php echo $vehicle5->getTurbo(); ?></td>
                <td><?php echo $vehicle5->getWeight(); ?></td>
            </tr>

            <tr>
                <td><?php echo $vehicle6->getMake(); ?></td>
                <td><?php echo $vehicle6->getType(); ?></td>
                <td><?php echo $vehicle6->getHP(); ?></td>
                <td><?php echo $vehicle6->getTurbo(); ?></td>
                <td><?php echo $vehicle6->getWeight(); ?></td>
            </tr>

        </table>
    </div>

    <div class="form" >
        <form action="/result" method="post">
            <select name="1st"  class="button button2s">
                <option value="$vehicle1"><?php echo $vehicle1->getMake(); ?></option>
                <option value="$vehicle2"><?php echo $vehicle2->getMake(); ?></option>
                <option value="$vehicle3"><?php echo $vehicle3->getMake(); ?></option>
                <option value="$vehicle4"><?php echo $vehicle4->getMake(); ?></option>
                <option value="$vehicle5"><?php echo $vehicle5->getMake(); ?></option>
                <option value="$vehicle6"><?php echo $vehicle6->getMake(); ?></option>
            </select>

            <select name="2nd"  class="button button2s">
                <option value="$vehicle1"><?php echo $vehicle1->getMake(); ?></option>
                <option value="$vehicle2"><?php echo $vehicle2->getMake(); ?></option>
                <option value="$vehicle3"><?php echo $vehicle3->getMake(); ?></option>
                <option value="$vehicle4"><?php echo $vehicle4->getMake(); ?></option>
                <option value="$vehicle5"><?php echo $vehicle5->getMake(); ?></option>
                <option value="$vehicle6"><?php echo $vehicle6->getMake(); ?></option>
            </select>
            <input class="button button2" type="submit" value="RACE">
        </form>
    </div>
<?php else:?>
    <h1>Please Log in or Sign up to see the content</h1>
<?php endif; ?>
</body>
</html>

