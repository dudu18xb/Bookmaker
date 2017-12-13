<h1>Booksmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>
</h1>
<section>
    <?php foreach ($booksmarks as $bookmark): ?>
        <article>
            <h4><?= $this->Html->link($booksmarks->title, $booksmarks->url) ?></h4>
            <small><?= h($booksmarks->url) ?></small>
            <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
        </article>

    <?php endforeach; ?>
</section>