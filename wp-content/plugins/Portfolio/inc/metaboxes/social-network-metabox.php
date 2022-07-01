<?php
add_action('admin_init', 'skill_add_meta_boxes', 3);

function skill_add_meta_boxes()
{
  add_meta_box('skill-settings', 'Info', 'render_skill_meta_box', 'skill', 'normal', 'high');
}
function render_skill_meta_box($post)
{
  global $post;
  $image_id = get_post_meta($post->ID, '_skill_icon', true);
  $skill_name = get_post_meta($post->ID, '_skill_name', true);

  wp_nonce_field('skill_meta_box_nonce', 'skill_meta_box_nonce');

?>
  <table width="70%">
    <tr>
      <th><label>Icon Image</label></th>
      <td>
        <div class="upload-media">
          <ul>
            <?php
            $display = 'none';
            if (!empty($image_id)) {
              if ($image_attributes = wp_get_attachment_url($image_id, 'full')) {
                $display = 'inline-block';
                echo '<li data-attechment-id=' . esc_attr($image_id) . '><a href="' . esc_url($image_attributes) . '" target="_blank"><img src="' . esc_url($image_attributes) . '" /></a><i class="dashicons dashicons-no delete-img"></i></li>';
              }
            }
            ?></ul>
          <a href="#" class="at_upload_image_button button"><?php echo (!empty($image_id)) ? 'Update' : 'Add'; ?></a>
          <input type="hidden" class="attachement-id skill_image" name="skill_image" id="skill_image" value="<?php echo $image_id; ?>" />
          <a href="#" class="at_remove_image_button button" style="display:inline-block;display:<?php echo $display; ?>">Remove</a>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row" valign="top"><label for="skill_name">Name</label></th>
      <td><input style="width:500px" type="text" name="skill_name" id="skill_name" value="<?php echo esc_attr($skill_name); ?>" /></td>
    </tr>
  </table>
  <style type="text/css">
    .upload-media ul li .delete-img {
      position: absolute;
      right: 3px;
      top: 2px;
      background: aliceblue;
      border-radius: 50%;
      cursor: pointer;
      font-size: 14px;
      line-height: 20px;
      color: red;
    }

    .upload-media ul li {
      width: 120px;
      display: inline-block;
      vertical-align: middle;
      margin: 5px;
      position: relative;
    }

    .upload-media ul li img {
      width: 100%;
    }
  </style>
  <script type="text/javascript">
    jQuery(function($) {

      $('body').on('click', '.at_upload_image_button', function(e) {
        e.preventDefault();

        var button = $(this),
          custom_uploader = wp.media({
            title: 'Insert image',
            button: {
              text: 'Use this image'
            },
            multiple: false
          }).on('select', function() {

            var attech_ids = '';
            attachments
            var attachments = custom_uploader.state().get('selection'),
              attachment_ids = new Array(),
              i = 0;
            attachments.each(function(attachment) {
              attachment_ids[i] = attachment['id'];
              attech_ids = attachment['id'];
              if (attachment.attributes.type == 'image') {
                $(button).siblings('ul').html('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.url + '" /></a><i class=" dashicons dashicons-no delete-img"></i></li>');
              } else {
                $(button).siblings('ul').html('<li data-attechment-id="' + attachment['id'] + '"><a href="' + attachment.attributes.url + '" target="_blank"><img class="true_pre_image" src="' + attachment.attributes.icon + '" /></a><i class=" dashicons dashicons-no delete-img"></i></li>');
              }

              i++;
            });

            var ids = $(button).siblings('.attachement-id').attr('value');
            if (ids) {
              var ids = attech_ids;
              $(button).siblings('.attachement-id').attr('value', ids);
            } else {
              $(button).siblings('.attachement-id').attr('value', attachment_ids);
            }
            $(button).siblings('.at_remove_image_button').show();
            $(button).siblings('.at_upload_image_button').hide();
          })
          .open();
      });

      $('body').on('click', '.at_remove_image_button', function() {
        $(this).hide().prev().val('').prev().addClass('button').html('Add Media');
        $(this).parent().find('ul').empty();
        $(button).siblings('.at_upload_image_button').show();
        return false;
      });

      $('body').on('click', '.upload-media ul li i.delete-img', function() {
        var ids = [];
        var this_c = jQuery(this);
        jQuery(this).parent().remove();
        jQuery('.upload-media ul li').each(function() {
          ids.push(jQuery(this).attr('data-attechment-id'));
        });
        jQuery('.upload-media').find('input[type="hidden"]').attr('value', ids);
        $(button).siblings('.at_upload_image_button').show();
      });

    });
  </script>
<?php
}

add_action('save_post', 'skill_meta_box_save');
function skill_meta_box_save($post_id)
{
  if (
    !isset($_POST['skill_meta_box_nonce']) ||
    !wp_verify_nonce($_POST['skill_meta_box_nonce'], 'skill_meta_box_nonce')
  )
    return;

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  if (!current_user_can('edit_post', $post_id))
    return;

  $old = get_post_meta($post_id, '_skill_icon', true);
  $new = $_POST['skill_image'];

  if (!empty($new) && $new != $old)
    update_post_meta($post_id, '_skill_icon', $new);
  elseif (empty($new) && $old)
    delete_post_meta($post_id, '_skill_icon', $old);

  $old_name = get_post_meta($post_id, '_skill_name', true);
  $new_name = $_POST['skill_name'];

  if (!empty($new_name) && $new_name != $old_name)
    update_post_meta($post_id, '_skill_name', $new_name);
  elseif (empty($new_name) && $old_name)
    delete_post_meta($post_id, '_skill_name', $old_name);
}
