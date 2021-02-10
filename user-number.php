<form name="user" method="post" action="index.php">
    <div class="user-number">
        <?php
            for($i = 1; $i < 31; $i++){
                if($i == 1){
                    echo "<div class=\"row\">";
                }
                echo "
                <div class=\"col\">
                <input type=\"checkbox\" class=\"btn-check\" id=\"btn-$i\" autocomplete=\"off\" name=\"numbers[]\" value=\"$i\">
                <label for=\"btn-$i\" class=\"btn btn-outline-primary btn-block btn-lg\">$i</label>
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
    <div class="row">
        <div class="col">
            <input type="reset" class="btn btn-warning btn-block" value="Poista valinnat">
        </div>
        <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Lähetä">
        </div>
    </div>
</form>