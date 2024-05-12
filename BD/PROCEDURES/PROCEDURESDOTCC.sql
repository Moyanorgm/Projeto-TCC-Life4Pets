use ConsultaPet;
drop procedure Idade_Cliente;

/*PROCEDURE PARA PESQUISAR A LOCALIDADE DA CLÍNICA*/

DELIMITER $$

CREATE PROCEDURE Idade_Cliente()
BEGIN
    DECLARE existeColuna INT;


    SELECT COUNT(*) INTO existeColuna
    FROM information_schema.columns
    WHERE table_name = 'tb_cliente' AND column_name = 'maiormenor';


    IF existeColuna = 0 THEN
        ALTER TABLE tb_cliente
        ADD COLUMN maiormenor CHAR(5) NOT NULL DEFAULT 'maior';
    END IF;


    UPDATE tb_cliente
    SET maiormenor = CASE WHEN idade < 18 THEN 'menor' ELSE 'maior' END
    WHERE id between 1 and 1000000; 


    SELECT nome, idade, maiormenor FROM tb_cliente;
END $$

DELIMITER ;

call Idade_Cliente();

DELIMITER $$




/*PROCEDURE QUE PESQUISA O RESPONSÁVEL DO ANIMAL E EM SEGUIDA VER O NÚMERO DE CONTATO*/
DELIMITER $$
CREATE PROCEDURE ResponsavelContato()
BEGIN
	DECLARE ViewExiste INT;
    
    SELECT COUNT(*) INTO ViewExiste from information_schema.views WHERE table_name = "vw_ResponsavelContato";
    
    SET @ProcedureView = '
        CREATE OR REPLACE VIEW vw_ResponsavelContato AS
        SELECT tb_paciente.animal as a ,tb_paciente.responsavel as r, tb_contatos.telefone as t
        FROM tb_paciente
        INNER JOIN tb_contatos ON tb_paciente.id = tb_contatos.id;
    ';

    PREPARE stmt FROM @ProcedureView;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;

    SELECT a ,r, t
    FROM vw_ResponsavelContato;
END $$
DELIMITER ;
DROP PROCEDURE IF EXISTS ResponsavelContato;
CALL ResponsavelContato();

-- PROCEDURE QUE MOSTRA ONDE O CLIENTE MORA

DELIMITER $$

DROP PROCEDURE IF EXISTS ClienteResidencia;
CREATE PROCEDURE ClienteResidencia()
BEGIN
    DECLARE ViewExists INT;


    SELECT COUNT(*) INTO ViewExists FROM information_schema.views WHERE table_name = 'vw_ClienteResidencia';

    IF ViewExists > 0 THEN

        SET @DropViewQuery = 'DROP VIEW vw_ClienteResidencia';
        PREPARE stmt FROM @DropViewQuery;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;


    SET @ProcedureView = 'CREATE VIEW vw_ClienteResidencia AS SELECT tb_estado.nm_estado as estado, tb_cidade.nm_cidade as cidade, tb_cliente.nome as nome FROM tb_estado INNER JOIN tb_cliente ON tb_estado.id = tb_cliente.id INNER JOIN tb_cidade ON tb_cidade.id = tb_cliente.id';
    PREPARE stmt FROM @ProcedureView;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;

    SELECT nome, cidade ,estado FROM vw_ClienteResidencia;
END $$

DELIMITER ;

CALL ClienteResidencia();

-- PROCEDURE QUE PESQUISA A CLINICA QUE O CLIENTE EFETUARA A CONSULTA

DROP PROCEDURE IF EXISTS ClinicaDestinoCliente;
DELIMITER $$
CREATE PROCEDURE ClinicaDestinoCliente()
begin
	declare ViewExiste INT;
    SELECT count(*) INTO ViewExiste from information_schema.views where table_name = "vw_ClinicaDestinoCliente";
    
    if ViewExiste > 0 then
    set @DropView = 'Drop view vw_ClinicaDestinoCliente';
    PREPARE stmt from @DropView;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
    end if;
    
    SET @ProcedureView = 'create or replace view vw_ClinicaDestinoCliente as select tb_cliente.nome as nomeCliente, tb_clinica.nm_unidade as nomeDestino from tb_cliente INNER JOIN tb_clinica ON tb_cliente.id = tb_clinica.id';
    
    PREPARE stmt from @ProcedureView;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
    
    SELECT nomeCliente, nomeDestino from vw_ClinicaDestinoCliente;
end $$
DELIMITER ;
call ClinicaDestinoCliente();

-- PROCEDURE QUE MOSTRA TODAS AS INFORMAÇÕES DE CADASTRO DO ANIMAL

drop procedure if exists Info_Animais;

DELIMITER $$

