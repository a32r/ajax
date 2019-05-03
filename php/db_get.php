<?php

$query = "SELECT * FROM comments";
$arr = $db->query($query)->fetchAll();
foreach($arr as $comment)
echo <<< HTML

			<div class="col-4">
				<div class="comment">
					<div class="header">{$comment['name']}</div>
					<div class="content">
						<div class="email">{$comment['email']}</div>
						<div class="message">{$comment['comment']}</div>
					</div>
				</div>
			</div>

HTML;
?>
