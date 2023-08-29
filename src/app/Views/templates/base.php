<?php 
if(!$i==null){
    if($i==1){?>
        <?= view('tasks/task1'); ?>
    <?php }elseif($i==2){ ?>
        <?= view('tasks/task2'); ?>
    <?php }elseif($i==3){?>
        <?= view('tasks/task3'); ?>
    <?php }elseif($i==4){ ?>
        <?= view('tasks/task4'); ?>
    <?php }?>
    <?php }else{
    echo '<div>Выберите задание</div>';
    echo $i;
}?>
