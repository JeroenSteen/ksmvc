<p>
	<?php echo ($data["test"]);?> ksgkg
</p>

<p>
<?php
    foreach ($data["products"] as $product) {
        echo '<b>Name: </b>'.$product.'<br />';
    }
?>
</p>