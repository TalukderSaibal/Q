<?php $key = $question_info_s[0]['question_order'];?>	
<?php if(array_key_exists ($key ,$total_question )){ ?>
<input type="hidden" id="next_question" value="<?php echo $question_info_s[0]['question_order'] +1;?>" name="next_question" />
<?php }else{ ?>
<input type="hidden" id="next_question" value="0" name="next_question" />
<?php }?>
<input type="hidden" id="module_id" value="<?php echo $question_info_s[0]['module_id']?>" name="module_id">
<input type="hidden" id="current_order" value="<?php echo $key;?>" name="current_order">	
<input type='hidden' id="module_type" value="<?php echo $question_info_s[0]['moduleType'];?>" name='module_type'>
<?php 

	//$link = null;
	$desired=$this->session->userdata('data');
	$link_next = null;
	if(is_array($desired))
	{
		$link_key = $key-1;
		if(array_key_exists ( $link_key , $desired ))
		{
			$link = $desired[$link_key]['link'];
		}
		$link_key_next = $key;
		if(array_key_exists ( $link_key_next , $desired ))
		{
			$question_id = $question_info_s[0]['question_order']+1;
			$link1 = base_url();
			$link_next= $link1.'get_tutor_tutorial_module/'.$question_info_s[0]['module_id'].'/'.$question_id;
		}
	}
	
?>
<br>
 	<div class="ss_student_board">
 			 <div class="ss_s_b_top">
				<div class="col-sm-6 ss_index_menu">
					<a href="#">Index</a>
				</div>
				<div class="col-sm-6 ss_next_pre_top_menu">
					<?php if($question_info_s[0]['moduleType'] == 1){ ?>
						<?php if($question_info_s[0]['question_order'] == 1){?>
							<a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>					
						<?php }else{ ?>
							<a class="btn btn_next" href="<?php echo $link;?>"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>					
						<?php }?>
					<?php }else{ ?>
						<a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>					
					<?php }?>
					
				<!--	<?php if($question_info_s[0]['question_order'] == 1){?>
						<a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>					
					<?php }else{ ?>
						<a class="btn btn_next" href="<?php echo $link;?>"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>					
					<?php }?>-------->

					
					<?php if($link_next != null){ ?>
						<a class="btn btn_next" href="<?php echo $link_next;?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Next</a>									
					<?php }else{ ?>
						<a class="btn btn_next" href="javascript:void(0);"><i class="fa fa-caret-right" aria-hidden="true"></i> Next</a>					
					<?php }?>
											 		 							
					<a class="btn btn_next" href="#">Draw <img src="assets/images/icon_draw.png"></a>
				</div>
			 </div>
			<div class="container-fluid">
				<div class="row">
				    <div class="ss_s_b_main" style="min-height: 100vh">
				<div class="col-sm-4">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span><img src="assets/images/icon_solution.png"> Solution</span> Question</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <textarea class="" name="questionName" style="height: 255px;width: 288px;text-align: center;padding: 50;"><?php echo strip_tags($question_info_s[0]['questionName']);?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $question_info_s[0]['question_id'];?>" name="question_id" id="question_id">
                <div class="col-sm-4">
                    <div class="panel-group" id="saccordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#saccordion" href="#collapseTow" aria-expanded="true" aria-controls="collapseOne">   Answer</a>
                                </h4>
                            </div>
                            <div id="collapseTow" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <textarea name="answer" class="mytextarea"></textarea>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
					  <button class="btn btn_next" id="answer_matching">Submit</button>
					  </div>
				    <div class="col-sm-4"></div>
					
                </div>				
					 	<div class="col-sm-4">
					 		<div class="panel-group" id="raccordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a role="button" data-toggle="collapse" data-parent="#taccordion" href="#collapsethree" aria-expanded="true" aria-controls="collapseOne">  
									<span>Module Name: <?php echo $question_info_s[0]['module_type']?></span></a>
							      </h4>
							    </div>
							    <div id="collapsethree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body">
							      	<div class=" ss_module_result">
									  <div class="table-responsive">
										<table class="table table-bordered">
										  	<thead>    
										  		<tr>
										  			<th></th>
										  			<th>SL</th>
										  			<th>Mark</th>
										  			<th>Obtained</th>
										  			<th>Description</th>										  			
										  		</tr>
										  	</thead>
										  	<tbody>
											<?php $i=1;foreach($total_question as $ind){ ?>
												<tr>
										  			<td> </td>
										  			<td><?php echo $ind['question_order'];?></td>
										  			<td><?php echo $ind['questionMarks'];?></td>
										  			<td><?php echo $ind['questionMarks'];?></td>
										  			<td><a  class="text-center" onclick="showModalDes(<?php echo  $i;?>);"><img src="assets/images/icon_details.png"></a></td>
										  		</tr>
											<?php $i++;}?>
										  	</tbody>
										  </table>
										</div>
							        </div>
							      </div>
							    </div>
							  </div>							 							  
							</div>
					 	</div>					
					</div>				 
				</div>
			 </div>
		</div>
	</div>	
