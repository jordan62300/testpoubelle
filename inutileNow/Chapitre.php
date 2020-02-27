<?php




// connect to the database
 function getPDO() {
    
    $db = new PDO('mysql:dbname=ProjetBeam;host=localhost;', 'root', '');
    $sql = $db->query('SELECT imgnom from mangas  ORDER BY id ASC  ');
    $req = $sql->fetchAll(PDO::FETCH_OBJ);
    return $req;
 }
/*
 SELECT
LAG(p.FirstName) OVER (ORDER BY p.BusinessEntityID) PreviousValue,
p.FirstName,
LEAD(p.FirstName) OVER (ORDER BY p.BusinessEntityID) NextValue
FROM Person.Person p
GO
*/