<div class="span10">
    <article>
        <h1><?=$topic->title?></h1>
        <div>
            <div><?=kdate($topic->created)?></div>
            <?=$topic->description?>
        </div>
    </article>
    <div>
        <?php
        echo "<a href='/phptest/igniter/index.php/topic/add' class='btn'>추가</a>"; 
        echo "<a href='/phptest/igniter/index.php/topic/update/{$topic->id}' class='btn'>수정</a>";
        echo "<a href='/phptest/igniter/index.php/topic/delete/{$topic->id}' class='btn'>삭제</a>";
        ?>
    </div>
</div>