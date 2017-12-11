<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('job/index') ?>" class="btn btn-primary ">Regresar al listado</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'job/delete?id='.$form->getObject()->getId(), array('class'=>'btn btn-primary','method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" class="btn btn-success"/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['category_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['category_id']->renderError() ?>
          <?php echo $form['category_id']->render(array('class'=>'form-control')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['type']->renderLabel() ?></th>
        <td>
          <?php echo $form['type']->renderError() ?>
          <?php echo $form['type']->render(array('class'=>'form-control','placeholder'=>'Tipo de anuncio')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['company']->renderLabel() ?></th>
        <td>
          <?php echo $form['company']->renderError() ?>
          <?php echo $form['company']->render(array('class'=>'form-control','placeholder'=>'Empresa')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['logo']->renderLabel() ?></th>
        <td>
          <?php echo $form['logo']->renderError() ?>
          <?php echo $form['logo']->render(array('class'=>'form-control')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['url']->renderLabel() ?></th>
        <td>
          <?php echo $form['url']->renderError() ?>
          <?php echo $form['url']->render(array('class'=>'form-control','placeholder'=>'URL')); ?>
      </tr>
      <tr>
        <th><?php echo $form['position']->renderLabel() ?></th>
        <td>
          <?php echo $form['position']->renderError() ?>
          <?php echo $form['position']->render(array('class'=>'form-control','placeholder'=>'Posición')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['location']->renderLabel() ?></th>
        <td>
          <?php echo $form['location']->renderError() ?>
          <?php echo $form['location']->render(array('class'=>'form-control','placeholder'=>'Ubicación')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description']->render(array('class'=>'form-control','placeholder'=>'Descripción')); ?>
      </tr>
      <tr>
        <th><?php echo $form['how_to_apply']->renderLabel() ?></th>
        <td>
          <?php echo $form['how_to_apply']->renderError() ?>
          <?php echo $form['how_to_apply']->render(array('class'=>'form-control')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['token']->renderLabel() ?></th>
        <td>
          <?php echo $form['token']->renderError() ?>
          <?php echo $form['token']->render(array('class'=>'form-control')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_public']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_public']->renderError() ?>
          <?php echo $form['is_public'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_activated']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_activated']->renderError() ?>
          <?php echo $form['is_activated'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email']->render(array('class'=>'form-control','placeholder'=>'Dirección de correo')); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['expires_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['expires_at']->renderError() ?>
          <?php echo $form['expires_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
