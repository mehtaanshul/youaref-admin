<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bank Detail Edit</h3>
            </div>
			<?php echo form_open('bank_detail/edit/'.$bank_detail['bank_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $bank_detail['user_id']); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="holder_name" class="control-label">Holder Name</label>
						<div class="form-group">
							<input type="text" name="holder_name" value="<?php echo ($this->input->post('holder_name') ? $this->input->post('holder_name') : $bank_detail['holder_name']); ?>" class="form-control" id="holder_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_name" class="control-label">Bank Name</label>
						<div class="form-group">
							<input type="text" name="bank_name" value="<?php echo ($this->input->post('bank_name') ? $this->input->post('bank_name') : $bank_detail['bank_name']); ?>" class="form-control" id="bank_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ifsc" class="control-label">Ifsc</label>
						<div class="form-group">
							<input type="text" name="ifsc" value="<?php echo ($this->input->post('ifsc') ? $this->input->post('ifsc') : $bank_detail['ifsc']); ?>" class="form-control" id="ifsc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="account_number" class="control-label">Account Number</label>
						<div class="form-group">
							<input type="text" name="account_number" value="<?php echo ($this->input->post('account_number') ? $this->input->post('account_number') : $bank_detail['account_number']); ?>" class="form-control" id="account_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pan_number" class="control-label">Pan Number</label>
						<div class="form-group">
							<input type="text" name="pan_number" value="<?php echo ($this->input->post('pan_number') ? $this->input->post('pan_number') : $bank_detail['pan_number']); ?>" class="form-control" id="pan_number" />
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