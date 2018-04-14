<style type="text/css">
   input[name=question] {
    width: 200px;
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 5px;
    font-size: 15px;
    border: 2px groove #aaa;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px 22px 11px 35px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[name=question]:focus {
    width: 80%;
} 
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="right-search">
                        <form method="POST" action="search.php?id=<?php echo $_GET['id']; ?>">
                            <input type="text" name="question" placeholder="Search Question">
                            <input type="submit" name="search" value="Search" class="btn btn-info">
                        </form>
                    </div>
                    <a class="btn btn-primary" href="#askForm">Ask question?</a>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="panel">
        <?php 
            $dis = $discussion->findAll();
            while ($key = $dis->fetch()) {
                $studentqs = $student->find('Stid', $key['qs_student_id']);
                $stQs = $studentqs->fetch();
                if ($key['question'] != '' && $key['module_id'] == $_GET['id']) {
                        echo '<div class="panel-body" id="qs">
                            <a href="search.php?id='.$_GET['id'].'&qs='.$key['discussion_id'].'">'.$key['question'].'</a>
                            <p>By: '.$stQs['studentFirstName'].' '.$stQs['studentSurName'].'</p>
                        </div>';
                    }    
            }
        ?>
                    </div>
                </div><br>
                <div class="panel panel-body">
                    <form method="POST">
                        <input type="text" name="question" placeholder="Enter your question?" class="form-control">
                        <input type="submit" name="submit" value="Post Question" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
