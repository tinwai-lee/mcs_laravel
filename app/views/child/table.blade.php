<?php 
$column_titles = $table['columns_titles'];
$rows = $table['data'];
?>
<div class="panel panel-primary">
              <div class="panel-heading">
                <div class="panel-title"><?php echo $table['title'];?></div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      	<?php 
                      		//print form headers
                      		
                      		foreach($column_titles as $title){
								?><th class="header"><?php echo $title; ?><i class="fa fa-sort"></i></th><?php
							}
                      	?>
                      	<th class="header"> </th>
                        <!-- <th class="header">Order # <i class="fa fa-sort"></i></th>
                        <th class="header">Order Date <i class="fa fa-sort"></i></th>
                        <th class="header">Order Time <i class="fa fa-sort"></i></th>
                        <th class="header">Amount (USD) <i class="fa fa-sort"></i></th> -->
                      </tr>
                    </thead>
                    <tbody>
                    	<?php 
                    		foreach ($rows as $row){
								?><tr><?php 
								foreach ($row as $field){
									?><td><?php echo ($field); ?></td><?php 
								}
								?>
								<td><i class="fa fa-edit"></i>&nbsp;<i class="fa fa-trash-o"></i></td>
								</tr><?php 
							}
                    	?>
                      <!-- <tr>
                        <td>3326</td>
                        <td>10/21/2013</td>
                        <td>3:29 PM</td>
                        <td>$321.33</td>
                      </tr>-->
                    </tbody>
                  </table>
                </div>
                <!--  <div class="text-right">
                  <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>-->
              </div>
            </div>
