<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div class="card-header card-header-primary">
						<div class="row">
							<div class="col-md-6">
								<h4 class="card-title mt-0">Add Quiz category</h4>
							</div>
							<div class="col-md-6">
								<a class="btn btn-warning" href="<?php $uid=$this->uri->segment(3);
								    echo base_url('admin/viewCategory/').$uid; ?>"
									style="float: right;">Cancle</a>
							</div>
						</div>
					</div>

				</div>


				<div id="edit" class="cantainer" style="margin-left:14px;">
					



		           <div class="form-group">
                    <?php 
                          $action=$this->uri->segment(3); 
						if($action=='edit'){$uid=$this->uri->segment(4);
				 echo form_open_multipart('admin/saveCategory/'.$action.'/'.$uid);}else{
					echo form_open_multipart('admin/saveCategory/'.$action);
				 } ?>
						

		<div class="form-group">
						<label for="exampleInputPassword1">Category  Name</label>
							<input type="text" name="name" class="form-control" id="" value="<?php 
					 if(form_error('name')){ echo set_value('name');}else{
						if($action=='edit'){  echo $data[0]->title;} else{		
							echo set_value('name');  } } ?>" required>		
							
								
              <?php echo form_error('name','<div class="error" style="color:red;">', '</div>'); ?>
		</div>
						<div class="form-group">
						<label for="exampleInputPassword1">Category Description</label>
							<input type="text" name="price" class="form-control" id="" value="<?php 
					 if(form_error('price')){ echo set_value('price');}else{
						if($action=='edit'){echo $data[0]->description;} else{ 		
							echo set_value('price');   } } ?>"required>		
		<?php echo form_error('price','<div class="error" style="color:red;">', '</div>'); ?>
</div>
					
						<input type="hidden" name="id" value="">

						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Save</button>
						</div>

						<?php echo form_close();  ?>
					</div>
				</div>
				</div>
		</div>
	</div>
</div>


				
			
