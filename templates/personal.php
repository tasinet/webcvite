<?php include_once 'partial_text.php'; function tpl_section_personal($data) { ?>
	<div class="cv-section col-1 fixed" id="<?= $data['id'] ?>">
	    <h2 class="cv-section-name"><?= $data['title'] ?></h2>
	    <ul class="cv-section-items">
<?php foreach( $data['content'] as $content ) foreach($content as $name => $value) { ?>
			<li class="cv-item">
			    <span class="topic"><?= $name ?></span>
				<?= render_text($value) ?>
			</li>
		<?php } ?>
	    </ul>
	</div>
<?php } ?>
