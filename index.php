<?php
// Template Name: Empresas com desconto

get_header();
?>
	<main class="contato sobre" tabindex="-1" role="main">
	<!-- Breadcrumb -->
		<div class="breadcrumb d-none d-md-block">
			<div class="container">
				<div class="row">
					<div class="d-flex ml-5 pt-2 pt-md-0">
						<p class="mr-2"><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></p>
					 	<span class="mx-2"> > </span>
				 		<p><?php the_title(); ?></p>
					</div>
				</div>
			</div>
		</div>
	<!-- Breadcrumb -->

	<!-- Contato -->
		<section class="sucesso py-3">
			<div class="container">
				<h2 class="text-left py-sm-5 my-5 E-fadein">Contato</h2>
			</div>
		</section>
	<!-- End Contato -->
		<section class="main-contato mb-5">
			<div class="container pb-4">
  
  <table id="minhaTabela">
    <thead>
      <tr>
        <th>Nome</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ABCVM</td>
      </tr>
      <tr>
        <td>ABN Amro</td>
      </tr>
      <tr>
        <td>Acqua Vero</td>
      </tr>
      <tr>
        <td>ACT / Ápice Investimentos</td>
      </tr>
      <tr>
        <td>ADAMA Brasil</td>
      </tr>
      <tr>
        <td>AGECEF -SP</td>
      </tr>
      <tr>
        <td>AGECEF/TM</td>
      </tr>
      <tr>
        <td>Agencia Estado</td>
      </tr>
      <tr>
        <td>Aggrega beneficios</td>
      </tr>
      <tr>
        <td>Aggrega Investimentos</td>
      </tr>
      <tr>
        <td>Agia Investimentos</td>
      </tr>
      <tr>
        <td>Ágora Investimentos</td>
      </tr>
      <tr>
        <td>Alaska Asset</td>
      </tr>
      <tr>
        <td>Albion Capital</td>
      </tr>
      <tr>
        <td>Alcance Investimentos</td>
      </tr>
      <tr>
        <td>Alphamar Investimentos</td>
      </tr>
      <tr>
        <td>Alta Vista Investimentos</td>
      </tr>
      <tr>
        <td>Alvarez And Marsal</td>
      </tr>
      <tr>
        <td>AndBank</td>
      </tr>
      <tr>
        <td>Andrade Gutierrez Participações</td>
      </tr>
      <tr>
        <td>APCEF/SP</td>
      </tr>
      <tr>
        <td>Aplix Investimentos</td>
      </tr>
      <tr>
        <td>Apollo Investimentos</td>
      </tr>
      <tr>
        <td>APOLO ENERGIA</td>
      </tr>
      <tr>
        <td>AQUA Wealth Managemen</td>
      </tr>
      <tr>
        <td>Aquiraz Investimentos</td>
      </tr>
      <tr>
        <td>Arcani Investimentos</td>
      </tr>
      <tr>
        <td>Argentum Investimentos</td>
      </tr>
      <tr>
        <td>ARJ Capital</td>
      </tr>
      <tr>
        <td>Artesanal Investimentos</td>
      </tr>
      <tr>
        <td>Asa Investments</td>
      </tr>
      <tr>
        <td>Asset 1</td>
      </tr>
      <tr>
        <td>Astella Invest</td>
      </tr>
      <tr>
        <td>Ativa Investimentos</td>
      </tr>
      <tr>
        <td>Augme Capital</td>
      </tr>
      <tr>
        <td>A55</td>
      </tr>
      <tr>
        <td>A7 CAPITAL AGENTES AUTÔNOMOS DE INVESTIMENTOS LTDA</td>
      </tr>
      <tr>
        <td>Baluarte Capital</td>
      </tr>
      <tr>
        <td>Banco Alfa</td>
      </tr>

    </tbody>
  </table>
			</div>
</section>
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  <script>
 
 
    $(document).ready(function(){
      $('#minhaTabela').DataTable({
        	"language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar Empresa:",
                
            }
        });
  });




  </script>
  


</main>

<?php
get_footer();
