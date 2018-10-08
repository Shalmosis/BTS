<?php
/* ----------------- DROP TABLE -------------------- */
function drop_table($connexion, $table)
{
    mysqli_query($connexion, "drop table $table;");
}

function update_table($connexion, $table, $colonne, $valeur) 
{
    $query = "update $table set $colonne = '$valeur';";
    mysqli_query($connexion, $query);
}
function update_table($connexion, $table, $colonne, $valeur, $condition)
{
    $query = "update $table set $colonne = '$valeur' where $condition;";
    mysqli_query($connexion, $query);
}
function alter_add_column($connexion, $table, $colonne, $type)
{
    $query = "alter table $table add $colonne $type;";
    mysqli_query($connexion, $query);   
}
function alter_drop_column($connexion, $table, $colonne)
{
    $query = "alter table $table drop column $colonne;";
    mysqli_query($connexion, $query);   
}
function alter_alter_column($connexion, $table, $colonne, $type)
{
    $query = "alter table $table modify $colonne $type;";
    mysqli_query($connexion, $query);   
}
function alter_alter_column($connexion, $table, $old_colonne, $new_colonne, $type)
{
    $query = "alter table $table change $old_colonne $new_colonne $type;";
    mysqli_query($connexion, $query);   
}
/* ----------- OBSOLETES (A REVOIR OU A TESTER EN PROFONDEUR) --------- */
function insert_into($connexion, $table, $champs, $valeurs) {
    $query = "insert into $table ($champs) values ($valeurs);";
    mysqli_query($connexion, $query);
}

?>
