<div class="userform" style=" padding-left: 13%;">
<section class="main-content">        
        <div class="row">
          <div class="span5 offset1">         
            <h4 class="title"><span class="text"><strong>Login</strong> Vendedores</span></h4>
            <?php echo $this->Form->create('User'); ?>
              <input type="hidden" name="next" value="/">
              <fieldset>
                <div class="control-group">
                  <a style="color: #BD0707;"><?php echo $this->Session->flash(); ?></a>
                  <div class="controls">
                    <?php echo $this->Form->input('username',array('label'=>'Nombre de usuario', 'type' => 'text', 'placeholder'=>'Ingrese usuario', 'class' => 'input-xlarge')); ?>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                     <?php echo $this->Form->input('password',array('label'=>'Contraseña', 'type' => 'password', 'placeholder'=>'Ingrese contraseña', 'class' => 'input-xlarge')); ?>
                  </div>

                </div>
                <div class="control-group">
                  <?php echo $this->Form->end(array('class' => 'btn btn-inverse large', 'tabindex' => '3'),'Ingresar'); ?>
                  <hr>
                </div>
              </fieldset>
            </form>       
          </div>
          <div class="span5">         
            <h4 class="title"><span class="text"><strong>Solicitar ser</strong> Vendedor</span></h4>
            <form action="#" method="post" class="form-stacked">
              <fieldset>
                <div class="control-group">
                  <label class="control-label">Nombre</label>
                  <div class="controls">
                    <input type="text" placeholder="Ingrese su nombre" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Apellido</label>
                  <div class="controls">
                    <input type="text" placeholder="Ingrese su apellido" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Correo</label>
                  <div class="controls">
                    <input type="text" placeholder="Ingrese su correo" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Descripción</label>
                  <div class="controls">
                    <textarea class="input-xlarge" placeholder="Ingrese una descripción sobre lo que pretende vender" rows="4"></textarea>
                  </div>
                </div>                                        
                
                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Solicitar Cuenta"></div>
                <div class="control-group">
                  <p></p>
                </div>
                <hr>
              </fieldset>
            </form>         
          </div>        
        </div>
</section>
</div>
