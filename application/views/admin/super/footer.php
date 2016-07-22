<?php
/**
 * Footer view
 * Inserted in all pages
 */
?>

<!-- Footer -->
<footer class='footer'>
	<div class="container-fluid">
		<div class="row">		    	    
		    <div  class="col-md-12 text-center"  >
		    	Dirección de Monitoreo, Seguimiento y Evaluación - DIMSE
		    </div>
		</div>
	</div>
</footer>

<!-- Modal for confirmation -->
<div id="confirmation-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php eT("Confirm"); ?></h4>
            </div>
            <div class="modal-body">
                <p class='modal-body-text'><?php eT("Are you sure?"); ?></p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary btn-ok"><span class='fa fa-check'></span>&nbsp;<?php eT("Yes"); ?></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class='fa fa-ban'></span>&nbsp;<?php eT("No"); ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for errors -->
<div id="error-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php eT("Error"); ?></h4>
            </div>
            <div class="modal-body">
                <p class='modal-body-text'><?php eT("An error occurred."); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">&nbsp;<?php eT("Close"); ?></button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
