<<<<<<< HEAD
<?php echo $this->render_table_name(); ?>
<?php if ($this->is_add or $this->is_csv or $this->is_print){?>
        <div class="xcrud-top-actions">
            <?php echo $this->csv_button('btn btn-default pull-right','glyphicon glyphicon-file'); ?>
            <?php echo $this->print_button('btn btn-default pull-right','glyphicon glyphicon-print'); ?>
            <?php echo $this->add_button('btn btn-success','glyphicon glyphicon-plus-sign'); ?>
            <div class="clearfix"></div>
        </div>
<?php } ?>
        <div class="xcrud-list-container">
        <table class="xcrud-list table table-striped table-hover table-bordered">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
        </div>
        <div class="xcrud-nav">
            <?php echo $this->render_limitlist(true); ?>
            <?php echo $this->render_pagination(); ?>
            <?php echo $this->render_search(); ?>
            <?php echo $this->render_benchmark(); ?>
        </div>
=======
<?php echo $this->render_table_name(); ?>
<?php if ($this->is_add or $this->is_csv or $this->is_print){?>
        <div class="xcrud-top-actions">
            <?php echo $this->csv_button('btn btn-default pull-right','glyphicon glyphicon-file'); ?>
            <?php echo $this->print_button('btn btn-default pull-right','glyphicon glyphicon-print'); ?>
            <?php echo $this->add_button('btn btn-success','glyphicon glyphicon-plus-sign'); ?>
            <div class="clearfix"></div>
        </div>
<?php } ?>
        <div class="xcrud-list-container">
        <table class="xcrud-list table table-striped table-hover table-bordered">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
        </div>
        <div class="xcrud-nav">
            <?php echo $this->render_limitlist(true); ?>
            <?php echo $this->render_pagination(); ?>
            <?php echo $this->render_search(); ?>
            <?php echo $this->render_benchmark(); ?>
        </div>
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