</section>

<div class="modal fade ss_modal" id="ss_info_sucesss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
      </div>
      <div class="modal-body row">
        <img src="assets/images/icon_sucess.png" class="pull-left"> <span class="ss_extar_top20">Your answer is correct</span> 
      </div>
      <div class="modal-footer">
        <button id="get_next_question" type="button" class="btn btn_blue" data-dismiss="modal">Ok</button>        
      </div>
    </div>
  </div>
</div>
<div class="modal fade ss_modal" id="ss_info_worng" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
      </div>
      <div class="modal-body row">
        <i class="fa fa-close" style="font-size:20px;color:red"></i> <span class="ss_extar_top20">Your answer is wrong</span>
		 <br><?php echo strip_tags($question_info_s[0]['answer']);?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn_blue" data-dismiss="modal">close</button>         
      </div>
    </div>
  </div>
</div>
<?php $i=1;foreach($total_question as $ind){ ?>
<div class="modal fade ss_modal ew_ss_modal" id="show_description_<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel"> Question Description </h4>
			</div>
			<div class="modal-body">
				<textarea class="form-control" name="questionDescription"><?php echo $ind['questionDescription'];?></textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn_blue" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php $i++;}?>

<script>
$('#answer_matching').click(function(){
	
	var user_answer = CKEDITOR.instances.answer.getData();
	var id = $('#question_id').val();
	var check_module_id = $('#module_id').val();
    var check_order_id = $('#next_question').val();	
	var next_question = $('#next_question').val();
	var current_order = $('#current_order').val();
	var module_type=$('#module_type').val();
	$.ajax({
		type: 'POST',
		url: 'st_answer_matching',
		data: {
			user_answer: user_answer,
			id: id,
			check_module_id:check_module_id,
			check_order_id:check_order_id,
			next_question:next_question,
			current_order:current_order,
			module_type:module_type
		},
		dataType: 'html',
		success: function(results){
			alert(results);
			if(results == 6)
			{
				alert('answer saved successfully');
				
			}
			if(results == 3){
				$('#ss_info_worng').modal('show');				
			}else if(results == 2){
				$('#ss_info_sucesss').modal('show');
				$('#get_next_question').click(function(){	
					commonCall();
				});
			}
			if(results == 5)
			{
				commonCall();
			}
			function commonCall()
			{
				alert(results);
				$question_order = $('#next_question').val();
				$module_id = $('#module_id').val();					
				if($question_order != 0){
					window.location.href = 'get_tutor_tutorial_module/'+$module_id+'/'+$question_order;
				}else{
					alert('That was last question');
				}
			}
		}
	});
		
	
	
});
function showModalDes(e)
{
	$('#show_description_'+e).modal('show');
}

</script>