<?php
session_start();
if (!isset($_SESSION['diamond_jackpot'])) {
    $_SESSION["diamond_jackpot"] = 0;
}
$json = file_get_contents('php://input');
$data = json_decode($json, true);
if (
    isset($data["puter"]) &&
    is_array($data["puter"]) &&
    count($data["puter"]) === 3 &&
    $data["puter"][0] == 100 &&
    $data["puter"][1] == 100 &&
    $data["puter"][2] == 100
) {
    $_SESSION["diamond_jackpot"] += 1;
    $response = [
        'status' => 'success',
        'message' => 'Spin data received',
        'data' => $_SESSION["diamond_jackpot"]
    ];
    if ($_SESSION["diamond_jackpot"] >= 20) {
        $response['flag'] = getenv('FLAG');
    }
} else {
    $response = [
        'status' => 'failed',
        'message' => 'Invalid spin data',
        'data' => $_SESSION["diamond_jackpot"]
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
