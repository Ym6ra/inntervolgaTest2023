<div style="display:flex"><div><h1>Задание №1 Массивы</h2>
<?php
    $data = [
        ['Иванов', 'Математика', 5],
        ['Иванов', 'Математика', 4],
        ['Иванов', 'Математика', 5],
        ['Петров', 'Математика', 5],
        ['Сидоров', 'Физика', 4],
        ['Иванов', 'Физика', 4],
        ['Петров', 'ОБЖ', 4],
    ];?>
<table class="table table-bordered">
	<thead class="thead-dark">
    <tr>
        <th scope="col">ФИО</th>
        <th scope="col">Математика</th>
        <th scope="col">Физика</th>
        <th scope="col">ОБЖ</th>
    </tr>
</thead>
<tbody>
        <?php 
        for($i=0; $i<count($data); $i++){
            if ($data[$i][0]==='Иванов'){
                if($data[$i][1]==="Математика"){
                  $Ivanov[0] += $data[$i][2];  
                }elseif($data[$i][1]==="Физика"){
                  $Ivanov[1] += $data[$i][2];  
                }elseif($data[$i][1]==="ОБЖ"){
                    $Ivanov[2] += $data[$i][2];  
                }
            }elseif($data[$i][0]==='Петров'){
                if($data[$i][1]==="Математика"){
                    $Petrov[0] += $data[$i][2];  
                  }elseif($data[$i][1]==="Физика"){
                    $Petrov[1] += $data[$i][2];  
                  }elseif($data[$i][1]==="ОБЖ"){
                    $Petrov[2] += $data[$i][2];  
                  }
            }elseif($data[$i][0]==='Сидоров'){
                if($data[$i][1]==="Математика"){
                    $Sidorov[0] += $data[$i][2];  
                  }elseif($data[$i][1]==="Физика"){
                    $Sidorov[1] += $data[$i][2];  
                  }elseif($data[$i][1]==="ОБЖ"){
                    $Sidorov[2] += $data[$i][2];  
                  }
            }
        
        }
        ?>
    <?php for($i=0; $i<3;$i++){
        if($i===0){
            $Name = 'Иванов';
            $var = $Ivanov;
        }elseif($i===1){
            $Name = 'Петров';
            $var = $Petrov;
        }elseif($i===2){
            $Name = 'Сидоров';
            $var = $Sidorov;
        }?>
    <tr>
        <td scope="col">
        <?php echo $Name;?>
        </td>
        <td scope="col">
            <?php echo $var[0];?>
        </td>
        <td scope="col">
            <?php echo $var[1];?>
        </td>
        <td scope="col">
            <?php echo $var[2];?>
        </td>
    </tr>
    <?php }?>
</tbody>
</table>

</div>
<div>
    <?php $code = highlight_string(file_get_contents(__FILE__));?>
</div></div>