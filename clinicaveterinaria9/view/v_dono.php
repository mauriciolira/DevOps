<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastro de donos</h3>
            </div>

            <div class="title_right">
                <div class="pull-right">
                    <div class="input-group">                         
                        <a href="donoCadastrar.php?action=insert"><button type="button" class="btn btn-round btn-success">Cadastrar fornecedor</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>donos cadastrados</h2>
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
                       // FornecedorDAO forn = new FornecedorDAO();
                       // List<Fornecedor> lsforn = forn.selecionar();
                    ?>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Raz�o social</th>
                                <th>Ativo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             //   for (int i = 0; i < lsforn.size(); i++) {
                            ?>
                            <tr>
                                <td><?php // out.print(lsforn.get(i).getId());?></td>
                                <td><?php // out.print(lsforn.get(i).getRazaoSocial());?></td>
                                <td><?php//  out.print(lsforn.get(i).getAtivo());?></td>
                                <td><a href="fornecedorCadastrar.php?action=update&id=<?php//= lsforn.get(i).getId()?>">
                                        <i class="fa fa-edit"></i> Editar
                                    </a></td>
                            </tr>
                            <?php//                                }
                            ?>
                        </tbody>
                    </table>

                </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#example').dataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>