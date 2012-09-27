
<?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); echo '<br/>'; ?>


<h1>Users</h1>
<table>
    <!--  <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Created</th>
        </tr>
    -->
    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
            array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['Profile']['email']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
    <!-- Here is where we loop through our $posts array, printing out post info -->

  <!--?php echo '<pre>'; print_r($users); echo '</pre>'; ?>
    ?php unset($user); ?>
