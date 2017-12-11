<h1>Jobeet jobs List</h1>
<div class="container">
<div class="row">
<table class="table table-striped">
  <thead>
    <tr>
      
      <th>Logo</th>
      <th>Categoria</th>
      <th>Tipo</th>
      <th>Empresa</th>
      <th>Position</th>
      <th>Location</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php

    
    foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
     
      <td><?php echo $jobeet_job->getLogo() ?></td>
      <td><?php echo $jobeet_job->getCategoryId(); ?></td>
      <td><?php echo $jobeet_job->getType() ?></td>
      <td><?php echo $jobeet_job->getCompany() ?></td>
      <td><?php echo $jobeet_job->getPosition() ?></td>
      <td><?php echo $jobeet_job->getLocation() ?></td>
      <td>
        <a href="<?php echo url_for('job/show?id='.$jobeet_job->getId()) ?>" class="btn btn-primary btn-sm">Ver</a>
        <a href="<?php echo url_for('job/edit?id='.$jobeet_job->getId()) ?>" class="btn btn-primary btn-sm">Modificar</a>

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo url_for('job/new') ?>" class="btn btn-primary">Publicar Nuevo empleo</a>

</div>

</div>

