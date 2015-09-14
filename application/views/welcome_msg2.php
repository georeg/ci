<?php
/*
<strong>CODEIGNITER TEST PAGE WITH HELPER</strong><br>

<?php echo egs1();?> <br><br>
<?php echo form_open(base_url().'egs/send');?>



Username: <?php echo form_input('username', '');?> <br><br>
Password: <?php echo form_input('password', '');?> <br><br>
Notes: <?php echo form_input('textarea', '');?> <br><br>
Size: 
<?php
$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );

$shirts_on_sale = array('small', 'large');

echo form_dropdown('size', $options, 'small');
?> <br><br>

Checkbox: <br>
<?php
$data = array(
    'name'        => 'newsletter',
    'id'          => 'newsletter',
    'value'       => 'accept',
    'checked'     => FALSE,
    'style'       => 'margin:10px',
    );
    
echo form_checkbox($data);
?>Test 
<?php
$data2 = array(
    'name'        => 'eric',
    'id'          => 'eric',
    'value'       => 'accept',
    'checked'     => TRUE,
    'style'       => 'margin:10px',
    );
    
echo form_checkbox($data2);
?>Eric <br><br>

<?php echo form_submit('submit_form', 'Submit'); ?><br><br>

<?php echo base_url();?><br><br>

<?php echo anchor('http://www.google.com', 'Google', 'title="Link"');?><br><br>

<?php
$atts = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0'
            );

echo anchor_popup('http://www.google.com', 'Google Pop Up!', $atts);
?><br><br>

<?php echo $something; ?>
*/

?>



