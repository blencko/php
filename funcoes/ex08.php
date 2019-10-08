<?php

$hierarquia = array(
    array(
        'nome_cargo'=> 'CEO',
        'subordinados'=>array(

            //inicio:Diretor Comercial
            array(

                'nome_cargo'=> 'Diretor Comercial',
                //Inicio Gerente de Vendas

                'subordinados'=>array(

                    array(

                     'nome_cargo'=>'Gerente de Vendas'

                    )

                    //Termino:Gerente de Vendas

                )

            ),

            //Termino:Diretor Comercial

            //Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //inicio Supervisor de contas
                            'nome_cargo'=>'Supervisor de contas'
                                             )
                         ),//termino de gerente de contas

                    array(
                    'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(//inicio supervisor de compras
                            array(
                                'nome_cargo'=>'Supervisor de compras'
                                 )
                            )

                          )

                                         )
                 )
            //termino Diretor Financeiro
        )

    )

);

function exibe($cargos){

    $html = '<ul>';
   foreach ($cargos as $cargo){
       $html.="<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0)   {
            $html .= exibe($cargo['subordinados']);
       }

        $html.="</li>";
    }



    $html .= '</ul>';

    return $html;


}

echo exibe($hierarquia);






































?>