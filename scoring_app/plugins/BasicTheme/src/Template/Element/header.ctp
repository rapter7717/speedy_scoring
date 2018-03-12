<?php use Cake\Core\Configure; ?>

<header>
  <!-- <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
         <h4 class="text-white">About</h4>
        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li> 
          </ul> 
        </div>
      </div>
    </div> 
  </div> -->
  <div class="navbar navbar-dark bg-success box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand d-flex align-items-center">
         <i class="fas fa-bolt"></i> &nbsp; 
        <strong><?php echo Configure::read('Theme.title'); ?></strong>
      </a>
     <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> -->
      </button>
    </div>
  </div>
</header>
