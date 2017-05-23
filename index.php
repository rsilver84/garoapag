<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Painel de controle</h1>
<hr />
<h3>Usuários</h3>
<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="users/add.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-users fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Usuário</p>
				</div>
			</div>
		</a>
	</div>


	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="members/add.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Pagamento</p>
				</div>
			</div>
		</a>
	</div>
	
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="receipts/add.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-file-text fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Recibos</p>
				</div>
			</div>
		</a>
	</div>
	
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="cashflow" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-table fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Extrato</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr />
<h3>Acesso Restrito</h3>
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="receipts/audit.php" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-secret fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Fiscal</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="admin" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-gears fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Admin</p>
				</div>
			</div>
		</a>
	</div>
</div>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>