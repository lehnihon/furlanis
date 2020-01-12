<?php get_header(); ?>

<div id="header-search">
  <div class="container">
    <h2>Encontre o imóvel ideal para você</h2>
    <form class="row" method="GET" name="epl_search" action="#">
      <input type="hidden" name="action" value="epl_search">
      <div class="col-sm mb-1 mb-sm-0">
        <select name="post_type" class="form-control">
          <option value="property">Venda</option>
          <option value="rental">Locação</option>
        </select>
      </div>
      <div class="col-sm mb-1 mb-sm-0">
        <select name="property_category" class="form-control">
          <option value="">Tipo</option>
          <option value="Casa">Casa</option>
          <option value="Apartamento">Apartamento</option>
          <option value="Predio">Prédio</option>
          <option value="CasaCondominio">Casa em condomínio</option>
          <option value="Sobrado">Sobrado</option>
          <option value="Galpao">Galpão</option>
          <option value="Sala">Sala</option>
          <option value="Salao">Salão</option>
          <option value="Ponto">Ponto</option>
          <option value="Terreno">Terreno</option>
          <option value="Chacara">Chácara</option>
          <option value="Sitio">Sítio</option>
          <option value="Outro">Outro</option>
        </select>
      </div>
      <div class="col-sm mb-1 mb-sm-0">
        <select name="property_location" class="form-control">
          <option value="">Bairro</option>
          <?php
          $locations = get_terms( array(
            'taxonomy' => 'location'
          ) );
          foreach($locations as $location){
          ?>
            <option value="<?php echo $location->term_id; ?>"><?php echo $location->name; ?></option>
          <?php  
          }
          ?>
        </select>
      </div>
      <div class="col-sm mb-1 mb-sm-0">
        <select name="property_price_from" class="form-control">
          <option value="">Valor Inicial</option>
          <option value="500">R$500</option>
          <option value="1000">R$1.000</option>
          <option value="1500">R$1.500</option>
          <option value="2000">R$2.000</option>
          <option value="2500">R$2.500</option>
          <option value="5000">R$5.000</option>
          <option value="10000">R$10.000</option>
          <option value="50000">R$50.000</option>
          <option value="100000">R$100.000</option>
          <option value="150000">R$150.000</option>
          <option value="200000">R$200.000</option>
          <option value="250000">R$250.000</option>
          <option value="300000">R$300.000</option>
          <option value="350000">R$350.000</option>
          <option value="400000">R$400.000</option>
          <option value="450000">R$450.000</option>
          <option value="500000">R$500.000</option>
          <option value="600000">R$600.000</option>
          <option value="700000">R$700.000</option>
          <option value="800000">R$800.000</option>
          <option value="900000">R$900.000</option>
          <option value="1000000">R$1.000.000</option>
          <option value="2000000">R$2.000.000</option>
        </select>
      </div>
      <div class="col-sm mb-1 mb-sm-0">
        <select name="property_price_to" class="form-control">
          <option value="">Valor Final</option>
          <option value="500">R$500</option>
          <option value="1000">R$1.000</option>
          <option value="1500">R$1.500</option>
          <option value="2000">R$2.000</option>
          <option value="2500">R$2.500</option>
          <option value="5000">R$5.000</option>
          <option value="10000">R$10.000</option>
          <option value="50000">R$50.000</option>
          <option value="100000">R$100.000</option>
          <option value="150000">R$150.000</option>
          <option value="200000">R$200.000</option>
          <option value="250000">R$250.000</option>
          <option value="300000">R$300.000</option>
          <option value="350000">R$350.000</option>
          <option value="400000">R$400.000</option>
          <option value="450000">R$450.000</option>
          <option value="500000">R$500.000</option>
          <option value="600000">R$600.000</option>
          <option value="700000">R$700.000</option>
          <option value="800000">R$800.000</option>
          <option value="900000">R$900.000</option>
          <option value="1000000">R$1.000.000</option>
          <option value="2000000">R$2.000.000</option>
          <option value="2000000">R$5.000.000</option>
        </select>
      </div>
      <div class="col-sm">
        <input type="submit" value="Pesquisar">
      </div>
    </div>
  </div> 
</div>
<div id="page">
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-4 mt-4">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/banner.jpg"; ?>" />
        </div>
        <div class="col-sm-4">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/categoria.jpg"; ?>" />
        </div>
        <div class="col-sm-4">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/categoria.jpg"; ?>" />
        </div>
        <div class="col-sm-4">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/categoria.jpg"; ?>" />
        </div>
      </div>
    </div>
  </div>
  <div class="properties mb-5">
    <div class="container">
      <h2 class="mt-5 mb-4">Locação Apartamentos</h2>
      <?php
      echo do_shortcode('[listing]');
      ?>
      <h2 class="mt-5 mb-4">Vendas Apartamentos</h2>
      <?php
      echo do_shortcode('[listing]');
      ?>
    </div>
  </div>
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="row no-gutters">
            <div class="col-auto">
              <img class="mt-3" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/receba.png"; ?>" />
            </div>
            <div class="col-auto ml-3 news-receba">
              <span>Receba nossas novidades<br>
              <strong>Enviamos para o seu e-mail</strong></span>
            </div>
          </div>
        </div>
        <div class="col-sm-2 ml-sm-auto">
          <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="E-mail">
        </div>
        <div class="col-sm-2">
          <input type="submit" class="btn-enviar" value="Enviar">
        </div>
      </div>
    </div>
  </div>
  <div class="properties mb-5">
    <div class="container">
      <h2 class="mt-5 mb-4">Locação Galpões</h2>
      <?php
      echo do_shortcode('[listing]');
      ?>
      <h2 class="mt-5 mb-4">Vendas Terrenos</h2>
      <?php
      echo do_shortcode('[listing]');
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
