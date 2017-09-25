<?php
    $dsn = "mysql:host=db.cecs.pdx.edu;dbname=rlop2";
    $username = "rlop2";
    $password = "ql123";
    
    $pdo = new PDO($dsn, $username, $password);
    
    $rows = array();
    //$stmt = $pdo->prepare("SELECT time from heart_rate1");
	$stmt = $pdo->prepare("SELECT from_unixtime(create_ts/1000) as create_ts from activity order by create_ts");
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(array('Result' =>$rows));
?>