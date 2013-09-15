<?php	
$form = Loader::helper('form');
defined('C5_EXECUTE') or die("Access Denied.");
if (isset($response) && $response != '') { ?>
	<?php	echo $response?>
<?php } elseif ( empty($csID) ) { ?>
<p>有効なスペースが見つかりません。Visa.jp検索から再度スペースを検索してください。</p>
<?php } else { ?>
	<?php
	if(isset($error) && $error != '') {
		if ($error instanceof Exception) {
			$_error[] = $error->getMessage();
		} else if ($error instanceof ValidationErrorHelper) {
			$_error = $error->getList();
		} else if (is_array($error)) {
			$_error = $error;
		} else if (is_string($error)) {
			$_error[] = $error;
		}
		?>
		<div class="error">
		<?php foreach($_error as $e) echo('<li>'.$e.'</li>'."\n"); ?>
		</div>
		<?php
	}
	?>
<form method="post" action="<?php	echo $this->action('send')?>">

<?php	echo $form->hidden('csID',$csID); ?>

<table class="formBlockSurveyTable">
	<tbody>
		<tr>
			<td class="question">
				<label>利用したいスペース</label>
			</td>
			<td>
				<?php	echo $spaceName; ?>
			</td>
		</tr>
		<tr>
			<td class="question">
				<label for="check-in">利用したい日時</label>
			</td>
			<td>
			<?php
			$dtt = Loader::helper('form/date_time');
			echo $dtt->datetime('checkin');
			?>
			</td>
		</tr>
		<tr>
			<td class="question">
				<label for="message">メッセージ</label>
			</td>
			<td><?php	echo $form->textarea('message','',array('cols' => '50', 'rows' => '5'))?></td>
		</tr>
		<tr>
			<td class="question">&nbsp;</td>
			<td><?php	echo $form->submit('submit',t('Submit'),array('class' => 'formBlockSubmitButton')); ?></td>
		</tr>
	</tbody>

</table>

</form>
<?php } ?>