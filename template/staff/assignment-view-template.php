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
          <form method="POST" action="assignment.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">
            <input type="hidden" name="module_id" value="<?php echo $_GET['id']; ?>">
            <label>Choose assignment</label>
            <br>
            <input type="file" name="upload" required=""><br>
            <label>Description</label>  <br>
            <textarea class="form-control" name="descrip" rows="7" required=""></textarea><br>
            <input type="submit" name="submit" value="Post" class="btn btn-success">
          </form>
        </div>

        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h5>Create link for submission</h5>
            <form method="POST" action="submission.php?id=<?php echo $_GET['id']; ?>">
              <select name="assignment_id">
                <?php 
                $assignmentId;
                $assign = $assignment->find('module_id', $_GET['id']);
                  while ($assignRow = $assign->fetch()) {
                    echo '<option value="'.$assignRow['assignment_id'].'">'.$assignRow['filePath'].'</option>';
                    $assignmentId = $assignRow['assignment_id'];
                  }
                ?>
                <input type="submit" name="create" value="Create Link" class="btn btn-info">
              </select>
            </form>
        </div>

        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <?php 
              $assign = $submit->findAll();
              while ($assignRow = $assign->fetch()) {
                if ($assignmentId == $assignRow['assignment_id']) {
                  $stud = $student->find('Stid', $assignRow['student_id']);
                  $st = $stud->fetch();
                  echo 'Assignment File: <br>';
                  echo '<a href="../../'.$assignRow['file_Path'].'" target="_blank">'.$assignRow['file_Path'].'</a><br>';
                  echo 'Description: ';
                  echo '<p>'.$assignRow['descrip'].' By: '.$st['studentFirstName'].' '.$st['studentSurName'].'</p>';
                  if (isset($assignRow['grade'])) {
                    echo 'Grade given: '.$assignRow['grade'];
                  }
                  echo '<form method="POST" action="grade.php?id='.$_GET['id'].'">
                    <input type="hidden" name="assignment_id" value="'.$assignRow['assignment_id'].'">
                    ';
                  echo '<label>Give Grade: </label>
                    <select name="grade">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="F">F</option>
                    </select>
                    <input type="submit" name="sub" value="Grade" class="btn btn-success">
                  </form>
                  
                  <hr>';
                }
              }
            ?>
        </div>                    
      </div>
    </div>
  </div>
</div>
              <!-- Assessment tabs sub tabs -->