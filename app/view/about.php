<?php
$this->title = 'About';
$this->layout('layout.master');
$this->section('body', function(){ ?>
     <div class="jumbotron">
          <h1>Look ma, my about page!</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
     </div>     
     <div class="row marketing">
          <div class="col-lg-6">
               <h4>Subheading</h4>
               <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          
               <h4>Subheading</h4>
               <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
          
               <h4>Subheading</h4>
               <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>     
          <div class="col-lg-6">
               <h4>Subheading</h4>
               <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
               
               <h4>Subheading</h4>
               <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
               
               <h4>Subheading</h4>
               <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>
     </div>
<?php });
