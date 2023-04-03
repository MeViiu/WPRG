<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    
    <form action="rozwiązanie.php" method="POST">
        liczba 1 oraz liczba 2</br>
        <input type="text" name="liczba1" required></input>
        <input type="text" name="liczba2" required></input></br>
        
        <input type="radio" id="plus" name="kalkulator" value="+" checked>+</input>
        <input type="radio" id="minus" name="kalkulator" value="-">-</input>
        <input type="radio" id="mnoz" name="kalkulator" value="*">*</input>
        <input type="radio" id="dziel" name="kalkulator" value="/">/</input><br>
        <input type="submit" value="Oblicz"></input>
    </form>

</body>
</html>