CREATE PROCEDURE Info_Animais()
BEGIN
    DECLARE ViewExiste INT;


    SELECT COUNT(*) INTO ViewExiste FROM information_schema.views WHERE table_name = 'vw_Info_Animais';


    IF ViewExiste > 0 THEN
        SET @DropView = 'DROP VIEW vw_Info_Animais';
        PREPARE stmt FROM @DropView;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

   
    SET @Vw = 'CREATE OR REPLACE VIEW vw_Info_Animais AS 
               SELECT tb_especie.ds_especie AS descricao, tb_racas.raca AS raca, tb_paciente.animal AS NomeAnimal 
               FROM tb_paciente 
               INNER JOIN tb_especie ON tb_paciente.id = tb_especie.id 
               INNER JOIN tb_racas ON tb_paciente.id = tb_racas.id';

    PREPARE stmt FROM @Vw;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;

   
    SELECT NomeAnimal, raca, descricao FROM vw_Info_Animais;
END $$

DELIMITER ;


CALL Info_Animais();

-- PROCEDURE QUE MOSTRA TODAS AS INFORMAÇÕES DE CADASTRO DO CLIENTE

drop procedure if exists CadastroCliente;
delimiter $$
	create procedure CadastroCliente()
    begin
		declare ViewExiste INT;
        
        select count(*) into ViewExiste from information_schema.views where table_name = 'vw_CadastroCliente';
        
        if ViewExiste > 0 then
			set @dropView = 'drop view vw_CadastroCliente';
            PREPARE stmt from @dropView;
            execute stmt;
            deallocate prepare stmt;
		end if;
        
		set @vw = 'create view vw_CadastroCliente as select tb_cliente.nome as nomeCli, tb_cliente.idade as idadeCli, 
        tb_cliente.documento_cpf as cpfCli, tb_paciente.animal as nomeAni from  tb_cliente INNER JOIN tb_paciente on tb_cliente.id = tb_paciente.id';
        
        PREPARE stmt from @vw;
            execute stmt;
            deallocate prepare stmt;
        
        select nomeCli, idadeCli, cpfCli, nomeAni from vw_CadastroCliente;
    end$$
delimiter ;

call CadastroCliente();

-- PROCEDURE QUE INSERE O CLIENTE NA TABELA DOS CLIENTES

drop procedure if exists InserirCliente;
delimiter $$
	create procedure InserirCliente()
    begin
		declare nome varchar(100);
        
		set @inserir = 'insert into tb_cliente(id, nome, idade, documento_cpf, paciente_id, contato_id, cidade_id, estado_id, maiormenor) values
        (40, ''felype'', 19, 12345678912, 10, 10, 10, 10, ''maior'')';
        
        prepare stmt from @inserir;
        execute stmt;
        deallocate prepare stmt;
        
        select * from tb_cliente;
    end $$;
delimiter ;

call InserirCliente();

-- PROCEDURE QUE POSSIBILITA A ALTERAÇÃO DO NOME DO CLIENTE CASO OCORRA ALGUM ENGANO

drop procedure if exists Update_Cliente;
delimiter $$
create procedure Update_Cliente()
begin

	set @atualizar = 'update tb_cliente set nome = ''Felype'' where id = 40';

	prepare stmt from @atualizar;
    execute stmt;
    deallocate prepare stmt;
    
    select * from tb_cliente;
end $$;
delimiter ;

call Update_Cliente();

-- PROCEDURE QUE REMOVE O CLIENTE DA LISTA CASO JÁ FOI ATENDIDO OU ALGO DO GÊNERO

drop procedure if exists Delete_Cliente;
delimiter $$
create procedure Delete_Cliente()
begin
	set @deletar = 'delete from tb_cliente where id = 40';
    
    prepare stmt from @deletar;
    execute stmt;
    deallocate prepare stmt;
    
    select * from tb_cliente;
end$$;
delimiter ;

call Delete_Cliente();

-- PROCEDURE QUE PROCURA DETERMINADO CLIENTE PERDIDO NA TABELA DOS CLIENTES

drop procedure if exists Encontrar_Cliente;
delimiter $$
create procedure Encontrar_Cliente()
begin
    select nome, idade, documento_cpf from tb_cliente where id = 10;
end$$;
delimiter ;

call Encontrar_Cliente();

-- PROCEDURE QUE MOSTRA TODAS AS INFORMAÇÕES DE CADASTRO DA CONSULTA A SER REALIZADA

drop procedure if exists Info_Consulta;
delimiter $$
create procedure Info_Consulta()
begin
	declare ViewExiste INT;
    
    SELECT COUNT(*) INTO ViewExiste FROM information_schema.views WHERE table_name = 'vw_Info_Consulta';
    
    if ViewExiste > 0 then
    set @DropView = 'drop view vw_Info_Consulta';
    prepare stmt from @DropView;
    execute stmt;
    deallocate prepare stmt;
	end if;
    
	set @ProcedureView = 'create view vw_Info_Consulta as select tb_consulta.ds_consulta as descricao, tb_consulta.dt_consulta as datas, tb_clinica.endereco as endereco, tb_clinica.nm_unidade as nomeDestino from tb_consulta INNER JOIN tb_clinica ON tb_consulta.id = tb_clinica.id';
    
    prepare stmt from @ProcedureView;
    execute stmt;
    deallocate prepare stmt;
    
    select descricao, datas, endereco, nomeDestino from vw_Info_Consulta;
