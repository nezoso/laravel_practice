<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      f
  
    </head>
    <body class="">
            <?php 
                $product = [['name'=>'mehdi','age'=>30],['name'=>'nezoso','age'=>4]];
                foreach($product as $key=>$pro):
                    print_r($pro);
                endforeach;
            ?>
        <form method="post" action="/request">
            @csrf
                <input type="email" name="email" style='width:80%;border:1px solid green;'>
            <button type='submit'>submit</button>
        </form>
       
    </body>
</html>
