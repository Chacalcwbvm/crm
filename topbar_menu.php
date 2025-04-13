<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: mcr, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        background-image: url('');
            background-size: cover;
            background-attachment: fixed;
			margin-top: 60px;
        }
        .topbar {
            background-image: url('topbar.png');
		   background-color: rgba(255, 255, 255, 0.8);
            color: white;
            padding: 20px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1.8);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
			
        }
        .topbar h1 {
            margin: 0;
            font-size: 14px;
        }
        .topbar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }
        .topbar nav ul li {
            position: relative;
        }
        .topbar nav ul li a, .dropbtn {
            font-family: Verdana;
			color: white;
            text-decoration: none;
            font-size: 14px;
			font-style: bold;	
            padding: 10px 20px;
            display: block;
            background-color: rgba(78, 13, 105, 0.3)
            border: none;
            cursor: pointer;
        }
        .topbar nav ul li a:hover, .dropbtn:hover {
            background-color: #555;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #343a40;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #555;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="topbar">
        <h1> </h1>
        <nav>
            <ul>
			<DIV>
			<class="bdas">
			</DIV>
			<li>
                <img src="login.png" width="44px" height="36px"/> </LI>
				<LI>
				<a href="dashboard.php"><img src="login.png" position="center" padding="20px" width="34px" height="26px" />  Dashboard/Home</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Cadastro</button>
                    <div class="dropdown-content">
                        <a href="form_atendimentos.php">Atendimento</a>
                        <a href="cadastro_cliente_form.php">Clientes</a>
                        <a href="cadastro_dependente.php">Dependentes</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Manutenção</button>
                    <div class="dropdown-content">
                        <a href="clientes.php">Cliente</a>
                        <a href="dependentes.php">Dependentes</a>
                        <a href="tipos_pagamento.php">Formas de Pagamento</a>
                        <a href="procedimentos.php">Procedimentos</a>
                        <a href="atendimentos.php">Atendimento</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Relatórios</button>
                    <div class="dropdown-content">
                   <a href="/aa_04_krcrm/new/rel/relatorio_atendimentos.php">Geral</a>
                        <a href="/aa_04_krcrm/new/rel/relatorio_analitico.php">Analitico</a>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="dropbtn">Admin</button>
                    <div class="dropdown-content">
                       <a href="user_management.php">Usuários</a>
                    </div>
                </li>
                <li><a href="logout.php" class="voltar">Sair</a></li>
                <!--<li><a href="javascript:history.back()" class="voltar">Voltar</a></li> -->
            </ul>
        </nav>
    </div>
</body>
</html>