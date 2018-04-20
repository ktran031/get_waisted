<?php
$message = '';

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $csv = dirname(dirname(__FILE__)) . '/csv/emails.csv';

    if (is_file($csv)) {
        $rows = array_map('str_getcsv', file($csv));
        $rows[] = array($name, $email);
        $handle = fopen($csv, 'w');
        foreach ($rows as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
        $message = 'Thank you for subscribing!';
    } else {
        $message = 'There was an error with your submission';
    }
}