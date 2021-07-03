<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Fuzzy Search</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@6.4.6"></script>
    <script src="airtable.js"></script>
    <script>
    window.AIRTABLE_API_KEY = '<?php echo getenv('AIRTABLE_API_KEY') ?>'
    </script>
    
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">

    <div class="container">
        <form onsubmit="return search(this)">
            <input type="text" placeholder="fuzzy search...">
            <button>Search</button>
        </form>

        <div class="results">

        </div>
    </div>
    
</body>
</html>


