<?php
define('ID', 'test');

$secret_file = '/test/secret/kkbox-billing-config/billing.json';
if (is_file($secret_file)) {
    foreach (json_decode(file_get_contents('/test/secret/kkbox-billing-config/billing.json'), true) as $key => $value) {
    }
}
