<h1>Articles</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <?php foreach($articles as $article): ?>
        <tr>
            <td>
              <?= $this->Html->link($article->title, ['action' => 'view', $article->slug])  ?>
            </td>
        </tr>
        <td>
            <?=  $article->created->format(DATE_RFC822) ?>
        </td>
            
    <?php endforeach ?>

</table>