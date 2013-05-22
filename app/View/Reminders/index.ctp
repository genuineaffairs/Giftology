<div class="reminders index">
	<h2><?php echo __('Reminders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('friend_fb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('friend_name'); ?></th>
			<th><?php echo $this->Paginator->sort('friend_birthday'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($reminders as $reminder): ?>
	<tr>
		<td><?php echo h($reminder['Reminder']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reminder['User']['id'], array('controller' => 'users', 'action' => 'view', $reminder['User']['id'])); ?>
		</td>
		<td><?php echo h($reminder['Reminder']['friend_fb_id']); ?>&nbsp;</td>
		<td><?php echo h($reminder['Reminder']['friend_name']); ?>&nbsp;</td>
		<td><?php echo h($reminder['Reminder']['friend_birthday']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reminder['Reminder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reminder['Reminder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reminder['Reminder']['id']), null, __('Are you sure you want to delete # %s?', $reminder['Reminder']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
          	<?php
          	    if ($this->Paginator->hasPrev()) {
          		echo $this->Paginator->prev($this->html->image('35x35_prev.png' , array("title" => "Prev")), array('escape' => false), null, array('class' => 'prev disabled'));
          	}
          		 if ($this->Paginator->hasNext()) {
          		 echo $this->Paginator->next($this->html->image('35x35_next.png' , array("title" => "next")),array('escape' => false), null, array('class' => 'next disabled'));
          	}
          	?>
              </div>
              <div style="width:auto;height:auto;margin-top:-18px;margin-left:100px;" >
          		<br><?php echo $this->Paginator->numbers(array('separator' => ' | ','modulus'=>'10','first'=>'First Page ','last'=>' Last Page'));?>
              </div> 
              <div style="width:auto;height:auto;margin-top:20px;margin-left:50px;" >
          			<?php
          			echo $this->Paginator->counter(array(
          				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
          				));
          				?>	
              </div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reminder'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
