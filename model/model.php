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
        $statment->execute(['pseudonym' => $pseudo]);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getUserByUsername($username)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM administrators.administrators WHERE administrators.username=:username';
        $statment = $dbh->prepare($query);
        $statment->execute(['username' => $username]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function addChoosenTheme($theme)
{
    try {
        $dbh = getPDO();
        $query = 'INSERT INTO themes(name) VALUES(:name)';
        $statment = $dbh->prepare($query);
        $statment->execute(['name' => $theme]);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getThemeByName($theme)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT name FROM administrators.themes WHERE themes.name=:name';
        $statment = $dbh->prepare($query);
        $statment->execute(['name' => $theme]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getThemes()
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM administrators.themes';
        $statment = $dbh->prepare($query);
        $statment->execute();
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

?>
