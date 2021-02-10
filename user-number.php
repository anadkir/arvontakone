<form name="user">
    <div class="user-number">
        <?php
            for($i = 1; $i < 31; $i++){
                if($i == 1){
                    echo "<div class=\"row\">";
                }
                echo "
                <div class=\"col\">
                <input type=\"checkbox\" class=\"btn-check\" id=\"btn-$i\" autocomplete=\"off\" name=\"numbers[]\" value=\"$i\">
                <label for=\"btn-$i\" class=\"btn btn-outline-primary btn-block\">$i</label>
                </div>
                ";
                if($i % 6 == 0){
                    echo "</div>";
                    if($i !== 30){
                        echo "<div class=\"row\">";
                    }
                }
            }

        ?>
    </div>
</form>