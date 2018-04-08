<div class="panel-body">
    <div class="panel">
    <?php 
        require '../../databaseConnect/connectSQL.php';
        if (isset($_GET['qs'])) {
            $discussion_id = $_GET['qs'];
        }
        $qs_st_id;
        $dis = $pdo->query('SELECT * FROM discussion WHERE question LIKE "%'.$question.'%"');
        while ($key = $dis->fetch()) {
            $aNs = $pdo->query('SELECT * FROM discussion WHERE dis_ans_id = '.$key['discussion_id'].'');
            $aNs->execute();
            $ansKey = $aNs->fetch();
            $studentqs = $student->find('Stid', $key['qs_student_id']);
            $studentans = $student->find('Stid', $ansKey['ans_student_id']);
            $studentans->execute();
            $staffans = $staff->find('staffId', $ansKey['staff_id']);
            $staffans->execute();
            $qs_st_id=$key['qs_student_id'];
            $discussion_id = $key['discussion_id'];
            $stQs = $studentqs->fetch();
            $stAns = $studentans->fetch();
            $staffAns = $staffans->fetch();
            echo '<div class="panel-body" id="qs">
                    <a href="">'.$key['question'].'</a>
                    <p>By: '.$stQs['studentFirstName'].' '.$stQs['studentSurName'].'</p>
                    <hr>
                    ';
            echo '<ul>';
            if ($studentans->rowcount() > 0) {
                    echo '<li><p>'.$ansKey['ans'].'</p>
                            <p>By: '.$stAns['studentFirstName'].'  '.$stAns['studentSurName'].'</p>
                        </li>
                        <hr>';
            }
            if ($staffans->rowcount() > 0) {
                echo '<li><p>'.$ansKey['ans'].'</p>
                            <p>By: '.$staffAns['staffFirstName'].'  '.$staffAns['staffSurName'].'</p>
                        </li>';
            }
                        
            echo '</ul>';
            echo '<a href="#ans" data-toggle="collapse" data-target="#ans" aria-expanded="false" aria-controls="collapse-1">Ans This Question</a>
                </div>';
        }
    ?>
    </div>
</div>
<form id="ans" method="POST" action="" class="collapse">
    <textarea class="form-control" placeholder="Enter your ans here...." name="ans"></textarea>
    <input type="submit" name="post" value="POST" class="btn btn-success">
</form>
<?php 
    if (isset($_POST['post'])) {
        $discussion = new QueryDatabase($pdo, 'discussion');
        unset($_POST['post']);
        $record = $_POST;
        unset($record['discussion_id']);
        $record['dis_ans_id'] = $discussion_id;
        $record['qs_student_id'] = $qs_st_id;
        $record['module_id'] = $_GET['id'];
        $record['ans_student_id'] = $_SESSION['StudentID'];
        $result = $discussion->saveQuery($record);
        header('Refresh:0');
    }
?>