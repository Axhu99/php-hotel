<?php
/* TODO un data contenente tutto l'array e poi fare includ*/
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    /* fare un arrayfilter dove aggiungo tutti gli HOTEL con quella caratteristica */

    if(!empty($_GET)){

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body class='bg-dark'>
    <header>
        <div class='container d-flex justify-content-end align-items-center'>
            <!-- logo -->
            <form action="" method='get' class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name='parking'>
                <label class="form-check-label text-light">With PARKING</label>
                <button class='btn btn-light' type='submit'>Cerca</button>
            </form>
        </div>
    </header>
    <main>
    <div class="container">
        <table class="table table-dark table-striped">
<!-- Header della tabella  -->
        <thead>
            <tr>
                <th scope="col">Name Hotel</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
<!-- Aggiungo alla tabella ogni elemento dell'array con un ciclo foreach -->
        <?php foreach($hotels as $hotel): ?>
            <tr>        
                <?php foreach($hotel as $hotel): ?> 
                    
                    <td><?= $hotel ?></td>                                          
                
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
        </tbody>
        </table>
    </div>
    </main>
</body>
</html>