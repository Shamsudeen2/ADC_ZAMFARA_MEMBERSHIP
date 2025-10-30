<?php
require_once './../config/config.php';

$lga = $_GET['lga'] ?? '';
if ($lga) {
  $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM adc_members WHERE lga = ?");
  $stmt->bind_param("s", $lga);
} else {
  $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM adc_members");
}
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
echo json_encode(['total' => $result['total']]);
