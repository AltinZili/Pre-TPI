<?php

function getPDO()
{
    require ".constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function getUserByPseudo($pseudo)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT pseudonym FROM administrators.players where players.pseudonym=:pseudo';
        $statment = $dbh->prepare($query);
        $statment->execute(['pseudo' => $pseudo]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function addUserByPseudo($pseudo)
{
    try {
        $dbh = getPDO();
        $query = 'INSERT INTO players(pseudonym) VALUES(:pseudonym)';
        $statment = $dbh->prepare($query);
        $statment->execute(["pseudonym" => $pseudo]);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}