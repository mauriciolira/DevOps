
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

                <h3>Cadastro de Veterinario</h3>

            </div>

            <div class="title_right">
                <div class="pull-right">
                    <div class="input-group">
                        <a href="veterinarioCadastrar.php?action=insert"> <button type="button" class="btn btn-round btn-success">Cadastrar veterinario</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Veterinarios cadastrados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                        //ClienteDAO cli = new ClienteDAO();
                        //List<Cliente> lstcli = cli.selecionar();
                    ?>

                     <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Aniversario</th>
                                <th>Cep</th>
                                <th>CRMV</th>
                                <th>Logradouro</th>
                                <th>Ativo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //for (int i = 0; i < lstcli.size(); i++) {
                            ?>
                            <tr>
                                <td><?php // out.print(lstcli.get(i).getId());?></td>
                                <td><?php  //out.print(lstcli.get(i).getNome());?></td>
                                <td><?php // out.print(lstcli.get(i).getSobreNome());?></td>
                                <td><?php // out.print(lstcli.get(i).getAniversario());?></td>
                                <td><?php // out.print(lstcli.get(i).getCep());?></td>
                                <td><?php // out.print(lstcli.get(i).getCRMV());?></td>
                                <td><?php // out.print(lstcli.get(i).getLogradouro());?></td>
                                <td><?php // out.print(lstcli.get(i).getAtivo());?></td>
                                <td><a href="clienteCadastrar.php?action=update&id=<?php//= lstcli.get(i).getId()?>">
                                        <i class="fa fa-edit"></i> Editar
                                    </a></td>
                            </tr>
                            <?php                            //    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>                       
    <!-- /page content -->
    
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').dataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>