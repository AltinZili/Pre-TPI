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

function getAdaptedThemes($validation)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT * FROM administrators.themes where validation=:validation';
        $statment = $dbh->prepare($query);
        $statment->execute(['validation' => $validation]);
        $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getGameTypeIdByName($gameName)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT id FROM administrators.games WHERE games.name=:name';
        $statment = $dbh->prepare($query);
        $statment->execute(['name' => $gameName]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getThemeIdByName($themeName)
{
    try {
        $dbh = getPDO();
        $query = 'SELECT id FROM administrators.themes WHERE themes.name=:name';
        $statment = $dbh->prepare($query);
        $statment->execute(['name' => $themeName]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function addGamesIncludeThemes($themeid, $gametypeid){
    try {
    $dbh = getPDO();
    $query = 'INSERT INTO games_include_themes(themes_id, games_id) VALUES(:themeid, :gameid)';
    $statment = $dbh->prepare($query);
    $statment->execute(['themeid' => $themeid['id'], 'gameid' => $gametypeid['id']]);
    $id = $dbh->lastInsertId();;
    $dbh = null;
    return $id;
    } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    return null;
    }
}

function updateThemesValidation($themeid){
    try {
        $dbh = getPDO();
        $query = 'UPDATE themes set validation = true where id=:id';
        $statment = $dbh->prepare($query);
        $statment->execute(['id' => $themeid['id']]);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getByIdsGamesIncludeThemes($gametypeid, $themeid){
    try {
        $dbh = getPDO();
        $query = 'SELECT id FROM administrators.games_include_themes WHERE games_include_themes.themes_id=:themeid games_include_themes.games_id=:gameid';
        $statment = $dbh->prepare($query);
        $statment->execute(['themeid' => $themeid['id'], 'gametypeid' => $gametypeid['id']]);
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function addWord($wordtoadd, $gamethemeid){
    try {
        $dbh = getPDO();
        $query = 'INSERT INTO words(vocabulary, games_include_themes_id) VALUES(:word, :gameincludethemeid)';
        $statment = $dbh->prepare($query);
        $statment->execute(['word' => $wordtoadd, 'gameincludethemeid' => $gamethemeid]);
        $id = $dbh->lastInsertId();;
        $dbh = null;
        return $id;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function addWordAnswer($answer, $right, $idgameword)
{
    try {
        $dbh = getPDO();
        $query = 'INSERT INTO answers(expression, `right`, words_id) VALUES(:answer, :right, :idgameword)';
        $statment = $dbh->prepare($query);
        $statment->execute(['answer' => $answer, 'right' => $right, 'idgameword' => $idgameword]);
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}




/*function addThemeToAGame($themePost){
   try {
       $dbh = getPDO();
       $query = 'INSERT INTO games_include_themes(themes_id) VALUES(:';
       $statment = $dbh->prepare($query);
       $statment->execute(['pseudonym' => $pseudo]);
       $dbh = null;
   } catch (PDOException $e) {
       print "Error!: " . $e->getMessage() . "<br/>";
       return null;
   }
}*/

?>
