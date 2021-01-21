@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-success card-header-icon">
				<div class="card-icon" style="background: linear-gradient(60deg, #BFA15F, #ad7909);box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(191, 161, 95, 0.4);">
					<i class="material-icons">chat bubble</i>
				</div>
				<h4 class="card-title">Editar</h4>
                {{-- <a href="{{ url("/relatorio/create")}}" class="btn btn-dourado btn-just-icon btn-round" style="float: right;top: -33px;right: -13px;"><i class="mdi mdi-plus" rel="tooltip" data-placement="left" title="Novo Relatorio"></i></a>					 --}}
			</div>
			<div class="card-body">
			
				<form action="{{ url('/unidade') }}" method="POST" id="form_relatorio">  
					{{ csrf_field() }}

					{{--    T.I    --}}
					<h2>T.I</h2>
			   <!-- =============  A  ============ -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[0]->titulo}}</label>
					</div>

                  <div class="form-check form-check-radio">
                     <label for="pergunta1"></label> 
                     <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="post-format" id="post-format-gallery">Sim
                         <span class="circle">
                             <span class="check"></span>
                         </span>
                     </label>
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="post-format" checked>Não
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
				 </div>
				<div class="row" id="gallery-box">
					<div class="form-group box_funcionario">
						<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-3 col-lg-3">
						  <input type="text" class="form-control" placeholder="N° Chamado">
						</div>
						<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-3 col-lg-3">
						  <input type="text" class="form-control" placeholder="Obs">
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-sm-6 col-lg-6">
							<a class="btn btn-primary btn-fab btn-fab-mini btn-round">
								<i class="material-icons">favorite</i>
							</a>
						</div>
					  </div>
				</div>

                     {{-- <div class="row" id="gallery-box">
                        <div>
                           <div class="form-group">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-3 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-3 col-lg-3">
                                <input type="text" class="form-control" placeholder="Obs">
							  </div>
							  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-sm-6 col-lg-6">
                                <a  href="/home" class="btn btn-primary btn-fab btn-fab-mini btn-round">
									<i class="material-icons">favorite</i>
								  </a>
                              </div>
                            </div>
                        </div>
                     </div> --}}
					<!-- ===========  A  ========== -->

					<!-- ===========  B  ========== -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[1]->titulo}}</label>
					</div>

                	<div class="form-check form-check-radio">
                     	<label for="pergunta2"></label> 
                     	<label class="form-check-label">
                        	<input class="form-check-input" type="radio" name="pergunta2" id="pergunta2-gallery">Sim
                         	<span class="circle">
                            	<span class="check"></span>
	                        </span>
      	   	            </label>
                     	<label class="form-check-label">
                        	<input class="form-check-input" type="radio" name="pergunta2" checked>Não
                        	<span class="circle">
                        	    <span class="check"></span>
                        	</span>
                    	</label>
                	</div>
                     <div class="row" id="pergunta2_gallery-box">
                        <div>
                           <div class="form-row">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Obs">
                              </div>
                              
                            </div>
                        </div>
                     </div>
					<!-- ===========  B  ========== -->

					<!-- ===========  C  ========== -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[2]->titulo}}</label>
					  </div>

                  <div class="form-check form-check-radio">
                     <label for="pergunta3"></label> 
                     <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3-gallery">Sim
                         <span class="circle">
                             <span class="check"></span>
                         </span>
                     </label>
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="pergunta3" checked>Não
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                 </div>
                     <div class="row" id="pergunta3_gallery-box">
                        <div>
                           <div class="form-row">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Obs">
                              </div>
                              
                            </div>
                        </div>
                     </div>
					<!-- ===========  C  ========== -->

					<!-- ===========  D  ========== -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[3]->titulo}}</label>
					  </div>

                  <div class="form-check form-check-radio">
                     <label for="pergunta4"></label> 
                     <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4-gallery">Sim
                         <span class="circle">
                             <span class="check"></span>
                         </span>
                     </label>
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="pergunta4" checked>Não
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                 </div>
                     <div class="row" id="pergunta4_gallery-box">
                        <div>
                           <div class="form-row">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Obs">
                              </div>
                              
                            </div>
                        </div>
                     </div>
					<!-- ===========  D  ========== -->

					<!-- ===========  E  ========== -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[4]->titulo}}</label>
					  </div>

                  <div class="form-check form-check-radio">
                     <label for="pergunta5"></label> 
                     <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="pergunta5" id="pergunta5-gallery">Sim
                         <span class="circle">
                             <span class="check"></span>
                         </span>
                     </label>
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="pergunta5" checked>Não
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                 </div>
                     <div class="row" id="pergunta5_gallery-box">
                        <div>
                           <div class="form-row">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Obs">
                              </div>
                              
                            </div>
                        </div>
                     </div>
					<!-- ===========  E  ========== -->

					<!-- ===========  F  ========== -->
					<div class="form-group">
						<label for="exampleFormControlInput1">{{$perguntas[5]->titulo}}</label>
					  </div>

                  <div class="form-check form-check-radio">
                     <label for="pergunta6"></label> 
                     <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="pergunta6" id="pergunta6-gallery">Sim
                         <span class="circle">
                             <span class="check"></span>
                         </span>
                     </label>
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="pergunta6" checked>Não
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                 </div>
                     <div class="row" id="pergunta6_gallery-box">
                        <div>
                           <div class="form-row">
                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-sm-6 col-lg-3">
                                <input type="text" class="form-control" placeholder="N° Chamado">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Obs">
                              </div>
                              
                            </div>
                        </div>
                     </div>
					<!-- ===========  F  ========== -->
					
					{{-- <div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="material-icons">local_hospital</i>
									</span>
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group label-floating has-roxo is-empty">
											<label class="control-label" style="font-size: 11.7px;">Nome da Unidade</label>
											<input id="nome" name="nome" type="text" class="form-control error" value="">
										</div>		
									</div>					
								</div>
							</div>
						</div> --}}


					{{--  T.I Fim  --}}
					
					{{--  Atenção Basica   --}}
					<h2>Atenção Basica</h2>

					{{--  Relatorio Fim  --}}

					{{--  Infraestrutura Predial   --}}
					<h2>Infraestrutura Predial</h2>

					{{--  Relatorio Fim  --}}

					{{--  Almoxarifado   --}}
					<h2>Almoxarifado</h2>

					{{--  Relatorio Fim  --}}

					{{--  Odontologia   --}}
					<h2>Odontologia</h2>

					{{--  Relatorio Fim  --}}

					{{--  Farmacia   --}}
					<h2>Farmacia</h2>

					{{--  Relatorio Fim  --}}


               		
                    <!-- ============================BOTOES============================ -->
					<div class="row">
						<center>
							<button type="submit" id="enviar-relatorio" class="botoes-acao btn btn-round btn-success enviar-relatorio">
								<span class="icone-botoes-acao mdi mdi-send"></span>
								<span class="texto-botoes-acao"> ENVIAR </span>
								<div class="ripple-container"></div>
							</button>
						
							<button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary">
								<span class="icone-botoes-acao mdi mdi-backburger"></span>   
								<span class="texto-botoes-acao"> CANCELAR </span>
								<div class="ripple-container"></div>
							</button>
						</center>
					</div>
					<!-- ============================FIM BOTOES============================ -->
                </form>
  


        

		   </div>
	   </div>
   </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$(function(){
		$('body').submit(function(event){
			if ($(this).hasClass('enviar-relatorio')) {
				event.preventDefault();
			}
			else {
				$(this).find(':submit').html('<i class="fa fa-spinner fa-spin"></i>');
				$(this).addClass('enviar-relatorio');
			}
		});
		
		// ---------------ESSE CARA AQUI É IMPORTANTE-----------------------
		$('.clonador').click(function(){
			    $clone = $('.box_funcionario.hide').clone(true);
			    $clone.removeClass('hide');
			    $('#funcionario').append($clone);
		});

		$('.btn_remove').click(function(){
			$(this).parents('.box_funcionario').remove();
		});
		// -----------------SOCORROOOOOOOOOOOOOOOOOOOOOOO--------------------

		$("#btn_cancelar").click(function(){
		  event.preventDefault();
		  window.location.href='/home';
	  });


     $('input[name=post-format]').on('click init-post-format', function() {
        $('#gallery-box').toggle($('#post-format-gallery').prop('checked'));
      }).trigger('init-post-format');

	  $('input[name=pergunta2]').on('click init-pergunta2', function() {
        $('#pergunta2_gallery-box').toggle($('#pergunta2-gallery').prop('checked'));
      }).trigger('init-pergunta2');

	  $('input[name=pergunta3]').on('click init-pergunta3', function() {
        $('#pergunta3_gallery-box').toggle($('#pergunta3-gallery').prop('checked'));
      }).trigger('init-pergunta3');

	  $('input[name=pergunta4]').on('click init-pergunta4', function() {
        $('#pergunta4_gallery-box').toggle($('#pergunta4-gallery').prop('checked'));
      }).trigger('init-pergunta4');

	  $('input[name=pergunta5]').on('click init-pergunta5', function() {
        $('#pergunta5_gallery-box').toggle($('#pergunta5-gallery').prop('checked'));
      }).trigger('init-pergunta5');

	  $('input[name=pergunta6]').on('click init-pergunta6', function() {
        $('#pergunta6_gallery-box').toggle($('#pergunta6-gallery').prop('checked'));
      }).trigger('init-pergunta6');

	});
	
</script>

@endpush
