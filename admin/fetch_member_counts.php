<?php
require_once '../config/config.php';
header('Content-Type: application/json');

$query = "SELECT lga, COUNT(*) as total FROM adc_members GROUP BY lga ORDER BY lga ASC";
$result = $conn->query($query);

$data = [];
if ($result) {
  while ($row = $result->fetch_assoc()) {
    $data[] = [
      'lga' => $row['lga'],
      'total' => (int)$row['total']
    ];
  }
}

echo json_encode($data);
