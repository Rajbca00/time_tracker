<div class="container-fluid conn">
    <button type="button" id="add_task" class="btn btn-secondary add_task" data-toggle="modal" data-target="#add_task_modal">Add Task</button>
    <div class="row">
        <div class="offset-1 col-5">
        <!-- Today Tasks -->
            <div class="card w-100">
            <div class="card-header">
                Today's Tasks
            </div>
            <div class="card-block today_tasks">
               
                <!-- Today's Task Lists 
                <div class="task card">
                    <div class="card-body">
                        
                    </div>
                </div>
                -->

            </div>
            </div>
        </div>
        <div class="offset-1 col-5">
            <!-- Future Tasks -->
            <div class="card w-100">
            <div class="card-header">
                Future Tasks
            </div>
            <div class="card-block">
            </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Include Add Task Modal -->
    <?php 
        include 'addtaskmodal.php';
    ?>