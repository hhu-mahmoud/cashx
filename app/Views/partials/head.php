<!DOCTYPE html>

<html lang="<?= service('request')->getLocale(); ?>" dir="<?= service('request')->getLocale() === 'ar' ? 'rtl' : 'ltr'; ?>">
<!-- HEAD: HEAD CONTENT, META AND LINKS -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="CashX website">
    <meta name="author" content="Mahmoud Fakhoury">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><span><?=lang('App.appName')?></span></title>

    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/');?><?=service('request')->getLocale() === 'ar' ? 'style.rtl.css' : 'style.css'; ?>">
</head>
<!-- BODY: BODY CONTENT -->
<body id="body">
