<div class="userform" style=" padding-left: 25%;">
<section class="main-content">        
        <div class="row">
          <div class="span5 offset1">         
            <h4 class="title"><span class="text"><strong>Agregar Perfil</strong> Vendedores</span></h4>
            <?php echo $this->Form->create('User',array('type'=>'file')); ?>
           <?php echo $this->Form->input('id'); ?>
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
                  <div class="controls">
                     <?php echo $this->Form->input('nombre',array('label'=>'Nombre', 'type' => 'text', 'placeholder'=>'Ingrese contraseña', 'class' => 'input-xlarge')); ?>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                     <?php echo $this->Form->input('apellido',array('label'=>'Apellido', 'type' => 'text', 'placeholder'=>'Ingrese contraseña', 'class' => 'input-xlarge')); ?>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                     <?php echo $this->Form->input('correo',array('label'=>'Correo electrónico', 'type' => 'text', 'placeholder'=>'Ingrese contraseña', 'class' => 'input-xlarge')); ?>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                     <?php echo $this->Form->input('tipo',array('label'=>'Rol', 'type' => 'text', 'placeholder'=>'Ingrese contraseña', 'class' => 'input-xlarge')); ?>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                     <?php
						echo $this->Form->input('foto',array('type'=>'file','label'=>'Foto de perfil'));
						echo $this->Form->input('imagen',array('type'=>'hidden','label'=>''));
					?>
                  </div>
                </div>
                <div class="control-group">
                  <?php echo $this->Form->end(array('value'=>'add', 'class' => 'btn btn-inverse large', 'tabindex' => '3')); ?>
                  <hr>
                </div>
              </fieldset>
            </form>       
</section>
</div>