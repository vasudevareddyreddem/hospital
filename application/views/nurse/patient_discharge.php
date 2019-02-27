<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Patient Discharge</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Nurse</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Patient Discharge</li>
            </ol>
         </div>
      </div>
      <div class="panel tab-border card-topline-green">
         <header class="panel-heading panel-heading-gray custom-tab ">
            <ul class="nav nav-tabs">
               <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Patients List</a>
               </li>
               <li class="nav-item"><a href="#about" data-toggle="tab" class="">Discharged Patients List</a>
               </li>
            </ul>
         </header>
         <div class="panel-body">
            <div class="tab-content">
               <div class="tab-pane active" id="home">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="table-responsive">
                              <table id="example4" class="table table-bordered" style="width:100%;">
                                 <thead>
                                    <tr>
                                       <th>Patient ID</th>
                                       <th>Patient Name</th>
                                       <th>Gender </th>
                                       <th>Age</th>
									   <th>Treatment Name</th>
                                       <th>Doctor Name</th>
                                       <th>Diagnosis</th>
                                       <th>Date of Admit</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(isset($ip_admitted_patient_list)  && count($ip_admitted_patient_list)>0){ ?>
                                    <?php foreach($ip_admitted_patient_list as $list){ ?>
                                    <tr>
                                       <td><?php echo $list['pid']; ?></td>
                                       <td><?php echo $list['name']; ?></td>
                                       <td><?php echo $list['gender']; ?></td>
                                       <td><?php echo $list['age']; ?></td>
									   <td><?php echo $list['treatment_name']; ?></td>
                                       <td><?php echo $list['resource_name']; ?></td>
                                       <td><?php echo $list['t_name']; ?></td>
                                       <td><?php echo $list['create_at']; ?></td>
                                       <td class="valigntop">
                                          <a href="<?php echo base_url('nurse/discharge/'.base64_encode($list['a_p_id'])); ?>">
                                          <i class="fa fa-edit"></i>Discharge </a>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane " id="about">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="">
                              <div class="panel-body">
                                 <div class="table-responsive">
                                     <table id="example5" class="table table-bordered" style="width:100%;">
                                 <thead>
                                    <tr>
                                       <th>Patient ID</th>
                                       <th>Patient Name</th>
                                       <th>Gender </th>
                                       <th>Age</th>
									   <th>Treatment Name</th>
                                       <th>Doctor Name</th>
                                       <th>Diagnosis</th>
                                       <th>Date of Admit</th>
                                       <th>Date of Discharge</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(isset($ip_discharge_patient_list)  && count($ip_discharge_patient_list)>0){ ?>
                                    <?php foreach($ip_discharge_patient_list as $list){ ?>
                                    <tr>
                                       <td><?php echo $list['pid']; ?></td>
                                       <td><?php echo $list['name']; ?></td>
                                       <td><?php echo $list['gender']; ?></td>
                                       <td><?php echo $list['age']; ?></td>
									   <td><?php echo $list['treatment_name']; ?></td>
                                       <td><?php echo $list['resource_name']; ?></td>
                                       <td><?php echo $list['t_name']; ?></td>
                                       <td><?php echo $list['create_at']; ?></td>
                                       <td><?php echo $list['discharge_date']; ?></td>
                                     
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
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
         <div class="clearfix">&nbsp;</div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
       $('#example4').DataTable( {
           "order": [[ 0, "desc" ]]
       } );
   } ); 
   $(document).ready(function() {
       $('#example5').DataTable( {
           "order": [[ 0, "desc" ]]
       } );
   } );
</script>