end $$;
delimiter ;

call Info_Consulta();

-- PROCEDURE QUE MOSTRA TODAS AS INFORMAÇÕES DO CLIENTE, INCLUINDO ENDEREÇO E ETC

drop procedure if exists Info_Cliente;
delimiter $$
create procedure Info_Cliente()
begin
	declare ViewExiste INT;
    
    SELECT COUNT(*) INTO ViewExiste FROM information_schema.views WHERE table_name = 'vw_Info_Cliente';
    
    if ViewExiste > 0 then
    set @DropView = 'drop view vw_Info_Cliente';
    prepare stmt from @DropView;
    execute stmt;
    deallocate prepare stmt;
	end if;
    
	set @ProcedureView = 'create view vw_Info_Cliente as select tb_cliente.nome as nomeCli, tb_cliente.idade as idade, tb_cliente.documento_cpf as cpf,
    tb_contatos.email as email, tb_contatos.telefone as telefone, tb_estado.uf as uf, tb_cidade.nm_cidade as cidade, tb_consulta.dt_consulta as dataConsulta
    from tb_cliente INNER JOIN tb_contatos ON tb_cliente.id = tb_contatos.id INNER JOIN tb_estado ON tb_cliente.id = tb_estado.id INNER JOIN tb_cidade ON tb_cliente.id = tb_cidade.id 
    INNER JOIN tb_consulta ON tb_cliente.id = tb_consulta.id';
    
    prepare stmt from @ProcedureView;
    execute stmt;
    deallocate prepare stmt;
    
    select nomeCli, idade, cpf, email, telefone, uf, cidade, dataConsulta from vw_Info_Cliente;
end $$;
delimiter ;

call Info_Cliente();

-- PROCEDURE FEITA COM INTUITO DE REALIZAR PESQUISAS FUTURAS. PORCENTAGEM DE CLIENTES MENORES OU MAIORES DE IDADE.

drop procedure if exists PorcentagemMaiorMenorIdade;
delimiter $$
create procedure PorcentagemMaiorMenorIdade()
begin
	declare TotalDeClientes INT;
    declare TotalDeMenores INT;
    declare TotalDeMaiores INT;
    declare PorcentagemMenores DECIMAL(5,2);
    declare PorcentagemMaiores DECIMAL(5,2);
    
    select count(*) INTO TotalDeClientes from tb_cliente;
    
    select count(*) into TotalDeMenores from tb_cliente where idade < 18;
    
    select count(*) into TotalDeMaiores from tb_cliente where idade > 18;
    
    if TotalDeClientes > 0 then
    set PorcentagemMenores = least ((TotalDeMenores / TotalDeClientes) * 100, 100);
    set PorcentagemMaiores = least ((TotalDeMaiores / TotalDeClientes) * 100, 100);
    else
    set PorcentagemMenores = 0;
    set PorcentagemMaiores = 0;
    end if;
    
    select 
    
    TotalDeClientes as TotalDeClientes,
    TotalDeMenores as TotalDeMenores,
    TotalDeMaiores as TotalDeMaiores,
	PorcentagemMaiores as PorcentagemMaiores,
    PorcentagemMenores as PorcentagemMenores;
    
end $$;
delimiter ;

call PorcentagemMaiorMenorIdade;

-- PROCEDURE FEITA COM INTUITO DE REALIZAR PESQUISAS FUTURAS. PORCENTAGEM DE GATOS E CACHORROS QUE PASSAM PELO NOSSO SERVIÇO.

drop procedure if exists PorcentagemCachorroGato;
delimiter $$
create procedure PorcentagemCachorroGato()
begin
	declare TotalDeAnimais INT;
	declare TotalDeGatos INT;
    declare TotalDeCachorros INT;
    declare PorcentagemGatos DECIMAL(5,2);
    declare PorcentagemCachorros DECIMAL(5,2);
    
    select count(*) INTO TotalDeAnimais from tb_especie;
    
    select count(*) into TotalDeCachorros from tb_especie where ds_especie = 'cachorro';
    
    set TotalDeGatos = TotalDeAnimais - TotalDeCachorros;
    
    if TotalDeAnimais > 0 then
    set PorcentagemGatos = least ((TotalDeGatos / TotalDeAnimais) * 100, 100);
    set PorcentagemCachorros = least ((TotalDeCachorros / TotalDeAnimais) * 100, 100);
    else
    set PorcentagemGatos = 0;
    set PorcentagemCachorros = 0;
    
    end if;
    
    select 
    
	TotalDeAnimais as TotalDeAnimais,
    TotalDeGatos as TotalDeGatos,
    TotalDeCachorros as TotalDeCachorros,
    PorcentagemCachorros as PorcentagemCachorros,
    PorcentagemGatos as PorcentagemGatos;
    
end $$;
delimiter ;

call PorcentagemCachorroGato;

SHOW PROCEDURE STATUS WHERE Db = 'ConsultaPet';






