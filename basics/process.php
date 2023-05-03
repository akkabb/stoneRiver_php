<?php

if (isset($_POST['agree']) && $_POST['agree'] == 'true')
{
    echo '<h3>' . ' Set and correct value' . '</h3>';
} else{
    echo 'You must agree to the Terms & Conditions';
}

?>

<div class="code_display">
    <pre>
        &lt?php
        if (isset($_POST['agree']) && $_POST['agree'] == 'true')
        {
            echo '&lth3&gt' . ' Set and correct value' . '&lt/h3&gt';
        } else{
            echo 'You must agree to the Terms & Conditions';
        }
        ?&gt
    </pre>
</div>