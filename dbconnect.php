<?php $link = mysqli_connect("127.0.0.1", "root", "", "vvg");

if (!$link) {
    echo "Greška nije uspjelo spajanje na bazu." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Spajanje je uspjelo" . PHP_EOL;
echo "Osnovne informacije" . mysqli_get_host_info($link) . PHP_EOL;

mysqli_select_db($link, "vvg");


/*if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}
*/

//mysqli_close($link);

///OVO zatvaranje upitno !!!
?>