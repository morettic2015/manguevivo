<?php

class FMControllerWidget extends WP_Widget {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $view;
  private $model;
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
    $widget_ops = array(
      'classname' => 'form_maker_widget',
      'description' => 'Add Form Maker widget.'
    );
    // Widget Control Settings.
    $control_ops = array('id_base' => 'form_maker_widget');
    // Create the widget.
    parent::__construct('form_maker_widget', 'Form Maker', $widget_ops, $control_ops);
    require_once WD_FM_DIR . "/admin/models/FMModelWidget.php";
    $this->model = new FMModelWidget();

    require_once WD_FM_DIR . "/admin/views/FMViewWidget.php";
    $this->view = new FMViewWidget($this->model);
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////

  public function widget($args, $instance) {
    $this->view->widget($args, $instance);
	}

 	public function form( $instance ) {
    $this->view->form($instance, parent::get_field_id('title'), parent::get_field_name('title'), parent::get_field_id('form_id'), parent::get_field_name('form_id'));    
	}

	// Update Settings.
  public function update($new_instance, $old_instance) {
    $instance['title'] = $new_instance['title'];
    $instance['form_id'] = $new_instance['form_id'];
    return $instance;
  }

  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}