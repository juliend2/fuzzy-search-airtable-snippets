<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuzzyAir</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@6.4.6"></script>
    <script src="airtable.js"></script>
    <script>
    window.AIRTABLE_API_KEY = '<?php getenv('AIRTABLE_API_KEY') ?>'
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

