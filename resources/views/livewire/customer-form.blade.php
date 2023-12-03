<div>
  <div class="card card-default">
      <div class="card-header">
         <h3 class="card-title">Form Pelanggan</h3>
   
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
               <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
               <i class="fas fa-times"></i>
            </button>
         </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
              <div class="col-md-4 position-relative">
               <label for="validationTooltipUsername" class="form-label">Username</label>
               <div class="input-group has-validation">
                  <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                  <input type="text" class="form-control" id="validationTooltipUsername"
                     aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                     Please choose a unique and valid username.
                  </div>
               </div>
            </div>
               
               <!-- /.form-group -->
               <div class="form-group">
                  <label>Disabled</label>
                  <select class="form-control select2bs4" disabled="disabled" style="width: 100%;">
                     <option selected="selected">Alabama</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                  </select>
               </div>
               <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2bs4" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                     <option>Alabama</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                  </select>
               </div>
               <!-- /.form-group -->
               <div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                     <option selected="selected">Alabama</option>
                     <option>Alaska</option>
                     <option disabled="disabled">California (disabled)</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                  </select>
               </div>
               <!-- /.form-group -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
         Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
         the plugin.
      </div>
   </div>
</div>
