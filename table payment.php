<?php
                   $payments = [
                       [
                           'name' => 'karthi',
                           'payment_schedule' =>'first',
                           'bill_number'=>'0012223',
                           'amount_paid'=> 'dhs100,000',
                           'balance_amount'=>'dhs500,00',
                           'date'=> '22_dec,2022'
                       ],
                       [
                           'name' => 'karthi',
                           'payment_schedule' =>'first',
                           'bill_number'=>'0012223',
                           'amount_paid'=> 'dhs100,000',
                           'balance_amount'=>'dhs500,00',
                           'date'=> '22_dec,2022'
                       ],
                       [
                           'name' => 'karthi',
                           'payment_schedule' =>'first',
                           'bill_number'=>'0012223',
                           'amount_paid'=> 'dhs100,000',
                           'balance_amount'=>'dhs500,00',
                           'date'=> '22_dec,2022'
                       ],
                       [
                           'name' => 'karthi',
                           'payment_schedule' =>'first',
                           'bill_number'=>'0012223',
                           'amount_paid'=> 'dhs100,000',
                           'balance_amount'=>'dhs500,00',
                           'date'=> '22_dec,2022'
                       ],
                       [
                           'name' => 'karthi',
                           'payment_schedule' =>'first',
                           'bill_number'=>'0012223',
                           'amount_paid'=> 'dhs100,000',
                           'balance_amount'=>'dhs500,00',
                           'date'=> '22_dec,2022'
                       ]
                       ];
                       foreach($payments as $payment){
                           echo '<tr>
                           <td>'.$payment['name'].'</td>
                           <td>'.$payment['payment_schedule'].'</td>
                           <td>'.$payment['bill_number'].'</td>
                           <td>'.$payment['amount_paid'].'</td>
                           <td>'.$payment['balance_amount'].'</td>
                           <td>'.$payment['date'].'</td>
                           <td>
                               <a href=""> <i class="bi bi-eye " style="color: blue;"></i></a>
                           </td>
                       </tr>';
                       }

                   ?>
                   