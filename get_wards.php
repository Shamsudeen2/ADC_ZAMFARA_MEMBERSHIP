<?php
header('Content-Type: application/json; charset=utf-8');
$lga = $_GET['lga'] ?? '';
$ward = $_GET['ward'] ?? '';
$dataFile = __DIR__ . '/assets/zamfara_north.json';
if (!file_exists($dataFile)) {
    echo json_encode(['error' => 'data file missing']);
    exit;
}
$data = json_decode(file_get_contents($dataFile), true);
if (!$lga) {
    $lgas = array_map(function ($l) {
        return $l['lga'];
    }, $data['lgas']);
    echo json_encode(['lgas' => $lgas]);
    exit;
}
$found = null;
foreach ($data['lgas'] as $l) {
    if (strtolower($l['lga']) === strtolower($lga)) {
        $found = $l;
        break;
    }
}
if (!$found) {
    echo json_encode(['error' => 'LGA not found']);
    exit;
}
if (!$ward) {
    $wards = array_map(function ($w) {
        return $w['ward'];
    }, $found['wards']);
    echo json_encode(['wards' => $wards]);
    exit;
}
$foundWard = null;
foreach ($found['wards'] as $w) {
    if (strtolower($w['ward']) === strtolower($ward)) {
        $foundWard = $w;
        break;
    }
}
if (!$foundWard) {
    echo json_encode(['error' => 'Ward not found']);
    exit;
}
echo json_encode(['polling_units' => $foundWard['polling_units']]);
exit;
