<?php echo $this->render_table_name($mode); ?>
<div class="fruit-top-actions btn-group">
</div>
<div class="fruit-view">
<?php echo $mode == 'view' ? $this->render_fields_list($mode,array('tag'=>'table','class'=>'table')) : $this->render_fields_list($mode,'div','div','label','div'); ?>
</div>
<div class="fruit-nav">
<div class="row">
	<div class="col-md-12">
	    <div class="btn-group pull-right">
	    <?php 
	    	echo $this->render_button('save_return','save','list','btn btn-primary','','create,edit');
	    	echo $this->render_button('save_new','save','create','btn btn-default','','create,edit');
	    	//echo $this->render_button('save_edit','save','edit','btn btn-default','','create,edit');
	    	echo $this->render_button('return','list','','btn btn-warning'); ?>
	    <?php //echo $this->render_benchmark(); ?>
	    </div>	
	</div>
</div>
</div>
