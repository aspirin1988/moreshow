<?php //$obj=get_queried_object(); print_r($obj); $class=''; if ($obj->ID==get_the_ID()) $class='uk-active'; ?>
<li><a class="<?=$class?>" href="<?=get_permalink()?>"><?=get_the_title()?></a></li>