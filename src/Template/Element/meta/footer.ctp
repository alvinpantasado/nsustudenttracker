<!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <?php 
				echo $this->Html->link(
					'Logout',
					['controller' => 'users', 'action' => 'logout'],
					['class' => 'btn btn-primary','escape' => false]
				);
			?>
          </div>
        </div>
      </div>
    </div>
<?php
	$session = $this->request->session();
	$user_data = $session->read('Auth.User');	
	if(!empty($user_data)) {	
?>
<footer class="sticky-footer">
	<div class="container">
		<div class="text-center">
			<small>Copyright &copy; Your Website 2017</small>
		</div>
	</div>
</footer>
<?php } ?>