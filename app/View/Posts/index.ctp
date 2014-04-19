<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<<<<<<< HEAD
<!-- <p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>-->
<table>
    <tr>
        <th>Post Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Modified</th>
        <th class="actions">Action </th>
    </tr>

    <?php
            $i = 0;
            foreach ($posts as $post):
                    $class = null;
                    if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                    }
            ?>
<!-- Here's where we loop through our $posts array, printing out post info -->

    <tr<?php echo $class;?>>
		<td><?php echo $post['Post']['id']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['title']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['created']; ?>&nbsp;</td>
		<td><?php echo $post['Post']['modified']; ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $post['Post']['id'])); ?>
			<?php if ($current_user['role'] == 'admin'): ?>
                            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
                            <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
		    <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
    

</table>

<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); 


?>
=======
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
>>>>>>> 65c5a04aba241ed790fea17317ace00ee2978451
