<div class="productTypes view">
<h2><?php  echo __('Product Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productType['ProductType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Type'), array('action' => 'edit', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Type'), array('action' => 'delete', $productType['ProductType']['id']), null, __('Are you sure you want to delete # %s?', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($productType['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Min Price'); ?></th>
		<th><?php echo __('Max Price'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Days Valid'); ?></th>
		<th><?php echo __('Terms'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Product Type Id'); ?></th>
		<th><?php echo __('Product Segment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productType['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['min_price']; ?></td>
			<td><?php echo $product['max_price']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['days_valid']; ?></td>
			<td><?php echo $product['terms']; ?></td>
			<td><?php echo $product['code']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['vendor_id']; ?></td>
			<td><?php echo $product['product_type_id']; ?></td>
			<td><?php echo $product['product_segment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
