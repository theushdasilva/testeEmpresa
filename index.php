<?php

    echo "
        <form method='post' action='validDate.php'>
            <label for=''>
                Valor: <input type=text name='valor_far' required placeholder/>
            </label>
            <br/>
            <label for=''>
                Data: <input type=date name='date' required placeholder/>
            </label> 
            <br/>
            <input type='submit'/>
        </form>
    ";
?>