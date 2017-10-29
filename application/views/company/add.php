<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Company Add</h3>
            </div>
            <?php echo form_open('company/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<!--<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="status" value="1"  id="status" />
							<label for="status" class="control-label">Status</label>
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="rating" class="control-label">Rating</label>
						<div class="form-group">
							<input type="text" name="rating" value="<?php echo $this->input->post('rating'); ?>" class="form-control" id="rating" />
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="enrolled" class="control-label">Enrolled</label>
						<div class="form-group">
							<input type="text" name="enrolled" value="<?php echo $this->input->post('enrolled'); ?>" class="form-control" id="enrolled" />
						</div>
					</div>-->
					<!--<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="form-control" id="timestamp" />
						</div>
					</div>-->
					<div class="col-md-6">
						<label for="logo" class="control-label">Logo</label>
						<div class="form-group">
							<textarea name="logo" class="form-control" id="logo"><?php echo $this->input->post('logo'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="about" class="control-label">About</label>
						<div class="form-group">
							<textarea name="about" class="form-control" id="about"><?php echo $this->input->post('about'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>