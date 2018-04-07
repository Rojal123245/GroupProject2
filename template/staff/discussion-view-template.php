<style type="text/css">
   input[name=srch] {
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

input[name=srch]:focus {
    width: 80%;
} 
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="right-search">
                        <input type="text" name="srch" placeholder="Search Question">
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
                echo '<div class="panel-body" id="qs">
                        <a href="">'.$key['question'].'</a>
                        <p>By: '.$stQs['studentFirstName'].' '.$stQs['studentSurName'].'</p>
                    </div>';
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
