<?php

class FMViewFormMakerSubmits {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $model;


  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($model) {
    $this->model = $model;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function display() {
    if (isset($_GET['form_id']) && isset($_GET['group_id'])) {
      $form_id = esc_html(stripslashes($_GET['form_id']));
      $label_order = $this->model->get_from_label_order($form_id);
      $group_id = esc_html(stripslashes($_GET['group_id']));
      $rows = $this->model->get_submissions($group_id);
      $labels_id = array();
      $labels_name = array();
      $labels_type = array();
      $label_all = explode('#****#', $label_order);
      $label_all = array_slice($label_all, 0, count($label_all) - 1);
      foreach ($label_all as $key => $label_each) {
        $label_id_each = explode('#**id**#', $label_each);
        array_push($labels_id, $label_id_each[0]);
        $label_oder_each = explode('#**label**#', $label_id_each[1]);
        array_push($labels_name, $label_oder_each[0]);
        array_push($labels_type, $label_oder_each[1]);
      }
      ?>
      <style>
        table.submit_table {
          font-family: verdana,arial,sans-serif;
          border-width: 1px;
          border-color: #999999;
          border-collapse: collapse;
        }
        table.submit_table td {
          padding: 6px;
          border: 1px solid #fff;
          font-size: 13px;
        }
        .field_label {
          background: #E4E4E4;
          font-weight: bold;
        }
        .field_value {
          background: #f0f0ee;
        }
      </style>		
      <table class="submit_table">
				<tr>
					<td class="field_label">ID:	</td>
					<td class="field_value"><?php echo $rows[0]->group_id; ?></td>
				</tr>
        <tr>
					<td class="field_label"><?php echo __("Date","form_maker"); ?>: </td>
					<td class="field_value"><?php echo $rows[0]->date; ?></td>
				</tr>
        <tr>
					<td class="field_label">IP: </td>
					<td class="field_value"><?php echo $rows[0]->ip; ?></td>
        </tr>
        <?php 
        foreach ($labels_id as $key => $label_id) {
          if ($labels_type[$key] != '' and $labels_type[$key] != 'type_editor' and $labels_type[$key] != 'type_submit_reset' and $labels_type[$key] != 'type_map' and $labels_type[$key] != 'type_captcha') {
            $element_value = '';
            foreach ($rows as $row) {
              if ($row->element_label == $label_id) {
                $element_value =	$row->element_value;
                break;
              }
              else {
                $element_value =	'element_valueelement_valueelement_value';
              }
            }
			if($labels_type[$key] == "type_name")
				$element_value = str_replace("@@@", " ", $element_value);
            if ($element_value == "element_valueelement_valueelement_value") {
              continue;
            }
            ?>
            <tr>
              <td class="field_label"><?php echo $labels_name[$key]; ?></td>
              <td class="field_value"><?php echo str_replace("***br***", '<br>', $element_value); ?></td>
            </tr>
            <?php
          }
        }
        ?>
      </table>
      <?php
    }
    die();
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