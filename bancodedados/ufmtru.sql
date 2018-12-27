-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Dez-2018 às 22:41
-- Versão do servidor: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ufmtru`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `registro_adm` int(11) NOT NULL,
  `Pessoa_cpf` int(11) NOT NULL,
  `Pessoa_digital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adminstrador_atualiza_cardapio`
--

CREATE TABLE `adminstrador_atualiza_cardapio` (
  `cardapio_cardapio_Id` int(11) NOT NULL,
  `administrador_registro_adm` int(11) NOT NULL,
  `Data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `rga` int(11) NOT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `staus` varchar(8) NOT NULL,
  `limitemax` decimal(5,2) DEFAULT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `usuario_Pessoa_cpf` int(11) NOT NULL,
  `usuario_Pessoa_digital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliar`
--

CREATE TABLE `avaliar` (
  `avaliar_Id` int(11) NOT NULL,
  `Pessoa_cpf` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `cardapio_Id` int(11) NOT NULL,
  `data_cardapio` datetime NOT NULL,
  `descriçao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_movimento`
--

CREATE TABLE `categoria_movimento` (
  `horario_in` int(11) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `name_categoria` varchar(20) NOT NULL,
  `horario_fim` int(11) DEFAULT NULL,
  `valor_mov` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento`
--

CREATE TABLE `movimento` (
  `numero _mov` int(11) NOT NULL,
  `data_mov` date DEFAULT NULL,
  `quantidade_refeicao` int(11) DEFAULT NULL,
  `quantidade_momento` int(11) DEFAULT NULL,
  `categoria_movimento_categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Pessoa`
--

CREATE TABLE `Pessoa` (
  `cpf` int(11) NOT NULL,
  `digital` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `Senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo`
--

CREATE TABLE `saldo` (
  `usuario_Pessoa_cpf` int(11) NOT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `quantidade` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidor`
--

CREATE TABLE `servidor` (
  `registro_sev` int(11) NOT NULL,
  `funcao` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `limitemax` decimal(5,2) NOT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `usuario_Pessoa_cpf` int(11) NOT NULL,
  `usuario_Pessoa_digital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `idusuario` int(3) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(9) NOT NULL,
  `perfil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`idusuario`, `nome`, `usuario`, `senha`, `perfil`) VALUES
(1, 'gesser.paixao', 'gesser.paixao', '1234', 1),
(2, 'tiago.arruda', 'tiago.arruda', '1234', 1),
(3, 'andre.santana', 'andre.santana', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `categoria` int(11) NOT NULL,
  `Pessoa_cpf` int(11) NOT NULL,
  `Pessoa_digital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_acessa_movimento`
--

CREATE TABLE `usuario_acessa_movimento` (
  `movimento_numero _mov` int(11) NOT NULL,
  `movimento_categoria_movimento_categoria_id` int(11) NOT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `usuario_Pessoa_cpf` int(11) NOT NULL,
  `usuario_Pessoa_digital` int(11) NOT NULL,
  `data_acesso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `numero_ven` int(11) NOT NULL,
  `valor_compra` decimal(5,2) DEFAULT NULL,
  `data_ven` date DEFAULT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `usuario_Pessoa_cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitante`
--

CREATE TABLE `visitante` (
  `visitante_id` int(11) NOT NULL,
  `limitemax` decimal(5,2) DEFAULT NULL,
  `usuario_categoria` int(11) NOT NULL,
  `usuario_Pessoa_cpf` int(11) NOT NULL,
  `usuario_Pessoa_digital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`registro_adm`,`Pessoa_cpf`,`Pessoa_digital`),
  ADD KEY `fk_administrador_Pessoa1_idx` (`Pessoa_cpf`,`Pessoa_digital`);

--
-- Indexes for table `adminstrador_atualiza_cardapio`
--
ALTER TABLE `adminstrador_atualiza_cardapio`
  ADD PRIMARY KEY (`cardapio_cardapio_Id`,`administrador_registro_adm`),
  ADD KEY `fk_adminstrador_atualiza_cardapio_cardapio1_idx` (`cardapio_cardapio_Id`),
  ADD KEY `fk_adminstrador_atualiza_cardapio_administrador1_idx` (`administrador_registro_adm`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`rga`,`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`),
  ADD UNIQUE KEY `rga_UNIQUE` (`rga`),
  ADD KEY `fk_aluno_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`);

--
-- Indexes for table `avaliar`
--
ALTER TABLE `avaliar`
  ADD PRIMARY KEY (`avaliar_Id`,`Pessoa_cpf`),
  ADD KEY `fk_avaliar_Pessoa1_idx` (`Pessoa_cpf`);

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`cardapio_Id`),
  ADD UNIQUE KEY `cardapio_Id_UNIQUE` (`cardapio_Id`);

--
-- Indexes for table `categoria_movimento`
--
ALTER TABLE `categoria_movimento`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `movimento`
--
ALTER TABLE `movimento`
  ADD PRIMARY KEY (`numero _mov`,`categoria_movimento_categoria_id`),
  ADD UNIQUE KEY `numero _mov_UNIQUE` (`numero _mov`),
  ADD KEY `fk_movimento_categoria_movimento1_idx` (`categoria_movimento_categoria_id`);

--
-- Indexes for table `Pessoa`
--
ALTER TABLE `Pessoa`
  ADD PRIMARY KEY (`cpf`,`digital`),
  ADD UNIQUE KEY `pessoa_Id_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `digital_UNIQUE` (`digital`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`usuario_Pessoa_cpf`,`usuario_categoria`),
  ADD KEY `fk_saldo_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`);

--
-- Indexes for table `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`registro_sev`,`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`),
  ADD UNIQUE KEY `registro_sev_UNIQUE` (`registro_sev`),
  ADD KEY `fk_servidor_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`categoria`,`Pessoa_cpf`,`Pessoa_digital`),
  ADD KEY `fk_usuario_Pessoa1_idx` (`Pessoa_digital`);

--
-- Indexes for table `usuario_acessa_movimento`
--
ALTER TABLE `usuario_acessa_movimento`
  ADD PRIMARY KEY (`movimento_numero _mov`,`movimento_categoria_movimento_categoria_id`,`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`),
  ADD KEY `fk_usuario_acessa_movimento_movimento1_idx` (`movimento_numero _mov`,`movimento_categoria_movimento_categoria_id`),
  ADD KEY `fk_usuario_acessa_movimento_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`numero_ven`,`usuario_categoria`,`usuario_Pessoa_cpf`),
  ADD UNIQUE KEY `numero_ven_UNIQUE` (`numero_ven`),
  ADD KEY `fk_venda_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`visitante_id`,`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`),
  ADD UNIQUE KEY `idvisitante_UNIQUE` (`visitante_id`),
  ADD KEY `fk_visitante_usuario1_idx` (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `cardapio_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movimento`
--
ALTER TABLE `movimento`
  MODIFY `numero _mov` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `numero_ven` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitante`
