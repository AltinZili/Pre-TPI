<?php

function getPDO()
{
    require ".constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function addUserByPseudo($pseudo)
{
    try {
        $dbh = getPDO();
        $query = 'INSERT INTO players(pseudonym) VALUES(:pseudonym)';
        $statment = $dbh->prepare($query);
        $statment->execute(["pseudonym" => $pseudo]);
        var_dump($statment);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}