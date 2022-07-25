@extends('layouts.template.index') 

@section('title','Fazer Laudo')



@section('content')

<div class="wrapper">
	<div class="content-wrapper">
		<div class="content">
			<div class="container">   
				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Laudo Técnico</h3>
						</div>
						<form action="{{route('laudo')}}" method="post" enctype="multipart/form-data" style="padding-left: 25px;">
							<div class="card-body">
								@csrf
								<div class="form-group">
									<p for="numeroPatrimonio">Numero do Patrimonio:</p>
									<input type="text" class="form-control form-control-sm" required id="numeroPatrimonio" name="numeroPatrimonio">
								</div>
								<div class="form-group">
									<p for="name">Responsável pelo Bem:</p>
									<input type="text" class="form-control" required id="name" name="name" >
								</div>
								<div class="form-group">
									<p for="matriculaSiape">Matricula Siape:</p>
									<input type="text" class="form-control form-control-sm" required id="matriculaSiape" name="matriculaSiape">
								</div>
								<div class="form-group">
									<p for="lotacao">Lotação:</p>
									<input type="text" class="form-control" required id="lotacao" name="lotacao">
								</div>
								<div class="form-group">
									<p for="tipoEquipamento">Tipo de Equipamento:</p>
									<input type="text" class="form-control form-control-sm" required id="tipoEquipamento" name="tipoEquipamento">
								</div>
								<div class="form-group">
									<p for="marca">Marca:</p>
									<input type="text" class="form-control form-control-sm" required id="marca" name="marca">
								</div>
								<div class="form-group">
									<p for="modelo">Modelo:</p>
									<input type="text" class="form-control form-control-sm" required id="modelo" name="modelo">
								</div>
								<div class="form-group">
									<p for="local">Local onde o bem esta:</p>
									<input type="text" class="form-control form-control-sm" required id="local" name="local">
								</div>
								<div class="form-group">
									<p>Funcionamento</p>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="funcionamento" value="01" required>
										<p class="card-description">Funcionando</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="funcionamento" value="02">
										<p class="card-description">Não Funcionando</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="funcionamento" value="03">
										<p class="card-description">Parcialmente funcionando</p>
									</div>
								</div>
								<div class="form-group">
									<p>Emcaminhamento</p>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="encaminhamento" value="01" required>
										<p class="card-description">Sem Solucao Técnica Local</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="encaminhamento" value="02">
										<p class="card-description">Com Solucao Técnica Estimada, Mediante Avalição de Custo</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="encaminhamento" value="03">
										<p class="card-description">Com Solucao Técnica Local e Sem Custo</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="encaminhamento" value="04">
										<p class="card-description">Com Solucao Técnica Local, Mediante Compra de Peças</p>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="encaminhamento" value="05">
										<p class="card-description">Não se Aplica</p>
									</div>
								</div>
								<div class="form-group">
									<p for="responsavelLaudo">Responsável pelo Laudo:</p>
									<input type="text" class="form-control" required id="responsavelLaudo" name="responsavelLaudo">
								</div>
								<div class="form-group">
									<p>Observações:</p>
									<textarea class="form-control form-control-sm" rows="3" required id="obs" name="obs"></textarea>
								</div>
							</div>							
		                    <div class="form-group">
		                        <label>Imagens opcional:</label>
		                        <input class="form-control" type="file" name="pic1" accept="image/*"> 
		                        <input class="form-control" type="file" name="pic2" accept="image/*"> 
		                        <input class="form-control" type="file" name="pic3" accept="image/*"> 
		                    </div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Gerar Parecer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection('content')

