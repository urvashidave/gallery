<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ADMIN
                <small>Subheading</small>
            </h1>

            <?php 
//            $result_set = User::find_all_user();
//            while ($row = mysqli_fetch_array($result_set)) {
//                echo $row['username'] . "<br>";
//            }
//            $found_user = User::find_user_by_id(1);
//            $user = User::instantiation($found_user);
//            
//            
//            echo $user->firstname;
            $users = User::find_all_user();
            foreach ($users as $user){
                echo $user->id."<br>";
                
            $found_user=User::find_user_by_id(2);
            echo $found_user->username;
            
            //$pictues = new Pictures();
    
            }
            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>

