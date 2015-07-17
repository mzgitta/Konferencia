<?php
session_start(); //felhasználó kezeléshez kell,itt az legelején!!!

if (isset($_POST['nev'])) {
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Konferencia regisztráció</title>

        

</head>
<body>
    <h1>Konferencia regisztráció</h1>

    <form action="index.php" method="post" enctype="multipart/form-data" autocomplete="on"> <!-- amíg ellenőrzöm az oldalt ,addig get-re állítom a methodot -->
        <fieldset>
            <legend>Személyes adatok:</legend>
            <label>Név:</label>
            <input type="text" name="nev" placeholder="Az Ön neve"> 
            <br>
            <label>Neme:</label>
            <input type="radio" name="neme" value="ferfi" checked>Férfi
            <input type="radio" name="neme" value="no">Nő
            <br>

            <br>
            <label>Város</label>
            <select name="varos">
                <?php
// Adatbázis kérés
// ...
//                        while ($row = $result->fetch_assoc) {
//                            echo '<option value="'.$row['id'].'">'.$row['varosnev'].'</option>';
//                        }
                ?>
                <option value="valasszon">Válasszon!</option>
                <option value="dombovar">Dombóvár</option>
                <option value="kaposvar">Kaposvár</option>
                <option value="pecs">Pécs</option>
                <option value="szigetvar">Szigetvár</option>
                <option value="egyeb">egyéb</option>
            </select>
            <br>

            <br>
            <label>Születési idő</label>
            <input type="date" name="szuletes">
            <br>

            <br>
            <label>Profilkép:</label>
            <input type="file" name="prifilkep">
            <br>
            <br>
            <label> E-mail:</label>
            <input type="email" name="email" autocomplete="off" placeholder="Az ön email címe"><br>
        </fieldset>

        <fieldset>
            <legend>Regisztráció adatai</legend>
            <label>Megjegyzés:</label>
            <br>
            <textarea name="megjegyzes" rows="6" cols="70"></textarea>

            <br>
            <label>Étkezés:</label>
            <br>
            <input type="checkbox" name="reggeli" >Reggeli
            <br>
            <input type="checkbox" name="ebed" >Ebéd
            <br>
            <input type="checkbox" name="vacsora" >Vacsora
            <br>
        </fieldset>
        <br>
        <input type="submit" value="Regisztráció">
    </form>

</body>
</html>
