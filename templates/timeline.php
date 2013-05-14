<?php include_once 'partial_text.php'; function tpl_section_timeline($data) { ?>
		<div class="cv-section col-1 fixed">
                    <h2 class="cv-section-name"><?= $data['title'] ?></h2>
                    <ul class="cv-section-items">
		<?php foreach( $data['content'] as $content ) { ?>
                        <li class="cv-item">
                            <?= isset($content['time']) ? "<h4>{$content['time']}</h4>" : "" ?>
			    <h2><?= $content['title'] ?></h2>
                            <?= isset($content['subtitle']) ? "<h3>{$content['subtitle']}</h3>" : "" ?>
			    <?= render_block($content['content']) ?>
                        </li>
		<?php } ?>
                    </ul>
                </div>

	<?php } ?>
