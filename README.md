# Gerencia-Obras
Sistema para gerenciamento de obras

2017
ETAPA: 
 LEVANTAMENTO DE REQUISITOS 
	
Esta etapa corresponde à aquisição e análise de requisitos para o projeto de sistema proposto no âmbito da disciplina em causa.


I - Introdução  

		O projeto propõe desenvolver um sistema web com design responsivo para gerenciamento de obras. Para esta fase do projeto foram  utilizados duas  técnicas de levantamento de requisitos de sistema: 
 Entrevistas - Um membro da equipe conversou com o cliente, para levantar dados e esclarecer alguns pontos cruciais para o projeto.  
 Revisão de documentação - Com base nas planilhas fornecidas pelo cliente foram coletados os dados que serviram de base para a criação do sistema de gerenciamento de obras. 






Definição do Projeto de Gerenciamento de Obra

O projeto consiste em um software para gerenciamento, planejamento e execução de projetos de construção civil. Sendo usado como base modelos administrativos amplamente adotados no mercado, o cliente estará apto para realizar todos os processos que uma obra exige. O sistema irá prover uma painel administrativo que será acesso mediante um CRUD pelos gerentes de cada obra. O mesmo vai poder gerenciar mais de uma obra de construção civil em simultâneo.

Objetivos Gerais

O sistema irá criar orçamentos para obras de construção civil e tratar dos processos de execução da obra, bem como: folha de pagamento dos funcionários, estoque de materiais e de patrimônio. O cliente irá ter conhecimento do andamento dos processos e poderá comparar o planejamento com o que está sendo executado.  

Membros do envolvidos
Francisco Matias - Programador	 
Hicaro Vinicius -  Projetista de Banco de Dados, Product Owner
Idelfrides Jorge - Analista de Sistemas, Scrum Master
Dener Davi - Projetista de Interface, Revisor 
Glhazyanno - Arquiteto de Software 










Requisitos Funcionais

O sistema deve tratar acessos concorrentes do sistema
Garantir a atomicidade das operações.
Validar todas as operações realizadas internamente, como atualizações de processos cadastrados.
Conseguir tratar os possíveis erros dos usuários Registro de não conformidades.
O sistema deve ter um painel adm (PADM).
O sistema deve ter visão do cliente e de usuário (ADM)
O acesso ao PADM será feito mediante um CRUD
O sistema poderá gerenciar várias obras em concomitante   
 Deve ser alimentado com dados de cada obra por meio de PADM 
 O sistema deverá  gerar relatório mensal:
de despesas
de progresso
de defeitos 
de folha de pagamento
de estoque 


Requisitos não-funcionais: O sistema deverá ser composto dos seguintes módulos:

Orçamento das Obras.
Recursos Humanos para gerenciar a demanda e a folha de pagamento dos funcionários.
Patrimonial com o levantamento dos materiais e equipamentos, bem como relatórios de perda e solicitações para a troca do mesmo.
Segurança do trabalho, para solicitação de equipamentos de proteção individual, para relatório de ocorrência de situações perigosas ou acidentes.
Administração de obra para estoque, controle de despesas , controle de cronograma e de tarefas.
O sistema deverá utilizar de Design responsivo nas interfaces gráficas.
O sistema deverá ser acessado completamente via browser HTTPS/HTML. 
O sistema deverá garantir que os dados estejam protegidos de acessos não autorizados.
O sistema deverá conter dados do SEINFRA como modelo de orçamento e gerenciamento geral de obras.


6. Requisitos de Sistema

Servidor Apache processando a linguagem PHP na versão 7.1
Necessário para os dispositivos de acesso um mínimo de 512 MB de memória RAM.
Acesso deve ser feito pelos navegadores Google Chrome na versão mínima 60.0.3112.90, Mozilla Firefox na versão mínima 52.0.2
O servidor deve ter suporte a banco de dados MySQL versão 6.3
Adotar protocolo https para comunicação com o servidor


      7. Proposta ao cliente
Status dos processos desenvolvidos na obra, como parte do cronograma de entrega do projeto

