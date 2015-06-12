<?php
/**
 * 分页逻辑
 * @param unknown $count
 * @param unknown $page_size
 * @return number
 */
function page_count($count, $page_size) {
	if($count % $page_size == 0)
		return intval($count / $page_size);
	else
		return intval($count / $page_size) + 1;
}
