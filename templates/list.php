<?php function tpl_section_list($data) { ?>
		<div class="cv-section col-1 fixed" id="<?= $data['id'] ?>">
                    <h2 class="cv-section-name"> <?= $data['title'] ?></h2>
                    <ul class="cv-section-items">
		<?php foreach( $data['content'] as $content ) { ?>
                        <li class="cv-item"> 
				<span class="topic"><?= $content['title'] ?></span>
				<?= render_block($content['content']) ?>
                        </li>
		<?php } ?>
                    </ul>
                </div>
	<?php } ?>
