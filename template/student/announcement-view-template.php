<?php 
$announcementInfo = $announcement->findAll();
while ($announcementFetch = $announcementInfo->fetch())  {
echo '
<div class="announcement">
    <h6><strong>'.$announcementFetch['title'].'</strong></h6>
    <p>'.$announcementFetch['descript'].'</p></div>
';
}
?>