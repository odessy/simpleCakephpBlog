<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $posts query object, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?= $post->id ?></td>
        <td>
            <?= $this->Html->link($post->title, ['action' => 'view', $post->id]) ?>
        </td>
        <td>
            <?= $post->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>