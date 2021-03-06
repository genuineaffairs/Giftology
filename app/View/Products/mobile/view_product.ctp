		<!--div>
		<?= $this->element('celebration_details', array('receiver_name'=>$receiver_name,
                                                                'ocasion' => $ocasion),
							  array('cache' => array('key'=>$receiver_name.$ocasion))
				   ); ?>
		</div-->
	
		<div id="gift-details">
			<?php 		if (isset($this->request->params['named']['receiver_birthday']) &&
					    !$this->Time->isToday($this->request->params['named']['receiver_birthday']) &&
					    isset($this->request->params['named']['ocasion']) &&
					    $this->request->params['named']['ocasion'] == 'Birthday') {
						$send_now = 0;
					} else {
						$send_now = 1;
					}
			?>
			<h3>Will be delivered: <strong><?= $send_now ? 'Today' :
				substr($this->Time->niceShort($receiver_birthday), 0, -7); ?></strong></h3>
			<div class="delivery-details">

			  	<div class="delivery-message">
					<div class="greeting-bubble">
				  		<textarea placeholder="Write something nice to <?= $receiver_name; ?>." id="gift-message" name="gift-message" class="gift-message" autofocus="autofocus"></textarea>
					</div>
					<div class="shadow-wrapper">
				  		<div class="frame">
							<div class="img-placeholder male">
                						<?php $photo_url = "https://graph.facebook.com/".$facebook_user['id']."/picture"; ?>
                                                            <img src=<?= $photo_url; ?>>
    							</div>
				  		</div>
					</div>
			  	</div>
		  		<h4>Deliver your gift</h4>
		  		<div class="delivery-sharing">
					<div class="input checkbox"><input type="checkbox" value="facebook" name="facebook" id="post_to_fb" class="facebook" checked>
						<label for="facebook">Share on <?= $receiver_name; ?>'s Facebook wall</label>
					</div>
					<div class="input email">
			  			<label for="email">Send email to</label>
			  			<input type="email" id="receiver_email" placeholder="<?= $receiver_name; ?>@example.com" name="receiver_email" id="email">
					</div>
		  		</div>
			<ul class="voucher-details"><li>This gift card is valid for <?= $product['Product']['days_valid']; ?> days.</li></ul>
			<div 	id="SendButtonWithPerms" style="display:none">		
			<button  class="buy showtransbox" onClick="send_gift('<?=
                            $this->Html->url(array(
				'controller' => 'gifts',
				'action' => 'send',
				'receiver_fb_id' => $receiver_id,
				'receiver_name' => $receiver_name,
				'receiver_birthday' => $receiver_birthday,
				'product_id' => $product['Product']['id'],
				'send_now' => $send_now)); ?>/gift_amount:'+document.getElementById('contribution_amount').value+'/receiver_email:'+document.getElementById('receiver_email').value+'/post_to_fb:'+document.getElementById('post_to_fb').checked+'/message:'+document.getElementById('gift-message').value)">
			Send to <?= $receiver_name; ?>
			</button></div>
			<div  id="SendButtonForNoPerms">
			<div data-role="button" onClick="get_perms_and_send_gift('<?=
                            $this->Html->url(array(
				'controller' => 'gifts',
				'action' => 'send',
				'receiver_fb_id' => $receiver_id,
				'receiver_name' => $receiver_name,
				'receiver_birthday' => $receiver_birthday,
				'product_id' => $product['Product']['id'],
				'send_now' => $send_now)); ?>/gift_amount:'+document.getElementById('contribution_amount').value+'/receiver_email:'+document.getElementById('receiver_email').value+'/post_to_fb:'+document.getElementById('post_to_fb').checked+'/message:'+document.getElementById('gift-message').value)">
			Send to <?= $receiver_name; ?>
			</div></div>

		</div>

		<div style="display: none" class="purchase voucher-container">
			<?= $this->element('gift_voucher',
                                        array('product' => $product,
					      'small' => false),
                                        array('cache' => array(
                                                'key' => $product['Product']['id'].'full'))); ?>
		</div>
	</div>	
	<div class="clear"></div>


