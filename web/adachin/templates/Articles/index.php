<!-- File: templates/Articles/index.php -->

<h1>記事一覧</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日時</th>
    </tr>

    <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事の情報を出力します -->

    <?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('編集', ['action' => 'edit', $article->slug]) ?>
                <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $article->slug],
                    ['confirm' => 'よろしいですか?']
                )
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?= $this->Html->link('記事の追加', ['action' => 'add']) ?>
</table>