--
ALTER TABLE `visitante`
  MODIFY `visitante_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_Pessoa1` FOREIGN KEY (`Pessoa_cpf`,`Pessoa_digital`) REFERENCES `Pessoa` (`cpf`, `digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `adminstrador_atualiza_cardapio`
--
ALTER TABLE `adminstrador_atualiza_cardapio`
  ADD CONSTRAINT `fk_adminstrador_atualiza_cardapio_administrador1` FOREIGN KEY (`administrador_registro_adm`) REFERENCES `administrador` (`registro_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adminstrador_atualiza_cardapio_cardapio1` FOREIGN KEY (`cardapio_cardapio_Id`) REFERENCES `cardapio` (`cardapio_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`, `Pessoa_digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `avaliar`
--
ALTER TABLE `avaliar`
  ADD CONSTRAINT `fk_avaliar_Pessoa1` FOREIGN KEY (`Pessoa_cpf`) REFERENCES `Pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `movimento`
--
ALTER TABLE `movimento`
  ADD CONSTRAINT `fk_movimento_categoria_movimento1` FOREIGN KEY (`categoria_movimento_categoria_id`) REFERENCES `categoria_movimento` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `fk_saldo_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servidor`
--
ALTER TABLE `servidor`
  ADD CONSTRAINT `fk_servidor_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`, `Pessoa_digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_Pessoa1` FOREIGN KEY (`Pessoa_digital`) REFERENCES `Pessoa` (`digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_acessa_movimento`
--
ALTER TABLE `usuario_acessa_movimento`
  ADD CONSTRAINT `fk_usuario_acessa_movimento_movimento1` FOREIGN KEY (`movimento_numero _mov`,`movimento_categoria_movimento_categoria_id`) REFERENCES `movimento` (`numero _mov`, `categoria_movimento_categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_acessa_movimento_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`, `Pessoa_digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `visitante`
--
ALTER TABLE `visitante`
  ADD CONSTRAINT `fk_visitante_usuario1` FOREIGN KEY (`usuario_categoria`,`usuario_Pessoa_cpf`,`usuario_Pessoa_digital`) REFERENCES `usuario` (`categoria`, `Pessoa_cpf`, `Pessoa_digital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
