<?php 

// errors page

if(count($errors) > 0) : ?>
<div class="error">
<?php foreach($errors as $error) :?>
<p>
    <?= $error ?>
</p>
<?php endforeach ;?>
</div>
<!--- end div error --->


<?php endif;?>