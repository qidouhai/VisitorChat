<ul>
<?php 
foreach ($context as $site) {
    echo "<li><a href='". \UNL\VisitorChat\Controller::$URLService->generateSiteURL('sites/history?url=' . urlencode($site->getURL())) . "'>".$site->getTitle()."</a></li>";
}
?>
</ul>