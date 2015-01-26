<div class="post">
	<div class="title" style="font-size: xx-large">
		<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
	</div>
    <br/>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>برچسب ها:</b>
        <br/>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link("نظرات ({$data->commentCount})",$data->url.'#comments'); ?> 		<br/>

		بروز شده در تاریخ <?php echo date('F j, Y',$data->update_time); ?>
	</div>
</div>
