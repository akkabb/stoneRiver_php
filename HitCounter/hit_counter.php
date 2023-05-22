
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/hitcounter.css">
    <title>Simple Visit Counter</title>
</head>
<body>
    <main class="main_hitCounter">
        <div class="code_display">
            <pre>
                &lt?php 
                    $filename = 'counter.txt';
        
                    function inc_count(){
                        global $filename;

                        if (file_exists($filename)) {
                            $current_value = file_get_contents($filename);
                        }else{
                            $current_value = 0;
                        }

                        file_put_contents($filename, ++$current_value);
                    
                    }

                    inc_count();
                ?&gt 
            </pre>
        </div>
        <?php
        $filename = 'counter.txt';
        
        function inc_count(){
            global $filename;

            if (file_exists($filename)) {
                $current_value = file_get_contents($filename);
            }else{
                $current_value = 0;
            }

            file_put_contents($filename, ++$current_value);
        
        }

        inc_count();
        ?>
        <h2>The same without the if else</h2>
        <hr>
        <div class="code_display">
            <pre>
                &lt?php
                $filename = 'counter.txt';
    
                function inc_count() {
                    global $filename;
    
                    $current_value = (file_exists($filename)) ? file_get_contents($filename) : 0;
    
                    file_put_contents($filename, ++$current_value);
                }
    
                inc_count();
                ?&gt
            </pre>
        </div>
        <?php
            // $filename = 'counter.txt';

            // function inc_count() {
            //     global $filename;

            //     $current_value = (file_exists($filename)) ? file_get_contents($filename) : 0;

            //     file_put_contents($filename, ++$current_value);
            // }

            // inc_count();
        ?>
    </main>
</body>
</html>