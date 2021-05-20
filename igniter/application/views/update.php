<form action="/phptest/igniter/index.php/topic/update/<?=$topic->id?>" method="post" class="span10">
    <?php echo validation_errors(); ?>
    <?php echo "<input type='hidden' name='id' value='{$topic->id}'>"?>
    <input type="text" name="title" placeholder="제목" class="span12">
    <textarea name="description" placeholder="본문" class="span12" rows="15"></textarea><br>
    <input type="submit" class="btn">
</form>