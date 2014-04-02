<?php
$pid = intval($_GET['pid']);
cart_add($pid);

header('location: ?controller=cart&action=index');