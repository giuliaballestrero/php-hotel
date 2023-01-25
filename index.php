<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| Php Hotel ||</title>

    <!--importing Bootstrap v5.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?php

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

        //var_dump($hotels);
    ?>

    <header>
        <section class="container">
            <h1 class="pt-5">Filtro di ricerca</h1>
            <form class="py-3" action="./index.php" method="GET">
                <label for="parkingFilter" class="form-label">Search Hotels...</label>
                <input class="m-3" type="text" class="form-control" name="parkingFilter">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <hr>

            <?php 
                
            ?>


        </section>
    </header>

    <main>
        
    <section class="container">

        <h1 class="py-4">Array chiave => valore</h1>
        <?php 
        
            foreach($hotels as $hotel) {
                foreach($hotel as $key => $value) {
                    echo "$key => $value . ","";
            }
                echo "<br/>";
            }
        
        ?>

        <hr>

        <h2 class="py-5">List of Hotels</h2>

        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    
                    foreach($hotels as $hotel) {

                        echo "
                            <tr>
                            <th scope='row'></th>
                        ";

                        foreach($hotel as $key => $value) {
                            echo "
                                <td>$value</td>
                            ";
                        }

                        echo "</tr>";
                    }
                
                ?>

            </tbody>
        </table>
    </section>
        

    </main>
   
    <!--Importing Bootsrap JS--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>