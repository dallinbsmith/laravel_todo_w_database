<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
            <div class="col-md-12 mt-4 text-center">
                <form action="<?php echo e(route('todolist.update', [$todo['id'], session('token')])); ?>" method="post">
                    <div class='col-md-5 d-inline-block m-3 pt-3 rounded shadow note-card'>
                            <div class = "row">
                                <div class ="col-2 pt-2 pl-4">
                                    <img src="https://img.icons8.com/ios/50/000000/edit-file.png"></img>
                                </div> 
                                <div class ="col-10">
                                        <div class="form-group">
                                                <label class="todo-title" for="title">Title</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="title"
                                                    name="title"
                                                    value="<?php echo e($todo['title']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class = "todo-content" for="content">Content</label>
                                                <input type="text" class="form-control form-control-content" value="<?php echo e($todo['content']); ?>" name="content" cols="40" rows="5"></input>
                                            </div>  
                                        <div class = 'pt-1 pr-3 text-left todo-content'>
                                        </div>     
                                        <div class = "row mt-3 mb-4 text-center">
                                             <div class ="col-6">
                                                <a class="btn btn-primary form-button" href="<?php echo e(route('todolist.index')); ?>">Cancel</a>
                                            </div>
                                            <div class ="col-6">
                                                <button type="submit" class="btn btn-primary form-button">Confirm</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo e($todo['id']); ?>">
                                        <?php echo e(csrf_field()); ?>

                               </div>
                            </div> 
                        </div>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>