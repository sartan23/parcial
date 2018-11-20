<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

        <h4 class="modal-title" id="myModalLabel">Editar item</h4>

      </div>

      <div class="modal-body">



      		<form data-toggle="validator" action="/item-ajax/14" method="put">

      			<div class="form-group">

					<label class="control-label" for="title">Titulo:</label>

					<input type="text" name="title" class="form-control" data-error="Please enter title." required />

					<div class="help-block with-errors"></div>

				</div>

				<div class="form-group">

					<label class="control-label" for="title">Detalles:</label>

					<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

					<div class="help-block with-errors"></div>

				</div>

				<div class="form-group">

					<button type="submit" class="btn btn-success crud-submit-edit">subir</button>

				</div>

      		</form>



      </div>

    </div>

  </div>

</div>