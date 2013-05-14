<?php include_once 'partial_text.php'; function tpl_section_text($data) { ?>
                <div class="cv-section col-1 fixed">
                    <h2 class="cv-section-name"><?= $data['title'] ?></h2>
                    <ul class="cv-section-items">
                        <li class="cv-item">
                <?php foreach( $data['content'] as $content ) { ?>
				<?= render_block($content) ?>
		<?php } ?>
                        </li>
                    </ul>
                </div>
	<?php } ?>
