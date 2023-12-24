<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>



<div aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pager pagination pagination-transparent pagination-rounded">
		<?php // var_dump($pager->hasNext()); ?>
		<?php if ($pager->hasPrevious() == null) : ?>
			<li class="page-item">
				<a class="page-link border" href="<?= $pager->getFirst() ?>" aria-label="Previous" >
					<span aria-hidden="true"><i class="fas fa-fast-backward"></i></span>
				</a>
			</li>
			<!-- <li class="page-item disabled">
				<a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="Previous">
					<span aria-hidden="true"><i class="fas fa-chevron-left"></i> Previous</span>
				</a>
			</li> -->
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="page-item active"' : 'class="page-item fw-bold"' ?>>
				<a class="page-link" href="<?= $link['uri'] ?>" >
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext() == null) : ?>
			<!-- <li class="page-item disabled">
				<a href="<?= $pager->getNext() ?>" aria-label="Next" class="page-link border">
					<span aria-hidden="true">Next <i class="fas fa-chevron-right"></i></span>
				</a>
			</li> -->
			<li class="page-item">
				<a href="<?= $pager->getLast() ?>" aria-label="Next" class="page-link border">
					<span aria-hidden="true"><i class="fas fa-fast-forward"></i></span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</div>
