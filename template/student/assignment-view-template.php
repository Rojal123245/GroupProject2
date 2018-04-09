<div id="pills-assessment" role="tabpanel">
  <!-- Assessment tabs sub tabs -->
    <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Assignment</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Submission</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Grades</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <?php 
            $assign = $assignment->find('module_id', $_GET['id']);
            while ($assignRow = $assign->fetch()) {
              echo 'Assignment File: <br>';
              echo '<a href="../../'.$assignRow['filePath'].'" target="_blank">'.$assignRow['filePath'].'</a><br>';
              echo 'Description: <br>';
              echo '<p>'.$assignRow['descrip'].'</p><hr>';
            }
          ?><hr>
        </div>

        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <?php 
            $assignmentId;
            $assign = $assignment->find('module_id', $_GET['id']);
            while ($assignRow = $assign->fetch()) {
              if ($assignRow['link'] == 'yes') {
                echo '<a href="#sub" data-toggle="collapse" data-target="#sub">Submit '.$assignRow['filePath'].'</a>';
                $assignmentId = $assignRow['assignment_id'];
              }
            }
          ?>
            <form id="sub" id="sub" class="collapse" method="POST" action="submission.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">
            <input type="hidden" name="assignment_id" value="<?php echo $assignmentId; ?>">
            <label>Choose file to submit</label>
            <br>
            <input type="file" name="upload" required=""><br>
            <label>Description</label>  <br>
            <textarea class="form-control" name="descrip" rows="7" required=""></textarea><br>
            <input type="submit" name="submit" value="Post" class="btn btn-success">
          </form>
        </div>

        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <?php 
              $assign = $submit->findAll();
              while ($assignRow = $assign->fetch()) {
                if ($assignmentId == $assignRow['assignment_id']) {
                  echo '<h5>Grade: '.$assignRow['grade'].'<h5>';
                }
              }
            ?>
        </div>                    
      </div>
    </div>
  </div>
</div>
              <!-- Assessment tabs sub tabs -->