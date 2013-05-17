     <?= $this->element('admin_header'); ?>
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<div id="collapse1"  class="backSearch" style="border:1px solid #ccc; width:800px; padding:30px; margin-bottom:50px;">

		<?php echo $this->Form->create('User', array('url' => array_merge(array('action' => 'index'), $this->params['pass']))); 
		?>

       <span><?php echo $this->Form->input('id', array('type'=>'text','div' => false,'label'=>'','size'=>'1','placeholder'=>'ID'));?></span>
       <span><?php echo $this->Form->input('username', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'User Name'));?></span>
       <span><?php echo $this->Form->input('role', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Role'));?></span>
      <span><?php echo $this->Form->input('facebook_id', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Facebook Id'));?></span>
      
       <td><?php echo $this->Form->input('last_login_start', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker',"placeholder"=>'Last Login Start '));?>
		<?php echo $this->Form->input('last_login_end', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker1','placeholder'=>'Last Login End'));?>
        </td>
          <td><?php echo $this->Form->input('created_start', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker2',"placeholder"=>'Created Start '));?>
		<?php echo $this->Form->input('created_end', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker3','placeholder'=>'Created End'));?>
        </td>
        <td><?php echo $this->Form->input('modified_start', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker4',"placeholder"=>'Modified Start'));?>
			<?php echo $this->Form->input('modified_end', array('type'=>'text','div' => false,'label'=>'','size'=>'10','id'=>'datepicker5','placeholder'=>'Modified End'));?>
        </td>
        <span><?php echo $this->Form->input('first_name', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'First Name','id'=>'abc'));?></span>
       <span>
       	 <span><?php echo $this->Form->input('last_name', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Last Name'));?></span>
       <span>
       	<span><?php echo $this->Form->input('email', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Email'));?></span>
       	 <span><?php echo $this->Form->input('mobile', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Mobile'));?></span>
       	 <span><?php echo $this->Form->input('city', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'City'));?></span>
       	 <span><?php echo $this->Form->input('gender', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Gender'));?></span>
       	  <span><?php echo $this->Form->input('birthday', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Birthday'));?></span>
       	  <span><?php echo $this->Form->input('birthyear', array('type'=>'text','div' => false,'label'=>'','size'=>'10','placeholder'=>'Birthyear'));?></span>
       	<center>
         <?php echo $this->Form->submit(__('Search', true), array('div' => false));	
        if (isset($this->params['named']) & !empty($this->params['named'])){ 
            echo $this->Html->link(_('Reset Filter'), array('controller'=>'Users','action'=>'index'));
        } 
        ?></center>
        </span>

         <?php echo $this->Form->end();?></td>

	</div>
	 <?php echo $this->Form->create( '', array( 'id'=>'frm1' ,'name'=>'frm1' ,'controller'=>'Users', 'action' => 'download_user_csv', 'onsubmit'=>'return chkValidate();') );?>
        <table class="grd-chkbox" cellpadding="0" cellspacing="0" id="ordrMgmt">
         <?php  echo $this->Form->submit("Download User CSV" ,array( 'name'=>'csv', 'class'=>'button','type'=>'submit', 'id'=>'assign' , 'label' =>'','value'=>"" ));	
              echo $this->Form->end();
             ?>
	<table cellpadding="0" cellspacing="0" border="1">

	<tr>
			<td class="campaign_checkbo"> <input class="campaign_checkbox" type="checkbox" name="checkall"onclick='checkedAll(frm1);' > </td>
	
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th ><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_id'); ?></th>
			<th><?php echo $this->Paginator->sort('last_login'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('First Name'); ?></th>
            <th><?php echo $this->Paginator->sort('Last Name'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('mobile'); ?></th>
            <th><?php echo $this->Paginator->sort('city'); ?></th>
            <th><?php echo $this->Paginator->sort('gender'); ?></th>
            <th><?php echo $this->Paginator->sort('birthday'); ?></th>
            <th><?php echo $this->Paginator->sort('birthyear'); ?></th>
			<th><?php echo $this->Paginator->sort('Total Friends'); ?></th>





			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php 
	foreach ($users as $user): ?>
	<tr>
		<td class="campaign_checkbo"><input class="campaign_checkbox" type="checkbox" name="chk1[]" id="<?php echo $user['User']['id'];?>" value="<?php echo $user['User']['id'];?>"> </td>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td ><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['facebook_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['first_name']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['last_name']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['email']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['mobile']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['city']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['gender']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['birthday']); ?>&nbsp;</td>
        <td><?php echo h($user['UserProfile']['birthyear']); ?>&nbsp;</td>
        <td><?php echo h($user['User']['count']); ?>&nbsp;</td>
        
     
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		
		?> <br><?php echo $this->Paginator->numbers(array('separator' => '|','modulus'=>'10','first'=>'First Page','last'=>'Last Page'));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	<div class="paging">
	
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('controller' => 'user_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile'), array('controller' => 'user_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Utms'), array('controller' => 'user_utms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Utm'), array('controller' => 'user_utms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Addresses'), array('controller' => 'user_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Address'), array('controller' => 'user_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gifts Received'), array('controller' => 'gifts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transactions'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reminders'), array('controller' => 'reminders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reminders'), array('controller' => 'reminders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
 
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script>
  $(function() {
  	
    $( "#datepicker" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
     $( "#datepicker1" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
      $( "#datepicker2" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
         $( "#datepicker3" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
            $( "#datepicker4" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
               $( "#datepicker5" ).datepicker({
     dateFormat: 'yy-mm-dd',
      buttonText: "Choose the date",
  });
});
  </script>

<script>
		$(document).ready(function() {
			$('#collapse1').hide();
			
		  $('.nav-toggle').click(function(){

			//get collapse content selector
			var collapse_content_selector = $(this).attr('href');					
 
			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(collapse_content_selector).toggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('Search(+)');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('Search(-)');
			  }
			});
		  });
 
		});	
		</script>
<script>
    function chkValidate(){
        if($("[name='chk1[]']:checked").length<1){
            alert('Please select atleast one record.');
            return false;
        }
        return true;
    }
    checked=false;
 function checkedAll (frm1) {
 
	var aa= document.getElementById('frm1');
	 if (checked == false)
        {
           checked = true
          }
        else        {
          checked = false
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
		 aa.elements[i].checked = checked;
	}
	
 }
 $(document).ready(function(){
        $('.campaign_checkbox').show();
    });
</script>