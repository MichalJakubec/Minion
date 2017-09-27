<html>
    <head>
        <meta charset="UTF-8">
        <title>Minion</title>
        <style>
            body {
                background-color: #FFFF00;
                color: #0000FF;
                font-style: italic;
                font-size: 300%;
        }
        </style>
        
    </head>
    <body>
        <?php
        function minion(){
            $meal = "bananas";
            $quantity = 12;
            echo 'Minion eats'." "."$quantity"." "."$meal"." "."per hour.";
            }
        minion();
        ?>
    </body>
</html>