<?php
// Ambil IP langsung dari user
$ip = $_SERVER['REMOTE_ADDR'] ?? null;

// Kalau gagal (misal di Cloudflare / proxy), fallback ke api.ipify
if (!$ip || $ip === '::1') {
    $get = @file_get_contents("https://api.ipify.org/?format=json");
    if ($get) {
        $json = json_decode($get, true);
        if (isset($json['ip'])) {
            $ip = $json['ip'];
        }
    }
}

// Jika tetap gagal, matikan script
if (!$ip) {
    die("Unable to detect IP");
}

// Redirect ke ipwho.is/{IP}
header("Location: http://ipwho.is/" . $ip);
exit;
?>