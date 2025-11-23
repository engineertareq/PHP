<?php
function factorial_iterative(int $n) {
    if ($n < 0) return null;
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function factorial_recursive(int $n) {
    if ($n < 0) return null;
    if ($n === 0 || $n === 1) return 1;
    return $n * factorial_recursive($n - 1);
}

$maxAllowed = 20; 

if (php_sapi_name() === 'cli') {
    global $argv;
    if (isset($argv[1])) {
        $n = filter_var($argv[1], FILTER_VALIDATE_INT, ["options"=>["min_range"=>0]]);
        if ($n === false) {
            fwrite(STDERR, "Please provide a non-negative integer.\n");
            exit(1);
        }
        if ($n > $maxAllowed) {
            fwrite(STDERR, "Limit: $maxAllowed to avoid huge numbers.\n");
            exit(1);
        }
        echo "Iterative: {$n}! = " . factorial_iterative($n) . "\n";
        echo "Recursive: {$n}! = " . factorial_recursive($n) . "\n";
        exit(0);
    }
    echo "Usage: php " . basename(__FILE__) . " <non-negative integer>\n";
    exit(1);
}

// Web UI
$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nRaw = $_POST['number'] ?? '';
    $n = filter_var($nRaw, FILTER_VALIDATE_INT, ["options"=>["min_range"=>0]]);
    if ($n === false) {
        $error = 'Please enter a non-negative integer.';
    } elseif ($n > $maxAllowed) {
        $error = "Please enter a number <= {$maxAllowed}.";
    } else {
        $iter = factorial_iterative($n);
        $rec = factorial_recursive($n);
    }
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Factorial Demo</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;margin:20px}label{display:inline-block;width:80px}</style>
</head>
<body>
    <h1>Factorial Demo</h1>
    <form method="post">
        <label for="number">Number</label>
        <input id="number" name="number" type="number" min="0" max="<?php echo $maxAllowed;?>" value="<?php echo isset($nRaw)?htmlspecialchars($nRaw):''; ?>">
        <button type="submit">Compute</button>
    </form>

    <?php if (!empty($error)): ?>
        <p style="color:red"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif (isset($iter)): ?>
        <p><strong>Iterative:</strong> <?php echo $n; ?>! = <?php echo $iter; ?></p>
    <?php endif; ?>

    <hr>
    
</body>
</html>
