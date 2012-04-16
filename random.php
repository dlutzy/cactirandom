<head>
<title>random graphs
</title>
<meta http-equiv="refresh" content="61;url=random.php">
<style>
img{float:left; margin:0}
</style>

</head>
<body>
<?php
include("./include/global.php");

$timeperiod = rand(0,5);

for ($i=0;$i<=5;$i++) {
$rand_graph_id = db_fetch_cell("select id from graph_local order by RAND() limit 1;");

print "<a href=graph.php?action=view&local_graph_id=$rand_graph_id&rra_id=all>";
print "<img src=graph_image.php?local_graph_id=$rand_graph_id&rra_id=$timeperiod>";
print "</a>";
}

?>

</body>
</html>
