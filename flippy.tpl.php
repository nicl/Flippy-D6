<?php

/**
 * @file
 * flippy.tpl.php
 *
 * Theme implementation to display a simple pager.
 *
 * Default variables:
 * - $first_link: A formatted <A> link to the first item.
 * - $previous_link: A formatted <A> link to the previous item.
 * - $next_link: A formatted <A> link to the next item.
 * - $last_link: A formatted <A> link to the last item.
 *
 * Other variables:
 * - $current['nid']: The Node ID of the current node.
 * - $first['nid']: The Node ID of the first node.
 * - $prev['nid']: The Node ID of the previous node.
 * - $next['nid']: The Node ID of the next node.
 * - $last['nid']: The Node ID of the last node.
 *
 * - $current['title']: The Node title of the current node.
 * - $first['title']: The Node title of the first node.
 * - $prev['title']: The Node title of the previous node.
 * - $next['title']: The Node title of the next node.
 * - $last['title']: The Node title of the last node.
 *
 * @see template_preprocess_flippy()
 */
?>
<ul class="flippy">
	<?php if (!empty($first_link)): ?><li class="first"><?php print $first_link; ?></li><?php endif; ?>
	<li class="previous"><?php print $previous_link; ?></li>
	<li class="next"><?php print $next_link; ?></li>
	<?php if (!empty($last_link)): ?><li class="last"><?php print $last_link; ?></li><?php endif; ?>
</ul>
