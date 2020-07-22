<div class="container">
      <div class="login-box">
        <div class="row">
          <div class="col">
            <img src = "<?= base_url( ) ?>resources/images/utmir_logo.png"/>
          </div>
        </div>
        <form id="login-form" class="mt-3">
          <input type="hidden" value="<?= base_url( ) ?>" id="url">
          <div class="form-group">
            <div class="col row">
              <label class="col-md-4 text-right text-white">Correo:</label>
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="" name="correo" id="correo">
                    </div>
                </div>
             </div>
             <div class="form-group">
                <div class="col row">
                <label class="col-md-4 text-right text-white">Password:</label>
              <div class="col-md-8">
                      <input type="password" class="form-control" placeholder="" name="password" id="password">
                  </div>
                </div>
                <div class="row mt-2">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                <input class="btn btn-primary btn-block" type="submit" value="Login">
              </div>
              <div class="col-sm-4"></div>
            </div>
          </div>
          </form>
        </div>
      </div>