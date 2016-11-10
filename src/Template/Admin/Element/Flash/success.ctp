<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success alert alert-success" onclick="this.classList.add('hidden')">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Success</h4>
<?= $message ?>
</div>
