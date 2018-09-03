
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="venda.php" class="site_title"><i class="fa fa-paw"></i>
                <span>Sistema Gestão/Venda</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        
        <div class="profile clearfix">
           
            <div class="profile_info">
                <span>Bem Vindo,
                <h2><?php echo 'jan';?></h2>
                             
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Venda <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="venda.php">Venda</a></li>
                            <li><a href="relatorioPedidos.php">Relatório de pedidos</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Cadastro <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="veterinario.php">Veterinário</a></li>
                            <li><a href="pet.php">Pet</a></li>
                            <li><a href="dono.php">Donos</a></li>                       
                        </ul>
                    </li>

                    <li><a href="login.php"><i class="fa fa-edit"></i> SAIR </a>
                    </li>
                </ul>
            </div>
        </div>   
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">                
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       <?php echo 'jan' ;?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/carrinho.png" width="30px" height="30px"> 
                    <span class="badge bg-green"><?php echo ''; ?></span>
                  </a                 
                </li>              
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <?php                         
                      //  if (lista != null){
                      //   Iterator i = lista.iterator();

                        //     while ( i.hasNext()){
                        //         lstItem = i.next().toString();
                        //         Item = lstItem.split(";"); 
                        //         NumberFormat formato = NumberFormat.getCurrencyInstance();
                        //       indice += 1 ;  
                     ?>
                    <li>                     
                        <span>Descrição: <?php //=Item[0] ?></span>
                        <p>
                            <span>Vlr unit: <?php echo '';?> </span>
                            <span>Qtde: <?php echo ''; ?> </span>
                            <span class="">Total: <?php echo ''; ?> </span>
                            <a href="excluirPedido.php?indice=<?php ?>">
                                <span class="time red bold">X</span>
                            </a>
                        </p>  
                    </li>
                    <?php                          
                         //   }
                     //   }
                    ?>
                    <li>
                      <div class="text-center">
                          <?php    
                          echo '';                     
                           //if (lista != null){
                               ?>
                           
                        <a data-toggle="modal" data-target="#modal-mensagem">
                          <strong>Finalizar pedido</strong>                        
                          <i class="fa fa-angle-right"></i>
                        </a>
                               <?php
                               //}
                               ?>
                      </div>
                    </li>
                  </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="modal fade" id="modal-mensagem">
    <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"><span>x</span></button>
                 <h4 class="modal-title">Selecione o cliente</h4>                 
             </div>
             <div class="modal-body">
                  <?php
                  echo '';
                       // ClienteDAO cl = new ClienteDAO();
                       // List<Cliente> lstcl = cl.selecionar();
                    ?>

                    <table id="datatable-responsive" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>                           
                                <th></th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            echo '';
                             //   for (int i = 0; i < lstcl.size(); i++) {
                            ?>                           
                              
                            </td>

                                <td>
                                    <a href="finalizar.php?id=<?php echo ''; //%= lstcl.get(i).getId() ?>&nome= <?php  //out.print(lstcl.get(i).getNome()); ?>">
                                        
                                     <?php echo '';  //out.print(lstcl.get(i).getNome());?>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            echo '';
                            // }
                            ?>
                        </tbody>
                    </table>             
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
             </div>
         </div>
     </div>
 </div>
<!-- /top navigation -->