<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 9): ?>
    <P>※ 営業時間外です</p>
<?php else: ?>
    <P>ようこそ</P>
<?php endif; ?>

<?php
$s = 'sss';
if ($s):
    echo '$sには文字が入っています';
endif;
