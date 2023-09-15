<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <form class="row g-3" action="action.php" method="post">

     
        <div class="col-12">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>

        <div class="col-12">
            <label class="form-label">Herbivore</label>
            <input type="radio"  name="type" value="herbivore">
        </div>

        <div class="col-12">
            <label class="form-label">Carnivore</label>
            <input type="radio" name="type" value="carnivore">
        </div>

        <div class="col-12">
            <label class="form-label">race</label>
            <input type="text" class="form-control" name="race"  id="inputPassword4">
        </div>

 
        </div>

        <div class="col-12">
            <button name="submit" type="submit" class="btn btn-primary" value="submit">Sign in</button>
        </div>
    </form>

</body>

</html>