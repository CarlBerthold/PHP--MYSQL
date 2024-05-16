<?php

$visitors = [
    [
        'name' => 'Niclas',
        'age' => '21',
        'city' => 'Berlin',
        'organizer' => true,
    ],
    [
        'name' => 'Jonas',
        'age' => '21',
        'city' => 'Cologne',

    ],
    [
        'name' => 'Vasil',
        'age' => '32',
        'city' => 'Munich',
    ],
    [
        'name' => 'Oli',
        'age' => '42',
        'city' => 'Geislingen',
    ],
];

# Ergänzen der fehlenden Keys 'organizer' in den inneren Arrays

$organizer = [
    'organizer' => 'n/a',
];

$visitors[1] = $visitors[1] + $organizer;
$visitors[2] = $visitors[2] + $organizer;
$visitors[3] = $visitors[3] + $organizer;

/* var_dump($visitors);
exit; */


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistor Table</title>
</head>
<body>
    <h1>Visitors</h1>
    <table>
        <!-- for each column title -->
        <?php foreach ($visitors[0] as $key => $value) { ?>
            <th><?php echo $key ?></th>
        <?php } ?>

    <!--     <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Organizer</th>
        </tr> -->

          <!-- for schleife -->
          <?php for ($i = 0; $i < count($visitors); $i++) { ?>
            <tr>
                <td><?php echo 'for' . $visitors[$i]['name'] ?></td>
                <td><?php echo 'for' . $visitors[$i]['age'] ?></td>
                <td><?php echo 'for' . $visitors[$i]['city'] ?></td>
                <td><?php echo 'for' . $visitors[$i]['organizer'] ?></td>
            </tr>
        <?php } ?>

        <!-- foreach -->
        <?php foreach ($visitors as $visitor => $value) { ?>
            <tr>
                <td><?php echo 'foreach' . $value['name'] ?></td>
                <td><?php echo 'foreach' . $value['age'] ?></td>
                <td><?php echo 'foreach' . $value['city'] ?></td>
                <td><?php echo 'foreach' . $value['organizer'] ?></td>
            </tr>
        <?php } ?>

        <!-- nested foreach -->
        <?php foreach ($visitors as $visitor => $data) : ?>
            <tr>
                <?php foreach ($data as $key => $value) : ?>
                    <td>
                        <?php echo 'nested foreach' .  $value ?>
                    </td>
                    <?php 
                        if(!isset($visitors['organizer'])): 
                            echo 'n/a';
                        endif?>
                <?php endforeach ?>    
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>