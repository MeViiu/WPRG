<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    
    <form action="zad1.php" method="POST">
        <label>Zapisy na studia</label></br>
        *Imię:<input type="text" name="imie" required></input></br>
        *Nazwisko:<input type="text" name="nazwisko" required></input></br>
        *Telefon:<input type="tel" name="tel" pattern="[0-9]{9}" placeholder="XXX-XXX-XXX" required></input></br>
        *Email:<input type="email" required></input></br>
        Kierunek studiów:<select>
            <option>Informatyka</option>
            <option>Grafika</option>
            <option>Psychologia</option>
            <option>Lingwistyka</option>
                </select></br>
        Preferowany kontakt:<input type="checkbox">Telefon</input>
        <input type="checkbox">Email</input></br>
        Niepełnosprawność:
        <input type="radio" id="nie" name="sprawnosc" value="Nie" checked>Nie</input>
        <input type="radio" id="nie" name="sprawnosc" value="Tak">Tak</input><br>
            Dodatkowe informacje:
                <textarea></textarea></br>
        <input type="submit" value="Wyślij"></input>


    </form>    

</body>
</html>