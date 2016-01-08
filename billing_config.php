<?php
define('ID', 'test');

foreach (json_decode(file_get_contents('/test/secret/kkbox-billing-config/billing.json'), true) as $key => $value) {
}
