<!DOCTYPE html>
<html>
    <head>
        <title>Simple hash</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post">
            <label for="string">String to hash: </label>
            <input id="string" name="string" type="text" />
            <input type="submit" />
        </form>

        <?php
        $raw_string = filter_input(INPUT_POST, 'string');
        if ($raw_string) :
            $hash = password_hash($raw_string, PASSWORD_BCRYPT);
        ?>
            <p>The hash is: <?php echo $hash ?></p>
        <?php endif; ?>

        <a href="https://github.com/rrooij/simple_hash_php/">Source</a>
    </body>
</html>
