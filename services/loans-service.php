<?php

function getLoans(string $lang = 'ar')
{
    $file_name = __DIR__ . '/../data/loans-' . $lang . '.json';
    if (!file_exists($file_name)) {
        die("Unable to find language!");
    }
    $json = file_get_contents($file_name);
    return json_decode($json, true);
}

function saveLoans(array $data, string $lang = 'ar')
{
    $file_name = __DIR__ . '/../data/loans-' . $lang . '.json';
    file_put_contents($file_name, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function addLoan(array $loanItem, string $lang = 'ar')
{
    $data = getLoans($lang);
    if (!isset($data['loans'])) {
        $data['loans'] = [];
    }
    // Generate a unique id if not set
    if (!isset($loanItem['id']) || !$loanItem['id']) {
        $loanItem['id'] = 'Loan' . time();
    }
    array_unshift($data['loans'], $loanItem); // Add to start
    saveLoans($data, $lang);
    return $loanItem['id'];
}

function updateLoan(string $id, array $updatedFields, string $lang = 'ar')
{
    $data = getLoans($lang);
    if (!isset($data['loans'])) return false;
    foreach ($data['loans'] as &$item) {
        if ($item['id'] === $id) {
            $item = array_merge($item, $updatedFields);
            saveLoans($data, $lang);
            return true;
        }
    }
    return false;
}

function deleteLoan(string $id, string $lang = 'ar')
{
    $data = getLoans($lang);
    if (!isset($data['loans'])) return false;
    $found = false;
    $data['loans'] = array_filter($data['loans'], function ($item) use ($id, &$found) {
        if ($item['id'] === $id) {
            $found = true;
            return false;
        }
        return true;
    });
    if ($found) {
        saveLoans($data, $lang);
    }
    return $found;
}

function getLoanById(string $id, string $lang = 'ar')
{
    $data = getLoans($lang);
    if (!isset($data['loans'])) return null;
    foreach ($data['loans'] as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
} 