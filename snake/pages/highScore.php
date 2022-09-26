<?php { ?>
<div id="table">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Player Name</th>
            <th>Player Tag</th>
            <th>Score</th>
        </tr>
<?php foreach ($score as $sco) { ?>
                <tr>
    <?php foreach ($sco as $item) { ?>  
                    <td><?=$item?></td>
    <?php } ?>
<?php } ?>  
                </tr>
<?php }?>